<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Import semua komponen Livewire yang digunakan
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\ForgotPassword;
use App\Livewire\Auth\NewPassword;
use App\Livewire\Auth\VerificationPassword;

use App\Livewire\Dashboard\Pengelola\Index as PengelolaDashboard;
use App\Livewire\Dashboard\Penyewa\Index as PenyewaDashboard;

//
// 🟢 ROUTE UNTUK TAMU (GUEST)
//
Route::middleware(['guest'])->group(function () {
    // Halaman Login & Register
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');

    // Forgot password & reset
    Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');
    Route::post('/forgot-password/post', ForgotPassword::class)->name('forgot-password.post');

    Route::get('/verification-password', VerificationPassword::class)->name('verification-password');
    Route::post('/verification-password/post', VerificationPassword::class)->name('verification-password.post');

    Route::get('/new-password', NewPassword::class)->name('new-password');
    Route::post('/new-password/post', NewPassword::class)->name('new-password.post');
});

//
// 🔒 ROUTE UNTUK USER YANG SUDAH LOGIN (AUTH)
//
Route::middleware(['auth'])->group(function () {
    // Dashboard sesuai role
    Route::get('/dashboard/pengelola', PengelolaDashboard::class)->name('dashboard.pengelola');
    Route::get('/dashboard/penyewa', PenyewaDashboard::class)->name('dashboard.penyewa');

    // Logout pakai POST (standar Laravel)
    Route::post('/logout', function () {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect('/login');
    })->name('logout');
});

//
// 🌐 HALAMAN UTAMA ATAU REDIRECT DEFAULT
//
Route::get('/', function () {
    return redirect()->route('login');
});
