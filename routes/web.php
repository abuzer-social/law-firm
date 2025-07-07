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
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\TermsAndConditionController;
use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login.page');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/signup', [AuthController::class, 'showSignup'])->name('signup.page');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup.submit');


Route::get('/home', [HomeController::class, 'index'])->name('home.index');

Route::get('/business', [BusinessController::class, 'index'])->name('business.index');
Route::post('/business', [BusinessController::class, 'submitForm'])->name('business.submit');

Route::get('/lawyer', [LawyerController::class, 'index'])->name('lawyer.index');
Route::post('/lawyer', [LawyerController::class, 'submit'])->name('lawyer.submit');

Route::get('/document', [DocumentController::class, 'index'])->name('document.index');
Route::post('/document', [DocumentController::class, 'submit'])->name('document.submit');


Route::get('/contact', [ContactController::class, 'showContact'])->name('contact.page');
Route::post('/contact', [ContactController::class, 'submitContact'])->name('contact.submit');

Route::get('/about', [AboutController::class, 'showAbout'])->name('about.page');
Route::get('/accounting', [AccountingController::class, 'showAccounting'])->name('accounting.page');
Route::get('/translation', [TranslationController::class, 'showTranslation'])->name('translation.page');
Route::post('/translation', [TranslationController::class, 'submitTranslation'])->name('translation.submit');

Route::get('/privacy-policy', [PrivacyPolicyController::class, 'showPrivacyPolicy'])->name('privacy.policy');
Route::get('/terms-and-condition', [TermsAndConditionController::class, 'showTermsAndCondition'])->name('terms.condition');
Route::get('/faq', [FaqController::class, 'showFaq'])->name('faq.page');

Route::get('/lang/{locale}', [HomeController::class, 'setLocale'])->name('set.locale');
