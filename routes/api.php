<?php

use Illuminate\Http\Request;

Route::resource('customer', [CustomerController::class]);
Route::resource('category', [CategoryController::class]);
Route::resource('book', [BookController::class]);
Route::resource('user', [UserController::class]);


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
