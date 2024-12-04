<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    
    function index() {

        // Query Builder works directly with Table, so we have to mention the table we want to query.

        $users = DB::table('users')->get();    // get all users
        $users = DB::table('users')->where('id', 6)->first();   // get user by id. with first method signifying first record found
        $users = DB::table('users')->where('id', '>', 2)->get();   // get all user where id is greater than 2

        return $users; // By default, Laravel automatically converts arrays and collections to JSON when returning them as a response.

        return view('welcome');
    }

    function showAboutPage() { 
        return view('about');
    }
}