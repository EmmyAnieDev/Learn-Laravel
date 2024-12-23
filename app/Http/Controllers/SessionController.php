<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function index(Request $request)
    {
        # Storing via a request instance...
        $request->session()->put('name', 'Emmy');
        $request->session()->put('languages', ['PHP', 'Pyhton', 'Dart']);

        # Stroing via the global "session" helper...
        session(['Experience' => '3 Years']);

        # Stroing via the Facade...
        Session::put('role', 'Junior Engineer');

        return view ('session');
    }
}
