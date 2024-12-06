<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index()
    {
        return view('contact');
    }

    function contactSubmit(Request $request)  // Using Dependency Injection to access the data in the request
    {
        $name = $request->name;
        $email = $request->email;

        echo "$name -- $email";
    }
}
