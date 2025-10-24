<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController; 

Route::get('/', [PortfolioController::class, 'home'])->name('home');

Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects.index');

Route::get('/about', [PortfolioController::class, 'about'])->name('about');