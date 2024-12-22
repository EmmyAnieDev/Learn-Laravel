<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeComponentController extends Controller
{
    function index(){
        return view('blade-component');
    }
}
