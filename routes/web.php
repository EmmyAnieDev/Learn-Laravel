<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});




// Fallback Routes. It should be placed last in your routes/web.php or routes/api.php file 
Route::fallback(function () {
    return "Oops we couldn't find the page!";
});
