<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'index'])->name('home');

// Rute untuk bahasa Inggris dengan /en/
Route::get('/en/{page?}', [PublicController::class, 'show'])->where('page', '.*')->name('show.en');

// Rute untuk halaman tanpa prefix (Indonesia)
Route::get('/{page?}', [PublicController::class, 'show'])->where('page', '.*')->name('show.id');