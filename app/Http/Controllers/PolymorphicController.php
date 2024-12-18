<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;

class PolymorphicController extends Controller
{
    function imageRelate()
    {
        $user = User::findOrFail(11);

        // $user->image()->create([
        //     'path' => '/uploads/belamngo.jpg'
        // ]);

        $product = Product::findOrFail(38);

        // $product->image()->create([
        //     'path' => '/uploads/quia_in_vero.jpg'
        // ]);

        return $user->image;
    }
}
