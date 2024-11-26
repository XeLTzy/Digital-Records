<?php

use App\Mail\AcceptedMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TwoFactorController;

Route::get('/', function () {
    return view('client');
});

// Ensure middleware applies to the appropriate routes
// Add this to for email authentication , 'twofactor'
Route::middleware(['auth'])->group(function () {
    Route::get('/client_dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    // Combine routes for TwoFactorController to avoid duplication
    Route::get('/two-factor', [TwoFactorController::class, 'index'])->name('two-factor.index');
    Route::post('/two-factor/verify', [TwoFactorController::class, 'verify'])->name('two-factor.verify');
});

require __DIR__ . '/auth.php';
