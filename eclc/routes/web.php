<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CRUD;

Route::group([/*'middleware' => 'auth',*/ 'prefix' => ''], function () {

    Route::get('/dashboard', [CRUD::class, 'Dashboard']);
    Route::get('/list-EP', [CRUD::class, 'LISTMOAEP']);
    Route::get('/list', [CRUD::class, 'LISTMOA']);
    Route::get('/manage', [CRUD::class, 'ManageMOA']);
    Route::get('/upload-ep', [CRUD::class, 'UploadMOAEP']);
    Route::get('/upload', [CRUD::class, 'UploadMOA']);
    Route::get('/upload-notarized', [CRUD::class, 'UploadNotarized']);
    Route::get('/view', [CRUD::class, 'ViewMOA']);
});

