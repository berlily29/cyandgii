<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CRUD;
use App\Http\Controllers\Upload_MOA;


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
    
    Route::group(['prefix'=> 'upload'], function() {
        Route::get('', [Upload_MOA::class, 'UploadMOA_Index'])->name('upload.moa.index');
        Route::get('/ep', [Upload_MOA::class, 'UploadMOAEP_Index'])->name('upload.ep.index');
        Route::post('/ep', [Upload_MOA::class, 'UploadMOAEP'])->name('upload.ep.store');
        Route::get('/notarized', [Upload_MOA::class, 'UploadNotarized_Index'])->name('upload.notarized.index');
    });
   
    Route::get('/view', [CRUD::class, 'ViewMOA']);
    Route::get('/view-ep', [CRUD::class, 'ViewMOAEP']);
    Route::get('/user-li', [CRUD::class, 'UserLI']);

});

