<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DramaController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dramas', [DramaController::class, 'index'])->name('dramas.index');

Route::get('/dramas/{slug}', [DramaController::class, 'show'])->name('dramas.show');