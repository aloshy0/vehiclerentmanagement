<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

// ----------------------
// Car routes (Segment-based)
// ----------------------

// List cars for a segment
Route::get('/cars/{segment}', [CarController::class, 'index'])
    ->name('cars.index');

// Show create form for a segment
Route::get('/cars/{segment}/create', [CarController::class, 'create'])
    ->name('cars.create');

Route::get('/cars/{segment}/{id}', [CarController::class, 'show'])->name('cars.show');


// Store a new car for a segment
Route::post('/cars/{segment}', [CarController::class, 'store'])
    ->name('cars.store');

Route::delete('/cars/{car}', [CarController::class, 'destroy'])
    ->name('cars.destroy')
    ->middleware('auth');


// ----------------------
// Dashboard & welcome
// ----------------------
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// ----------------------
// Auth routes
// ----------------------
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
