<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::post('/login', [LoginController::class, 'get'])->name('login');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::middleware('auth:sanctum')->group(function() {    
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::post('/user', [UserController::class, 'create'])->name('user');
    Route::post('/nuser', [UserController::class, 'store'])->name('nuser');
    Route::get('/home', [HomeController::class, 'home'])->name('home');
});