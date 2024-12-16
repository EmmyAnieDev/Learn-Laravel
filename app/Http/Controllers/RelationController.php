<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
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
}
