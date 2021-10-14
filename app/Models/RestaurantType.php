<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantType extends Model
{
    use HasFactory;

    protected $table = 'restaurant_type';
    protected $fillable = ['name'];

    public function restaurant()
    {
        return $this->hasMany(Restaurant::class, 'restaurant_type_id', 'id');
    }

    public function restaurantCategory()
    {
        return $this->hasMany(RestaurantCategories::class, 'type_id', 'id');
    }
}
