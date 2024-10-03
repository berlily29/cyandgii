<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CRUD;

Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {


    Route::get('/home', [HomeController::class, 'index']);
    Route::post('/home', [HomeController::class, 'store']);
    Route::put('/home/{id}', [HomeController::class, 'update']);
    Route::delete('/home/{id}', [HomeController::class, 'destroy']);
});

