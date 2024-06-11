<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [FrontendController::class, 'showLoginForm'])->name('login');

Route::get('/dashboard', [FrontendController::class, 'showDashboard'])->name('dashboard');

Route::post('/logout', [FrontendController::class, 'logout'])->name('logout');

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/dosen', function () {
    return view('dosen');
});

Route::get('/tambah', function () {
    return view('tambah');
});