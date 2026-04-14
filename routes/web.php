<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/product', [ProductController::class, 'index'])->name('product');

Route::get('/product/{id}', [ProductController::class, 'show']);