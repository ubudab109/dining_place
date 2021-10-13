<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantInfo extends Model
{
    use HasFactory;

    protected $table = 'restaurant_info';
    protected $fillable = [
        'restaurant_id',
        'instagram',
        'twitter',
        'facebook',
        'youtube',
        'linkedin',
        'google_plus',
        'snapchat',
        'tiktok',
        'pinterest',
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class, 'restaurant_id', 'id');
    }
}
