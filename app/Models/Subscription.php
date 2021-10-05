<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    public $table = 'subcriptions';
    protected $fillable = [
        'subs_name',
        'subs_price',
        'subtitle',
        'is_free',
        'desc',
        'created_at',
        'updated_at'
    ];

    public function subsPayment()
    {
        return $this->hasMany(SubscriptionPayment::class, 'subs_id', 'id');
    }


}
