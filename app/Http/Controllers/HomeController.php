<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    
    function index() {

        // Query Builder works directly with Table, so we have to mention the table we want to query.
        DB::table('users')->insert(
            [
                'name' => 'John Doe',
                'email' => 'john@gmail.com',
                'password' => '123456'
            ]
        );   // This method automatically run when our welcome page is visited.

        // To insert Multiple Data at once, we wrap them inside another array which will makes it a multidimensional array
        DB::table('users')->insert(
            [
                [
                    'name' => 'Alice Smith',
                    'email' => 'alice.smith@gmail.com',
                    'password' => 'password123'
                ],
                [
                    'name' => 'Bob Johnson',
                    'email' => 'bob.johnson@gmail.com',
                    'password' => 'securepass456'
                ],
                [
                    'name' => 'Cathy Brown',
                    'email' => 'cathy.brown@gmail.com',
                    'password' => 'mypassword789'
                ],
                [
                    'name' => 'David Wilson',
                    'email' => 'david.wilson@gmail.com',
                    'password' => 'letmein101'
                ],
                [
                    'name' => 'Emily Davis',
                    'email' => 'emily.davis@gmail.com',
                    'password' => 'passw0rd111'
                ]
            ]
            
        ); 

        return view('welcome');
    }

    function showAboutPage() { 
        return view('about');
    }
}
