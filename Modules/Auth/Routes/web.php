<?php

use Illuminate\Support\Facades\Route;
use Modules\Auth\Http\Controllers\AuthenticatedSessionController;
use Modules\Auth\Http\Controllers\RegisterController;


Route::middleware('guest')->group(function () {
    //register
    Route::get('register', [RegisterController::class, 'create'])->name('auth.showRegisterForm');
    Route::post('register', [RegisterController::class, 'store'])->name('auth.register');

    //login
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('auth.showLoginForm');
    Route::post('login', [AuthenticatedSessionController::class, 'store'])
        ->name('auth.login');

});

Route::middleware('auth')->group(function () {

    //logout
    Route::any('logout', [AuthenticatedSessionController::class, 'destroy'])->name('auth.logout');

});
