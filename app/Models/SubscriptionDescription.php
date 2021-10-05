<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionDescription extends Model
{
    use HasFactory;

    protected $table = 'subscription_desc';
    protected $fillable = [
        'subs_id',
        'desc',
    ];

    public function subs()
    {
        return $this->belongsTo(Subscription::class, 'subs_id', 'id');
    }
}
