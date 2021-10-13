<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExcludeCoupons extends Model
{
    use HasFactory;

    protected $table = 'exclude_coupons';
    protected $fillable = [
        'coupon_id',
        'food_id'
    ];

    public function coupon()
    {
        return $this->belongsTo(Coupon::class, 'coupon_id', 'id');
    }

    public function food()
    {
        return $this->belongsTo(Food::class, 'food_id', 'id');
    }
}
