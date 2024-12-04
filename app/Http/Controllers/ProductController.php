<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    function index() {
        
        $products = DB::table('products')->count();       // Get the total number of products in the table
        $products = DB::table('products')->max('price');  // Get the maximum price from the price column
        $products = DB::table('products')->min('price');  // Get the minimum price from the price column
        $products = DB::table('products')->sum('price');  // Get the sum of all values in the price column

        dd ($products);
    }
    
}
