<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

// Indonesian Routes (default)
Route::get('/', [PublicController::class, 'index'])->name('home.id');
Route::get('/language/{lang}/{page?}', [PublicController::class, 'switchLanguage'])->name('language.switch');

// English Routes
Route::prefix('en')->group(function () {
    Route::get('/', [PublicController::class, 'index'])->name('home.en');
    Route::get('/{page?}', [PublicController::class, 'show'])->where('page', '.*')->name('show.en');
});

// Indonesian Routes (specific pages)
Route::get('/{page?}', [PublicController::class, 'show'])->where('page', '.*')->name('show.id');