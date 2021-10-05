<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Api\V2'], function () {
    Route::post('ls-lib-update', 'LsLibController@lib_update');
    Route::post('qr', 'LsLibController@generate');
    
    Route::group(['prefix' => 'xendit'], function() {
        Route::get('getVa', 'XenditController@getListVa')->name('getListVa');
        Route::post('createVa', 'XenditController@createVa')->name('createVa');
        Route::post('callbackPaid', 'XenditController@callbackPaid')->name('callbackPaid');
        Route::post('callbackCreated', 'XenditController@callbackCreated')->name('callbackCreated');
    });
});
