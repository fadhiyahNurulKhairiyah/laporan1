<?php

use Illuminate\Support\Facades\Route;

// Route publik
Route::post('register', 'App\Http\Controllers\AuthController@register');
Route::post('login',    'App\Http\Controllers\AuthController@login');

// Route yang membutuhkan login (token Sanctum)
Route::middleware('auth:sanctum')->group(function () {

    // Categories — semua kecuali delete
    Route::apiResource('categories', 'App\Http\Controllers\CategoryController')
         ->except(['destroy']);
    // Delete categories — hanya admin
    Route::delete('categories/{category}',
        'App\Http\Controllers\CategoryController@destroy')
         ->middleware('role:admin');

    // Items — semua kecuali delete
    Route::apiResource('items', 'App\Http\Controllers\ItemController')
         ->except(['destroy']);
    // Delete items — hanya admin
    Route::delete('items/{item}',
        'App\Http\Controllers\ItemController@destroy')
         ->middleware('role:admin');

});