<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/login2', function () {
    return view('auth.login2');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/datapeserta', function () {
    return view('datapeserta');
})->middleware(['auth', 'verified'])->name('datapeserta');

Route::get('/tagihan', function () {
    return view('tagihan');
})->middleware(['auth', 'verified'])->name('tagihan');


Route::get('/listinvoice', [InvoiceController::class, 'index'])->name('listinvoice')->middleware('role:admin');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
