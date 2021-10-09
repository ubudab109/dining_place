<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNotification extends Model
{
    use HasFactory;
    protected $table = 'user_notifications';

    protected $fillable = [
        'data',
        'status',
        'user_id',
        'vendor_id',
        'delivery_man_id',
        'created_at',
        'updated_at',
    ];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class, 'vendor_id', 'id');
    }
    
    // public function getDataAttribute($value)
    // {
    //     return json_decode($value, true);
    // }
}
