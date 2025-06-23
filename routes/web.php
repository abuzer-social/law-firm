<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login.page');
Route::get('/signup', [AuthController::class, 'showSignup'])->name('signup.page');
Route::post('/submit', [HomeController::class, 'submit'])->name('submit');

Route::get('/lang/{locale}', [HomeController::class, 'setLocale'])->name('set.locale');
