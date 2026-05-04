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

Route::get('/project/{project:slug}', [PageController::class, 'project'])
    ->name('project.show');
