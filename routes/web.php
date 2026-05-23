<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RegistrationController::class, 'index']);
Route::get('/register', [RegistrationController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegistrationController::class, 'storeData'])->name('register.store');
Route::get('/registrations', [RegistrationController::class, 'index'])->name('registrations.index');
Route::get('/registration/search', [RegistrationController::class, 'index'])->name('registrations.search');

