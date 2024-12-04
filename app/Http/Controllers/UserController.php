<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
   
    public function index()
    {
        // Read data in DB

        # Get all users.
        $users = User::all(); // or User::get();

        # Get a specific user.
        $user = User::where('id', 8)->first();  // or User::find('8')
        
        dd ($user);

    }
}
