<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\FullLocationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HttpResponseController;
use App\Http\Controllers\PolymorphicController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RelationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/home', [HomeController::class, 'index'])->name('home');

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

//  AUTH Middleware
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('post', PostController::class)->middleware('auth');

Route::get('/response', [HttpResponseController::class, 'index'])->name('response.index');
Route::get('/response/create', [HttpResponseController::class, 'create'])->name('response.create');
Route::get('/response/show', [HttpResponseController::class, 'show'])->name('response.show');
Route::get('/response/others', [HttpResponseController::class, 'others'])->name('response.others');

require __DIR__.'/auth.php';
