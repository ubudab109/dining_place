<?php

namespace App\Models;

use App\Scopes\RestaurantScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Food extends Model
{
    protected $casts = [
        'tax' => 'float',
        'price' => 'float',
        'status' => 'integer',
        'discount' => 'float',
        'set_menu' => 'integer',
        'category_id' => 'integer',
        'restaurant_id' => 'integer',
        'set_menu' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    protected $fillable = [
        'name',
        'description',
        'image',
        'category_id',
        'category_ids',
        'variations',
        'add_ons',
        'attributes',
        'choice_options',
        'price',
        'tax',
        'tax_type',
        'discount',
        'discount_type',
        'available_time_starts',
        'available_time_ends',
        'set_menu',
        'status',
        'restaurant_id',
        'created_at',
        'updated_at',
        'order_count',
        'language_id',
    ];


    protected $appends = ['total_discount']; 
    protected $primaryKey = 'id';

    public function scopeActive($query)
    {
        return $query->where('status', 1)->whereHas('restaurant', function($query){
            return $query->where('status', 1);
        });
    }

    public function getTotalDiscountAttribute()
    {
        $totalDisc = 0;
        if ($this->discount > 0) {
            if ($this->discount_type == 'percent') {
                $percent = $this->discount / 100;
                $calc = $this->price * $percent;
                $totalDisc += $this->price - $calc;
            } else if ($this->discount_type == 'amount') {
                $totalDisc += $this->price - $this->discount;
            }
        }

        return $totalDisc;
    }
    
    public function language()
    {
        return $this->belongsTo(LanguageRestaurant::class, 'language_id', 'id');
    }
    
    public function scopePopular($query)
    {
        return $query->orderBy('order_count', 'desc');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class)->latest();
    }

    public function rating()
    {
        return $this->hasMany(Review::class)
            ->select(DB::raw('avg(rating) average, count(food_id) rating_count, food_id'))
            ->groupBy('food_id');
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class, 'restaurant_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    
    public function orders()
    {
        return $this->hasMany(OrderDetail::class);
    }

    
    public function getCategoryAttribute()
    {
        $category=Category::find(json_decode($this->category_ids)[0]->id);
        return $category?$category->name:trans('messages.uncategorize');
    }

    protected static function booted()
    {
        if(auth('vendor')->check())
        {
            static::addGlobalScope(new RestaurantScope);
        } 
    }
    
}
