<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Restaurant;
use Carbon\Carbon;

Carbon::setWeekStartsAt(Carbon::SATURDAY);
Carbon::setWeekEndsAt(Carbon::FRIDAY);

class Vendor extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'f_name',
        'l_name',
        'phone',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'created_at',
        'updated_at',
        'bank_name',
        'branch',
        'holder_name',
        'account_no',
        'image',
        'status',
        'firebase_token',
        'auth_token',
        'facebook_id',
    ];
    
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    protected $hidden = [
        'password',
        'auth_token',
        'remember_token',
    ];

    public function chat()
    {
        return $this->hasMany(Chat::class, 'vendor_id', 'id');
    }

    public function restaurant()
    {
        return $this->hasOne(Restaurant::class, 'vendor_id', 'id');
    }

    public function order_transaction()
    {
        return $this->hasMany(OrderTransaction::class);
    }
    
    public function subsPayment()
    {
        return $this->hasMany(SubscriptionPayment::class, 'vendor_id', 'id');
    }
    
    public function todays_earning()
    {
        return $this->hasMany(OrderTransaction::class)->whereDate('created_at',now());
    }

    public function this_week_earning()
    {
        return $this->hasMany(OrderTransaction::class)->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
    }

    public function this_month_earning()
    {
        return $this->hasMany(OrderTransaction::class)->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'));
    }

    public function todaysorders()
    {
        return $this->hasManyThrough(Order::class, Restaurant::class)->whereDate('accepted',now());
    }

    public function this_week_orders()
    {
        return $this->hasManyThrough(Order::class, Restaurant::class)->whereBetween('accepted', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
    }

    public function this_month_orders()
    {
        return $this->hasManyThrough(Order::class, Restaurant::class)->whereMonth('orders.created_at', date('m'))->whereYear('orders.created_at', date('Y'));
    }

    public function orders()
    {
        return $this->hasManyThrough(Order::class, Restaurant::class);
    }

    public function restaurants()
    {
        return $this->hasMany(Restaurant::class);
    }

    public function withdrawrequests()
    {
        return $this->hasMany(WithdrawRequest::class);
    }
    
    public function wallet()
    {
        return $this->hasOne(RestaurantWallet::class);
    }

    public function notifications()
    {
        return $this->hasMany(UserNotification::class, 'vendor_id', 'id');
    }

}
