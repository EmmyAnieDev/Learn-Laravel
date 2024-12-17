<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\Car;
use App\Models\User;
use App\Models\Fragrance;

class RelationController extends Controller
{

    function users(){

        $users = User::all();
    
        $addresses = Address::all();
    
        return view('users', compact('users', 'addresses'));
    }

    function fragrance(){

        // Fragrance::insert([
        //     [
        //         'user_id' => '8',
        //         'name' => 'Clive Crescent'
        //     ],
        //     [
        //         'user_id' => '8',
        //         'name' => 'Black Ochid'
        //     ],
        //     [
        //         'user_id' => '12',
        //         'name' => 'Black Afgano'
        //     ],
        //     [
        //         'user_id' => '11',
        //         'name' => 'Laddy Million'
        //     ],
        // ]);


        $fragrances = Fragrance::all();

    
        return view('fragrance', compact('fragrances'));

    }

    function car(){

        $cars = Car::all();
    
        return view('car', compact('cars'));
    }

    function manyRelate(){     


        $car = Car::first();
        $user = User::first();

        $car = Car::findOrFail(10);

        $car->users()->attach($user);  // Attach the user to the car in the pivot table
        $car->users()->attach([10, 16, 12, 18]); // Attach user IDs 10 and 16 to the car in the pivot table
        $car->users()->detach([10, 16]);  // Detach user IDs 10 and 16 from the car in the pivot table
        $car->users()->sync([10, 16]);   // Detach existig user IDs and Attach user IDs 12 and 18 from the car in the pivot table


    }
}
