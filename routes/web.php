<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {

    return 'This is the About page';

})->name('about');

// Adding a paramter (id) to the URL 
Route::get('/user/{id}', function ($id) {

    return "This is the profile for user id - $id";

});
