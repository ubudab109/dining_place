<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionPayment extends Model
{
    use HasFactory;

    protected $table = 'subscription_payment';
    protected $fillable = [
        'external_id',
        'subs_id',
        'status',
        'restaurant_id',
        'vendor_id',
        'price',
        'payment_type',
    ];

    public function subscription()
    {
        return $this->belongsTo(Subscription::class, 'subs_id', 'id');
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class, 'vendor_id', 'id');
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class, 'restaurant_id', 'id');
    }
}
