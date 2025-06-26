<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Authentication routes

// Renders the registration form view
Route::get('/register', function () {
    return view('auth.register');
})->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Renders the login form view for users
Route::get('/login', function () {
    return view('auth.login');
})->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout.post')->middleware('auth');


// Renders the login form view for admins
Route::get('/admin/login', function () {
    return view('auth..admin.admin-login');
})->name('admin.login.form');
Route::post('/admin/login', [AuthController::class, 'adminLogin'])->name('admin.login');


// Renders the login form view for managers
Route::get('/manager/login', function () {
    return view('auth.manager.login');
})->name('manager.login.form');
Route::post('/manager/login', [AuthController::class, 'managerLogin'])->name('manager.login');

// Dashboard routes
Route::get('/user/dashboard', function () {
    return view('user.dashboard');
})->name('user.dashboard')->middleware('auth');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard')->middleware('auth');

Route::get('/manager/dashboard', function () {
    return view('manager.dashboard');
})->name('manager.dashboard')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');
