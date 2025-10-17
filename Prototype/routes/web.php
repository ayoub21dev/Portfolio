<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [PortfolioController::class, 'home'])->name('home');

Route::get('/projets', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
