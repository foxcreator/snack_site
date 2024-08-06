<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/catalog/{categoryName}', [\App\Http\Controllers\HomeController::class, 'catalog'])->name('catalog');
Route::get('/admin', function () {
    return redirect()->route('products.index');
});

Route::resource('/admin/products', App\Http\Controllers\AdminController::class);
Auth::routes();

