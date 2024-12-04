<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    
    function index() {

        // Query Builder works directly with Table, so we have to mention the table we want to query.

        DB::table('users')->where('id', 6)->delete();
        DB::table('users')->where('id', '>', 3)->delete();  // delete if id is greater than 3

        return view('welcome');
    }

    function showAboutPage() { 
        return view('about');
    }
}