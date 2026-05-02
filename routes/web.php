<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoriesController;


Route::get('/', function () {
    return view('Auth.Login');
});
Route::get('/register', function () {
    return view('Auth.Register');
});


Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/register', [AuthController::class, 'register']);


Route::middleware(EnsureTokenIsValid::class)->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');




    Route::get('/products', [ProductController::class, 'Product']);
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');




    Route::get('/categories', [CategoriesController::class, 'Categories'])->name('categories');
    Route::post('/categories', [CategoriesController::class, 'store'])->name('categories.store');
});;
