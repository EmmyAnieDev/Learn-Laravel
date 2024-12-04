<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
   
    public function index()
    {
        // Update data in DB

        $user = User::where('id', 9)->first();  // Retrieve the first user with the specified ID
        $user = User::find(9);  // Find method only works with ID

        $user->name = 'Gabriella Frank';     // Update the user's name
        $user->email = 'gabi@gmail.com';

        $user->save();

        dd($user);

    }
}
