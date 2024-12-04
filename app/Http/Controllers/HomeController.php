<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    
    function index() {

        // Query Builder works directly with Table, so we have to mention the table we want to query.

        $blogsTitle = DB::table('blogs')->select('title')->get();   // get as an object whe using the dd()
        $blogsTitle = DB::table('blogs')->pluck('title');
        $blogsTitle = DB::table('blogs')->pluck('title' , 'id');    // pluck with the id
        dd ($blogsTitle);

        return view('welcome');
    }

    function showAboutPage() { 
        return view('about');
    }
}