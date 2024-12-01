<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return 'This is the About page';
});

// Passing data to the view
Route::get('/home', function () {

    $names = ['person_1' => 'John', 'person_2' => 'Dan', 'person_3' => 'Tom'];

    return view('home', $names);
});

// Adding a paramter (id) to the URL 
Route::get('/user/{id}', function ($id) {

    return "This is the account for user id - $id";

});
