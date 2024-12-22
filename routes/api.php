<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;  // Aquí se corrige el espacio de nombres

Route::post('/login',[UserController::class,'store'])->name('nuser');

Route::post('/register',[UserController::class,'store'])->name('nuser');



    Route::get('/users', [UserController::class, 'index'])->name('users');

    Route::post('/user',[UserController::class,'create'])->name('user');

    Route::post('/nuser',[UserController::class,'store'])->name('nuser');

    Route::get('/home',[HomeController::class,'home'])->name('home');
