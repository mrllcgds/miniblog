<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// ---------------------
// Public welcome page
// ---------------------
Route::get('/', function () {
    return view('welcome');
})->name('welcome');


// ---------------------
// Auth-protected pages
// ---------------------
Route::middleware(['auth'])->group(function () {
    // Blog posts (except show)
    Route::resource('posts', PostController::class)->except(['show']);


    // Optional profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    


    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware('verified')->name('dashboard');
});


// ---------------------
// Auth routes (Breeze/Fortify)
// ---------------------
require __DIR__.'/auth.php';
