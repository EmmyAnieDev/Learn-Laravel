<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    function index() {

        $product = Product::where('price', 87.81)->first();
        $product = Product::where('name', 'LIKE', '%repudiandae%')->get();   // PERFOM A SEARCH

        // If searching by name fails, the system will search by description
        $product = Product::where('name', 'LIKE', '%repudiandae%')->orWhere('description', 'LIKE', '%sit%')->get();

        // Searching with name and description. Both conditions must be true
        $product = Product::where('name', 'LIKE', '%repudiandae%')->where('description', 'LIKE', '%sit%')->get();

        // Retrieve all products with IDs 32, 43, 51, 55, and 60
        $product = Product::whereIn('id', [32, 43, 51, 55, 60])->get();

        // Retrieve all products between the price range of 400 and 500
        $product = Product::whereBetween('price', [400.0, 500.0])->get();


        dd($product);
        
    }
    
}
