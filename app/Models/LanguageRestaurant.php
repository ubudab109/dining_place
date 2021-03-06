<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LanguageRestaurant extends Model
{
    use HasFactory;
    protected $table = 'language_restaurant';
    protected $fillable = [
        'name',
        'code',
        'restaurant_id',
        'created_at',
        'updated_at',
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class, 'restaurant_id', 'id');
    }

    public function languages()
    {
        return $this->belongsTo(Languages::class, 'code', 'code');
    }
}
