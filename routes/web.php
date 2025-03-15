<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('is_guest')->group(function(){
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'postRegister'])->name('postRegister');
    Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin');
});

Route::middleware('authorized')->group(function(){
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware('admin')->group(function(){
        Route::get('/admin-dashboard', [AuthController::class, 'adminDashboard'])->name('adminDashboard');
    });
});
