<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    function index() {

        // Product::find(54)->delete(); 

        // Retrieve all products, including those that have been soft deleted (trashed)
        // $product = Product::withTrashed()->get();

        // $product = Product::withTrashed()->find(43);    // Retrieve just the trashed data.

        // $product = Product::onlyTrashed()->get();   // Retreive all trashed data

        // Product::withTrashed()->find(54)->restore();   // Restore a deleted data back to the table.

        Product::withTrashed()->find(37)->forceDelete();  // Permanently delete the data.

        // dd($product);
        
    }
    
}
