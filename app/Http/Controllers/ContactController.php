<?php

namespace App\Http\Controllers;

use App\Http\Requests\contactStoreRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index()
    {
        return view('contact');
    }

    function contactSubmit(contactStoreRequest $request)  // Using Dependency Injection to access the data in the request
    {       
        $contact = new Contact();

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();

        return ['message' => 'form contact has been saved.'];
    }
}
