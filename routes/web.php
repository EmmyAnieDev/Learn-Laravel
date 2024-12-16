<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RelationController;
use App\Models\Address;
use App\Models\Fragrance;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\User;




Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'contactSubmit'])->name('contact.submit');

Route::get('/file-upload', [FileUploadController::class, 'index'])->name('file.upload');
Route::post('/file-upload', [FileUploadController::class, 'store'])->name('file.store');
Route::get('/download/{fileName}', [FileUploadController::class, 'download'])->name('file.download');
Route::delete('/file-upload/{id}', [FileUploadController::class, 'destroy'])->name('file.destroy');

Route::get('/users', [RelationController::class, 'users']);

Route::get('/fragrance', [RelationController::class, 'fragrance']);
