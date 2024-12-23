<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'country_id'];
    
    function cities()
    {
        return $this->hasMany(City::class);
    }
}
