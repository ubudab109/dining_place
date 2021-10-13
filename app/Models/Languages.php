<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Languages extends Model
{
    use HasFactory;

    protected $table = 'languages';
    
    public function flag()
    {
        return $this->hasOne(FlagLanguages::class ,'lang_code','code');
    }
}
