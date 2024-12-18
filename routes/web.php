<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\FullLocationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PolymorphicController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RelationController;
use App\Http\Middleware\CheckRoleMiddleware;
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

# One-to-One, One-to-Many, Many-to-Many Relationships.
// hasOne() - belongsTo() -  hasMany() - belongsToMany()
Route::get('/users', [RelationController::class, 'users']);
Route::get('/fragrance', [RelationController::class, 'fragrance']);
Route::get('/cars', [RelationController::class, 'car']);
Route::get('/many_relate', [RelationController::class, 'manyRelate']);

// hasMany Through relationship
Route::get('/location_relate', [FullLocationController::class, 'locationRelate']);

// morphOne() - morphTo() relationship
Route::get('/image_relate', [PolymorphicController::class, 'imageRelate']);

// MiddleWare
Route::get('/post', [PostController::class, 'index'])->name('post.index');
Route::post('/post', [PostController::class, 'store'])->name('post.store')->middleware('checkRole');