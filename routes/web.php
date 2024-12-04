<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;




Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [HomeController::class, 'showAboutPage']);

Route::get('/single-action', SingleActionController::class);

Route::resource('blog', BlogController::class);

Route::get('/products', [ProductController::class, 'index']);

Route::get('/users', [UserController::class, 'index']);

// Fallback Routes. It should be placed last in your routes/web.php or routes/api.php file 
Route::fallback(function () {
    return "Oops we couldn't find the page!";
});
