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
        $request->validate(
            [
                // 'name' => 'required|max:20|min:2',
                // 'email' => 'required|email',

                'name' => ['required', 'max:20', 'min:2'],  // using the array pattern
                'email' => ['required', 'email'],
            ], 
            [
                'name.required' => 'The name field is mandatory.',
                'name.max' => 'The name must not exceed 20 characters.',
                'name.min' => 'The name must be at least 2 characters long.',
                'email.required' => 'The email field is required.',
                'email.email' => 'Please provide a valid email address.',
            ]
        );        

        dd($request->all());
    }
}
