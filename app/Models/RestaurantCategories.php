<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantCategories extends Model
{
    use HasFactory;

    protected $table = 'restaurant_categori';
    protected $fillable = [
        'restaurant_id',
        'type_id',
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class, 'restaurant_id', 'id');
    }

    public function type()
    {
        return $this->belongsTo(RestaurantType::class, 'type_id', 'id');
    }
}
