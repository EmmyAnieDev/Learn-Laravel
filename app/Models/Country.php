<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name'];

    function states()
    {
        return $this->hasMany(State::class);
    }

    // Country HAS MANY cities THROUGH state
    function cities()
    {
        return $this->hasManyThrough(City::class, State::class);
    }
}
