<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
   
    public function index()
    {
        // Delete data in DB

        $user = User::where('id', 9)->first();  // Retrieve the first user with the specified ID
        $user = User::findorfail(9);  // Find method only works with ID

        if (! isset($user)) {
            echo 'no user found!';
        }

        $user->delete();

        dd($user);

    }
}
