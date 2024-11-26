<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TwoFactorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client');
});

// Route::get('/client', function () {
//     return view('client');
// });


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth', 'twofactor')->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Route::middleware('auth')->group(function () {
//     Route::get('/two-factor', [TwoFactorController::class, 'index'])->name('two-factor.index');
//     Route::get('/two-factor', [TwoFactorController::class, 'verify'])->name('two-factor.verify');
// });

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

Route::get('/home', function () {
    return view('client');
})->name('home');

Route::get('/consultation', function () {
    return view('layouts.consultation');
})->name('consultation');

Route::get('/restorative', function () {
    return view('layouts.restorative');
})->name('restorative');

Route::get('/endodontics', function () {
    return view('layouts.endodontics');
})->name('endodontics');

Route::get('/cosmetic', function () {
    return view('layouts.cosmetic');
})->name('cosmetic');

Route::get('/surgery', function () {
    return view('layouts.surgery');
})->name('surgery');

Route::get('/orthodontic', function () {
    return view('layouts.orthodontic');
})->name('orthodontic');


require __DIR__ . '/auth.php';
