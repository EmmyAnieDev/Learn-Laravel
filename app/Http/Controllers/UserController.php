<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
   
    public function index()
    {
       #  This works because the specified attributes are listed in the model's fillable property.

    //    User::create(
    //         [
    //             'name' => 'Bella Amos',
    //             'email' => 'bella@gmail.com',
    //             'password' => '123456',
    //             'email_verified_at' => 'now verified' // This won't work because 'email_verified_at' is not included in the model's fillable property.
    //         ]
    //     );

        #   Whe we use the insert method, the password does not harsh.
        User::insert(
            [
                [
                    'name' => 'John Smith',
                    'email' => 'john.smith@gmail.com',
                    'password' => 'password123',
                ],
                [
                    'name' => 'Emma Watson',
                    'email' => 'emma.watson@gmail.com',
                    'password' => 'securepass456',
                ],
                [
                    'name' => 'Liam Brown',
                    'email' => 'liam.brown@gmail.com',
                    'password' => 'mypassword789',
                ],
                [
                    'name' => 'Sophia Johnson',
                    'email' => 'sophia.johnson@gmail.com',
                    'password' => 'supersecure321',
                ],
                [
                    'name' => 'Olivia Davis',
                    'email' => 'olivia.davis@gmail.com',
                    'password' => 'uniquepass987',
                ],
            ]
            
        );
    }
}
