<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;


// PUBLICAS
Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Route::get('/portafolio', function () {
    return view('portafolio');
})->name('portafolio');


Route::get('/catalago', function () {
    return view('catalago');
})->name('catalago');

Route::get('/contacto', [ContactoController::class,'index'])->name('contacto');
Route::post('/create',[ContactoController::class,"store"]);



// ADMIN
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
