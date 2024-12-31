<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/homepage');
});

Route::get('/homepage', function() {
    return view('static.homepage.index');
})->name('homepage');

// route to the products page
Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
Route::get('/products/id', [App\Http\Controllers\ProductController::class, 'show'])->name('products.show');

// route to the admins page (no use for now)
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');