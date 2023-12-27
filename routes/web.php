<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

use App\Http\Controllers\CategoryController;

Route::resource('categories', CategoryController::class);Route::get('/categories/create', [CategoryController::class, 'create']);

Route::get('/categories', [CategoryController::class, 'index']);

Route::put('/categories/{id}', [CategoryController::class, 'update']);

Route::delete('/categories/{id}', [CategoryController::class, 'delete']);
