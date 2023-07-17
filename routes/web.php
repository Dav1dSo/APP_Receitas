<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReceitaOptions;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/create', [ReceitaOptions::class, 'index'])->name('CreateReceita');
    Route::post('/createReceita', [ReceitaOptions::class, 'create'])->name('CreateReceita');
});

require __DIR__.'/auth.php';
