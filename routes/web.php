<?php

use App\Livewire\Auth\ForgotPassword;
use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\NewPassword;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\VerificationPassword;
use App\Livewire\Dashboard\Pengelola\Index as PengelolaDashboard;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');
Route::get('/verification-password', VerificationPassword::class)->name('verification-password');
Route::get('/new-password', NewPassword::class)->name('new-password');
Route::get('/dashboard/pengelola', PengelolaDashboard::class)->name('dashboard.pengelola');
