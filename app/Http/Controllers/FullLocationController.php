<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class FullLocationController extends Controller
{
    function locationRelate(){

        // $country = new Country(["name" => "United States"]);
        // $country->save();

        // $state = new State(["name" => "California"]);
        // $country->states()->save($state);

        // $state->cities()->createMany([
        //     ["name" => "Los Angeles"],
        //     ["name" => "San Diego"],
        //     ["name" => "San Fransisco"]
        // ]);

        $country = Country::first();


        return view('location', compact('country'));
    }
}
