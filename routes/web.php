<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnggotaController;

// ======================
// Public Pages
// ======================

// Halaman home ambil data dari controller
Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman static lain
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// ======================
// Admin Routes
// ======================

Route::prefix('admin')->group(function () {

    // Login
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');

    // Routes yang butuh autentikasi admin
    Route::middleware('auth')->group(function () {

        // Dashboard
        Route::get('/dashboard', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard');

        // CRUD Anggota
        Route::resource('anggota', AnggotaController::class);

        // Logout
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
    });
});

// ======================
// Additional includes
// ======================

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
