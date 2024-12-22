<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    function index(){
        return view('email.index');
    }

    function send(Request $request){
        //  Mail::raw($request->message, function ($message) use($request) {
        //     $message->to($request->email)->subject('Laravel Testing Email');
        //  });

        # Sending an email using the SendMail Mailable class
        // Mail::to($request->email)->send(new SendMail($request->message));

        # Sends the email using the queue system, improving app performance by processing it asynchronously.
        Mail::to($request->email)->queue(new SendMail($request->message));


        dd('Message has been sent to ' . $request->email);
    }
}
