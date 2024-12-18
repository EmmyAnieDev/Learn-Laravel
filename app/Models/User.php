<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // protected $guarded = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // when working with one to one relationship
    function address()
    {
        return $this->hasOne(Address::class);
    }

    // when working with one to many relationship
    function addresses()
    {
        return $this->hasMany(Address::class);
    }

    // when working with one to many relationship
    function fragrances()
    {
        return $this->hasMany(Fragrance::class);
    }

    // when working with many to many relationship
    function cars()
    {
        return $this->belongsToMany(Car::class);
    }

    // Defines a one-to-one polymorphic relationship with the Image model.
    function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

}
