<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckRoleMiddleware;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    // static function middleware()
    // {
    //     return [new Middleware(CheckRoleMiddleware::class, only: ['store'])];
    // }

    function index()
    {
        return view('post.index');
    }


    function store(Request $request)
    {
        dd($request->all());
    }

    function userDashboard()
    {
        // $user = Auth::user();   // Retrieve the current Authenticated (logged in) user properties.

        // if (!Auth::check()){
        //     abort(401);
        // }

        // dd($user);

        return view('user-dashboard');

    }

    function adminDashboard()
    {
        dd('admin dasboard');
    }
}
