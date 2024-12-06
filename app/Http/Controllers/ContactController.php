<?php

namespace App\Http\Controllers;

use App\Http\Requests\contactStoreRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index()
    {
        return view('contact');
    }

    function contactSubmit(contactStoreRequest $request)  // Using Dependency Injection to access the data in the request
    {       
        dd($request->all());
    }
}
