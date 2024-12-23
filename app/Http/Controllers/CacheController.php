<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CacheController extends Controller
{
    public function index()
    {
        # Stroing data in Cache as key value with expiration time
        Cache::put('post_1', 'This is post one', $seconds = 30);

        # Retrieving data from cache using it's key.
        $value = Cache::get('post_1');

        dd($value);
    }
}
