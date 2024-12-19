<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckRoleMiddleware;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

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
        dd('user dasboard');
    }

    function adminDashboard()
    {
        dd('admin dasboard');
    }
}
