<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CRUD;
use App\Http\Controllers\Upload_MOA;
use App\Http\Controllers\Manage_MOA;

Route::group([/*'middleware' => 'auth',*/ 'prefix' => ''], function () {

    Route::get('', [CRUD::class, 'Dashboard']);
    Route::get('/list-ep', [CRUD::class, 'LISTMOAEP']);
    Route::get('/list', [CRUD::class, 'LISTMOA'])->name('list.index');

    Route::group(['prefix'=> 'manage'], function() {
        Route::get('/{id}', [Manage_MOA::class, 'ManageMOA_Index'])->name('manage.moa.index');
        Route::get('/ep', [Manage_MOA::class, 'ManageMOAEP_Index'])->name('manage.ep.index');
        Route::put('/{id}', [Manage_MOA::class, 'Manage_Update'])->name('manage.moa.update');
        Route::put('/ep/{id}', [Manage_MOA::class, 'Manage_Update'])->name('manage.ep.update');

    });

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

