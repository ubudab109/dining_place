<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Vendor;

class Restaurant extends Model
{

    protected $primaryKey = 'id';
    protected $dates = ['opening_time', 'closeing_time'];

    protected $fillable = [
        'name',
        'slug',
        'phone',
        'email',
        'logo',
        'latitude',
        'longtitude',
        'address',
        'footer_text',
        'minimum_order',
        'comission',
        'schedule_order',
        'opening_time',
        'closeing_time',
        'status',
        'vendor_id',
        'created_at',
        'updated_at',
        'free_delivery',
        'rating',
        'cover_photo',
        'delivery',
        'take_away',
        'food_section',
        'tax',
        'zone_id',
        'reviews_section',
        'subscription_id',
        'payment_website',
        'language_id',
        'type'
    ];

    protected $casts = [
        'minimum_order' => 'float',
        'comission' => 'float',
        'tax' => 'float',
        'schedule_order'=>'boolean',
        'free_delivery'=>'boolean',
        'vendor_id'=>'integer',
        'payment_website' => 'boolean',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'food_section',
    ];
    

    public function restaurantCategory()
    {
        return $this->hasMany(RestaurantCategories::class, 'restaurant_id', 'id');
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function document()
    {
        return $this->hasOne(RestaurantDocument::class, 'restaurant_id', 'id');
    }

    public function info()
    {
        return $this->hasOne(RestaurantInfo::class, 'restaurant_id', 'id');
    }
    
    public function foods()
    {
        return $this->hasMany(Food::class, 'restaurant_id', 'id');
    }

    public function language()
    {
        return $this->hasMany(LanguageRestaurant::class, 'restaurant_id', 'id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function discount()
    {
        return $this->hasOne(Discount::class);
    }

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }

    public function campaigns()
    {
        return $this->belongsToMany(Campaign::class);
    }
    
    public function itemCampaigns()
    {
        return $this->hasMany(ItemCampaign::class);
    }

    public function reviews()
    {
        return $this->hasManyThrough(Review::class, Food::class);
    }

    public function restaurantTable()
    {
        return $this->hasMany(RestaurantTable::class, 'restaurant_id', 'id');
    }

    public function reservation()
    {
        return $this->hasMany(ReservationCustomer::class, 'restaurant_id', 'id');
    }

    public function getScheduleOrderAttribute($value)
    {
        return \App\CentralLogics\Helpers::schedule_order()?(boolean)$value:(boolean)0;
    }
    public function getRatingAttribute($value)
    {
        $ratings = json_decode($value, true);
        $rating5 = $ratings?$ratings[5]:0;
        $rating4 = $ratings?$ratings[4]:0;
        $rating3 = $ratings?$ratings[3]:0;
        $rating2 = $ratings?$ratings[2]:0;
        $rating1 = $ratings?$ratings[1]:0;
        return [$rating5, $rating4, $rating3, $rating2, $rating1];
    }


    public function scopeDelivery($query)
    {
        $query->where('delivery',1);
    }
    
    public function scopeTakeaway($query)
    {
        $query->where('take_away',1);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
    
}
