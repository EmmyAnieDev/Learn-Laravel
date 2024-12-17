<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    
    function users()
    {
        return $this->belongsToMany(User::class);
    }
}
