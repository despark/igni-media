<?php
Route::group(['middleware' => 'web'], function () {
    Route::group(['prefix' => 'media', 'namespace' => 'Despark\\Cms\\Media\\Http\\Controllers'], function () {
        Route::get('/{path}', 'MediaController@get')->name('media');
    });
});