<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BudayaController; // Wajib ada ini
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Grup Route yang wajib LOGIN
Route::middleware(['auth', 'verified'])->group(function () {
    
    // Halaman Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route CRUD Budaya (Ini yang bikin link /budaya aktif)
    Route::resource('budaya', BudayaController::class);

    // Route Profile (Bawaan Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';