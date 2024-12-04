<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
   
    public function index()
    {
        // Create data in DB

        // creating an instance of the User model class to access all attribute of database table users.
        $user = new User;

        $user->name = 'Anna Davies';
        $user->email = 'anna@gmail.com';
        $user->password = '123456';

        $user->save();

    }
}
