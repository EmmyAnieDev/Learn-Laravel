<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    function index(){
        return view('email.index');
    }

    function send(Request $request){
        Mail::raw($request->message, function ($message) use($request) {
            $message->to($request->email)->subject('Laravel Testing Email');
        });
       dd('Message has been sent to ' . $request->email);
    }
}
