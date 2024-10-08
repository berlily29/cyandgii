<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CRUD;

Route::get('/', function () {
    $users = [
        ['name' => 'John', 'age' => 25],
        ['name' => 'Jane', 'age' => 30],
        ['name' => 'Cyron', 'age' => 21],
        ['name' => 'Luise', 'age' => 21],
        ['name' => 'Kim', 'age' => 22],    
    ];

    $otherData = 'Table of contents';

    return view('welcome', compact('users','otherData'));
});

Route::group([/*'middleware' => 'auth',*/ 'prefix' => ''], function () {

    Route::get('/dashboard', [CRUD::class, 'Dashboard']);
    Route::get('/list-ep', [CRUD::class, 'LISTMOAEP']);
    Route::get('/list', [CRUD::class, 'LISTMOA']);
    Route::get('/manage', [CRUD::class, 'ManageMOA']);
    Route::get('/manage-ep', [CRUD::class, 'ManageMOAEP']);
    Route::get('/upload-ep', [CRUD::class, 'UploadMOAEP']);
    Route::get('/upload', [CRUD::class, 'UploadMOA']);
    Route::get('/upload-notarized', [CRUD::class, 'UploadNotarized']);
    Route::get('/view', [CRUD::class, 'ViewMOA']);
    Route::get('/view-ep', [CRUD::class, 'ViewMOAEP']);
    Route::get('/user-li', [CRUD::class, 'UserLI']);

});

