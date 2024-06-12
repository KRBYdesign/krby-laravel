<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ErrorController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::fallback([ErrorController::class, 'error404'])->name('404');
