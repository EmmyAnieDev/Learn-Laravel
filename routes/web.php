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

// Route grouping with named route.
Route::group(['prefix' => 'blog', 'as' => 'blog.'], function() {

    Route::get('/create', function () {
        return "Blog Create Page";
    })->name('create');

    Route::get('/edit', function () {
        return "Blog Edit Page";
    })->name('edit');

    Route::get('/show', function () {
        return "Blog Show Page";
    })->name('show');

});

