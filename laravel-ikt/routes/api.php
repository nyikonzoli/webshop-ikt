<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Category routes
Route::get('categories', [CategoryController::class, 'index'])->name('category.index');
Route::post('categories', [CategoryController::class, 'store'])->name('category.store');
Route::get('categories/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::put('categories/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('categories/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

//Product routes
Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::get('products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::post('products', [ProductController::class, 'store'])->name('products.store');
Route::put('products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
