<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Authentication routes
Route::middleware('guest')->group(function () {
    // User registration
    Route::get('/register', function () {
        return view('auth.register');
    })->name('register.form');

    Route::post('/register', [AuthController::class, 'register'])->name('register');

    // User login
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login.form');

    Route::post('/login', [AuthController::class, 'login'])->name('login');

    // Admin login
    Route::get('/admin/login', function () {
        return view('auth.admin.admin-login');
    })->name('admin.login.form');

    Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login');

    // Manager login
    Route::get('/manager/login', function () {
        return view('auth.manager.login');
    })->name('manager.login.form');

    Route::post('/manager/login', [AuthController::class, 'login'])->name('manager.login');

    // Password reset routes
    Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])
        ->name('password.request');

    Route::post('/forgot-password', [AuthController::class, 'sendResetLinkEmail'])
        ->name('password.email');

    Route::get('/reset-password/{token}', [AuthController::class, 'showResetPasswordForm'])
        ->name('password.reset');

    Route::post('/reset-password', [AuthController::class, 'resetPassword'])
        ->name('password.update');
});

// Authenticated routes
Route::middleware('auth')->group(function () {
    // Logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout.post');

    // Dashboards
    Route::get('/user/dashboard', function () {
        return view('user.dashboard');
    })->name('user.dashboard')->middleware('can:user-access');

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard')->middleware('can:admin-access');

    Route::get('/manager/dashboard', function () {
        return view('manager.dashboard');
    })->name('manager.dashboard')->middleware('can:manager-access');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
