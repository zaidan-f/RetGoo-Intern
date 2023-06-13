<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AfterController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\testcontroller;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JawabanController;


// register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// logout
Route::get('/logout', [LoginController::class, 'logout']);

// landing page
Route::get('/', [LandingController::class, 'index'])->name('landing')->middleware('auth');
Route::get('/landing', [LandingController::class, 'index']);

// form
Route::get('/form', [FormController::class, 'index']);
Route::post('/form', [FormController::class, 'index']);

// after submit
Route::get('/after', [AfterController::class, 'index']);

// account page
Route::get('/account', [AccountController::class, 'index']);

// test 
Route::get('/test', [testcontroller::class, 'index']);

// image 
Route::get('image-upload', [ ImageController::class, 'index' ]);
Route::post('image-upload', [ ImageController::class, 'store' ])->name('image.store');

// profile pic
Route::get('/profile', [ProfileController::class, 'index'])->name('user.profile');
Route::post('/profile', [ProfileController::class, 'store'])->name('user.profile.store');
Route::delete('/profile/avatar', [ProfileController::class, 'destroy'])->name('user.profile.destroy');
Route::delete('/profile/banner', [ProfileController::class, 'destroybanner'])->name('user.profile.destroy.banner');


// jawaban
Route::get('/formlihat', [ JawabanController::class, 'index' ]);