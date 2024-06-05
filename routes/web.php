<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [FrontendController::class, 'showLoginForm'])->name('login');
Route::get('/dashboard', [FrontendController::class, 'showDashboard'])->name('dashboard');
Route::post('/logout', [FrontendController::class, 'logout'])->name('logout');
