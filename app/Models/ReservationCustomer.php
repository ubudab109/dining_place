<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationCustomer extends Model
{
    use HasFactory;

    protected $table = 'reservation_customer';
    protected $fillable = [
        'customer_name',
        'customer_phone',
        'customer_email',
        'restaurant_id',
        'status',
        'pax',
        'desc',
        'table_id',
        'reservation_date',
    ];

    public function restaurantTable()
    {
        return $this->belongsTo(RestaurantTable::class, 'table_id', 'id');
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class, 'restaurant_id', 'id');
    }
}
