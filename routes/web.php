<?php

use App\Http\Controllers\ContactController;
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

Route::get('/contact-us', [PageController::class, 'contact'])
    ->name('contact-us');

Route::get('/sent', [PageController::class, 'sent'])
    ->name('sent');

Route::get('/bot-information', [PageController::class, 'ragForm'])
    ->name('rag-form');

Route::get('/schedule ', [PageController::class, 'scheduleForm'])
    ->name('schedule-form');
   
Route::post('/contact', [ContactController::class, 'submit'])
    ->name('contact.submit');

// Todo: Fix this shit
Route::prefix('project')->group(function() {
    Route::get('/hestia', function() {
        return view('projects.hestia');
    })->name('hestia');

    Route::get('/cleanqueens', function() {
        return view('projects.cleanqueens');
    })->name('cleanqueens');
    
    Route::get('/corteza', function() {
        return view('projects.corteza');
    })->name('corteza');

    Route::get('/ares', function() {
        return view('projects.ares');
    })->name('ares');

    Route::get('/medrano-productions', function() {
        return view('projects.medrano-productions');
    })->name('medrano-productions');

    Route::get('/maria-bonita', function() {
        return view('projects.maria-bonita');
    })->name('maria-bonita');

    Route::get('/lyam-company', function() {
        return view('projects.lyam-company');
    })->name('lyam-company');

    Route::get('/cerealis', function() {
        return view('projects.cerealis');
    })->name('cerealis');
});
