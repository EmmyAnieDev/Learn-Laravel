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


        #------------   GETTING SESSION DATA   ---------------#

        // Retrieves the value of the 'name' key from the session using the request instance.
        $value = $request->session()->get('name');

        // Retrieves the value of the 'Experience' key from the session using the global `session()` helper.
        $value = session()->get('Experience');

        // Another way to retrieve the value of the 'languages' key from the session using the global `session()` helper.
        $value = session('languages');

        // Retrieves the value of the 'role' key from the session using the `Session` facade.
        $value = Session::get('role');

        dd($value);

        //return view ('session');
    }
}
