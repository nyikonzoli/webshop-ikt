<?php

use App\Http\Controllers\ApiControllers\CartController;
use App\Http\Controllers\ApiControllers\CategoryController;
use App\Http\Controllers\ApiControllers\ProductController;
use App\Http\Controllers\ApiControllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('categories/{id}', [CategoryController::class, 'show'])->name('categories.show');
Route::put('categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

//Product routes
Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::get('products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::post('products', [ProductController::class, 'store'])->name('products.store');
Route::put('products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

//Cart routes
Route::get('carts', [CartController::class, 'index'])->name('carts.index');
Route::get('carts/{id}', [CartController::class, 'show'])->name('carts.show');
Route::post('carts', [CartController::class, 'store'])->name('carts.store');
Route::put('carts/{id}', [CartController::class, 'update'])->name('carts.update');
Route::delete('carts/{id}', [CartController::class, 'destroy'])->name('carts.destroy');

//User routes
Route::get('users', [UserController::class, "index"])->name("users.index");
Route::post('users', [UserController::class, "store"])->name("users.store");
Route::get('users/{id}', [UserController::class, "show"])->name("users.show");
Route::put('users/{id}', [UserController::class, "update"])->name("users.update");
Route::delete('users/{id}', [UserController::class, "destroy"])->name("users.destory");