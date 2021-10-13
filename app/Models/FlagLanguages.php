<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlagLanguages extends Model
{
    use HasFactory;

    protected $table = 'flags';

    public function languages()
    {
        return $this->belongsTo(Languages::class, 'lang_code', 'code');
    }
}
