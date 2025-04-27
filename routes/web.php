<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])
    ->name('home');

Route::get('/about-us', [PageController::class, 'aboutUs'])
    ->name('about-us');

Route::get('/services', [PageController::class, 'services'])
    ->name('services');

Route::get('/faq', [PageController::class, 'faq'])
    ->name('faq');

Route::get('/policies', [PageController::class, 'policies'])
    ->name('policies');

Route::get('/portfolio', [PageController::class, 'portfolio'])
    ->name('portfolio');