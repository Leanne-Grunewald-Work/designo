<?php

use App\Http\Controllers\DesignProjectController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Admin area - project management
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('projects', DesignProjectController::class);
});

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/web-design', [PageController::class, 'web'])->name('web-design');
Route::get('/app-design', [PageController::class, 'app'])->name('app-design');
Route::get('/graphic-design', [PageController::class, 'graphic'])->name('graphic-design');

Route::get('/our-company', [PageController::class, 'company'])->name('company');
Route::get('/locations', [PageController::class, 'locations'])->name('locations');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
