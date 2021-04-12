<?php

use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CustomerController;


# Category routes 

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{id}', [CategoryController::class, 'show']);
Route::post('/category', [CategoryController::class, 'store']);
Route::put('/category/{id}', [CategoryController::class, 'update']);
Route::delete('/category/{id}', [CategoryController::class, 'destroy']);

# Book routes

Route::get('/book', [BookController::class, 'index']);
Route::get('/book/{id}', [BookController::class, 'show']);
Route::post('/book', [BookController::class, 'store']);
Route::put('/book/{id}', [BookController::class, 'update']);
Route::delete('/book/{id}', [BookController::class, 'destroy']);

# Customer routes

Route::get('/customer', [CustomerController::class, 'index']);
Route::get('/customer/{id}', [CustomerController::class, 'show']);
Route::post('/customer', [CustomerController::class, 'store']);
Route::put('/customer/{id}', [CustomerController::class, 'update']);
Route::delete('/customer/{id}', [CustomerController::class, 'destroy']);



// Route::resource('user', [UserController::class]);
