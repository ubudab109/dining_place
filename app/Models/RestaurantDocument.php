<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantDocument extends Model
{
    use HasFactory;

    protected $table = 'restaurant_document';
    protected $fillable = [
        'restaurant_id',
        'vendor_document',
        'vendor_npwp',
        'restaurant_npwp',
        'restaurant_siup',
        'restaurant_td'
    ];
    
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class, 'restaurant_id', 'id');
    }
}
