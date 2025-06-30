<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccountingController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\TranslationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login.page');
Route::get('/signup', [AuthController::class, 'showSignup'])->name('signup.page');
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/business', [BusinessController::class, 'index'])->name('business.index');
Route::get('/lawyer', [LawyerController::class, 'index'])->name('lawyer.index');
Route::get('/document', [DocumentController::class, 'index'])->name('document.index');
Route::get('/contact', [ContactController::class, 'showContact'])->name('contact.page');
Route::get('/about', [AboutController::class, 'showAbout'])->name('about.page');
Route::get('/accounting', [AccountingController::class, 'showAccounting'])->name('accounting.page');
Route::get('/translation', [TranslationController::class, 'showTranslation'])->name('translation.page');

Route::get('/lang/{locale}', [HomeController::class, 'setLocale'])->name('set.locale');
