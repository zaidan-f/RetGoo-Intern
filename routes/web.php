<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AfterController;


 
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/', [LandingController::class, 'index'])->name('landing')->middleware('auth');
Route::get('/landing', [LandingController::class, 'index']);
Route::get('/form', [FormController::class, 'index']);
Route::post('/form', [FormController::class, 'index']);

Route::get('/after', [AfterController::class, 'index']);