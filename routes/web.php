<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ImageController::class, 'index'])->name('images.index');
Route::get('/images', [ImageController::class, 'show'])->name('images.show');
Route::post('/images', [ImageController::class, 'store'])->name('image.store');
