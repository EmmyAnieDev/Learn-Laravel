<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HttpResponseController extends Controller
{
    function index(){

        // Redirecting to a specific route
        return redirect()->route('response.create');

        // Redirecting to a specific route and passing parameters to the route
        return redirect()->route('response.create', ['user' => 'John Doe']);

        // Redirecting to a specific route with parameters using the to_route helper function
        return to_route('response.create', ['user' => 'John Doe']);

        // Redirecting to a method within the current controller
        return redirect()->action($this->show());

        // Redirecting to a method in another controller
        return redirect()->action([FullLocationController::class, 'locationRelate']);

        // Redirecting to a URL outside of the application
        return redirect()->away('https://google.com');

        // Redirecting back to the previous route
        return redirect()->back();

        dd('Welcome back to index page.');
    }

    function create(Request $request){
        dd($request->all());
        return view('response.create');
    }

    function show(){
        dd('I was called from Index method.');
    }

    function others (){
       
        // Returning a JSON response with country, state, and city information
        return response()->json([
            'Country' => 'United States',
            'State' => 'California',
            'City' => 'Los Angeles'
        ]);

        // Returning a file download response for the specified file
        return response()->download(public_path('uploads/task_ui.png'));

        // Returning a file response to display the specified file in the browser
        return response()->file(public_path('uploads/task_ui.png'));

    }
}
