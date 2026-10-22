<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes -  Portfolio
|--------------------------------------------------------------------------
*/

// Portfolio Homepage
Route::get('/', [PortfolioController::class, 'index'])->name('home');

// Direct CV Download Route
Route::get('/download-cv', [PortfolioController::class, 'downloadCv'])->name('cv.download');

// Contact Form Handler
Route::post('/contact', [PortfolioController::class, 'contactSubmit'])->name('contact.submit');
