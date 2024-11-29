<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PatientController;
use App\Mail\AcceptedMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TwoFactorController;
use App\Http\Controllers\RecordController;

require __DIR__ . '/auth.php';


// Ensure middleware applies to the appropriate routes
// Add this to for email authentication , 'twofactor'
Route::middleware(['auth'])->group(function () {
    Route::get('/client_dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/', function () {
        return view('client');
    });    

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/{order}/pdf', [PdfController::class, 'download'])->name('booking.pdf.download');
// Route::get('/{order}/pdf', [PdfController::class, 'downloadservices'])->name('services.pdf.download');
    Route::get('/services/pdf', [PdfController::class, 'downloadServices'])->name('services.pdf.download');

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

    Route::get('/appointment', function () {
        return view('appointment');
    })->name('appointment');

    Route::get('/form', function () {
        return view('form');
    })->name('form');   

    Route::post('/record', [RecordController::class, 'create']);

    Route::post('/submit-dental-form', [PatientController::class, 'store']);

});

Route::middleware('auth')->group(function () {
    // Combine routes for TwoFactorController to avoid duplication
    Route::get('/two-factor', [TwoFactorController::class, 'index'])->name('two-factor.index');
    Route::post('/two-factor/verify', [TwoFactorController::class, 'verify'])->name('two-factor.verify');
});



