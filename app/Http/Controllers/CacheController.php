<?php

namespace App\Http\Controllers;

use App\Models\User;
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

        # Fetching Data without Caching it.
        $users = User::all();

        // Caches all users indefinitely, retrieving from the database only if the cache is empty.
        $users = Cache::rememberForever('users', function () {
            return User::all();
        });

        return view('cache', compact('users'));
    }
}
