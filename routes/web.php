<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;




Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [HomeController::class, 'showAboutPage']);

// Fallback Routes. It should be placed last in your routes/web.php or routes/api.php file 
Route::fallback(function () {
    return "Oops we couldn't find the page!";
});
