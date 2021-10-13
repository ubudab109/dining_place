<?php

namespace App\Models;

use App\Scopes\RestaurantScope;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $table = 'coupons';
    protected $fillable = [
        'title',
        'code',
        'start_date',
        'expire_date',
        'min_purchase',
        'max_discount',
        'discount_type',
        'coupun_type',
        'limit',
        'data',
    ];


    protected $casts = [
        'min_purchase' => 'float',
        'max_discount' => 'float',
        'discount' => 'float',
    ];

    public function exclude()
    {
        return $this->hasMany(ExcludeCoupons::class, 'coupon_id', 'id');
    }
    
    public function scopeActive($query)
    {
        return $query->where('status', '=', 1);
    }
    
    // protected static function booted()
    // {
    //     if(auth('vendor')->check())
    //     {
    //         static::addGlobalScope(new RestaurantScope);
    //     } 
    // }
}
