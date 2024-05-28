<?php

use App\Http\Controllers\AuthController;

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('dashboard', function () {
    if (!Session::get('authenticated')) {
        return redirect('login');
    }
    return view('dashboard');
})->name('dashboard');
