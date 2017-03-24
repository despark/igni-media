<?php
Route::group(['middleware' => 'web'], function () {
    Route::group(['prefix' => 'media', 'namespace' => 'Despark\\Cms\\Media\\Http\\Controllers'], function () {
        Route::get('/{path}', 'MediaController@get')->name('media');
        Route::get('/load/{id}', 'MediaController@loadModal')->name('media.modal.load');
    });
});