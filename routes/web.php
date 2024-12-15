<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;




Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'contactSubmit'])->name('contact.submit');

Route::get('/file-upload', [FileUploadController::class, 'index'])->name('file.upload');
Route::post('/file-upload', [FileUploadController::class, 'store'])->name('file.store');
Route::get('/download/{fileName}', [FileUploadController::class, 'download'])->name('file.download');
Route::delete('/file-upload/{id}', [FileUploadController::class, 'destroy'])->name('file.destroy');


// Function to get only users who have placed orders
Route::get('/join', function(){

    $usersWithOrders = DB::table('users') // Start a query on the 'users' table.
        ->join('orders', 'users.id', '=', 'orders.user_id') // Perform an INNER JOIN between 'users' and 'orders' using 'users.id' and 'orders.user_id' as the join condition.
        ->select('users.*', 'orders.*') 
       // ->select('users.name', 'users.id', 'orders.product_name') // Select the 'name' column from 'users' and 'product_name' column from 'orders'.
        ->get();

    return $usersWithOrders;
});
