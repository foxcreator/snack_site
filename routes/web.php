<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/catalog', [\App\Http\Controllers\HomeController::class, 'catalog'])->name('catalog');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
Auth::routes();

