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
    Route::get('/profile-settings', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile-settings', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile-settings', [ProfileController::class, 'destroy'])->name('profile.destroy');
    


    // Profile
    Route::get('/profile', function () {
        return view('profile');
    })->middleware('verified')->name('profile');
});


// ---------------------
// Auth routes (Breeze/Fortify)
// ---------------------
require __DIR__.'/auth.php';
