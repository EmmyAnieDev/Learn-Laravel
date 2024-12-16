<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fragrance extends Model
{
    protected $fillable = ['user_id', 'name'];

    function user()
    {
        return $this->belongsTo(User::class);
    }
}
