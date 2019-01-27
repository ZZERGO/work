<?php


// Маршруты для основного сайта
Route::group(['namespace' => 'Site'], function (){
    // для блога и статей
    Route::get('/', 'IndexController@index' );

    // для пользователей
});


// Маршруты для рабочей области Dashboard


// Маршруты для админка
Route::group(
    [
        'namespace' => 'Admin',
        'prefix' => 'admin',
        'as' => 'AdminPanel'
    ],
    function(){
        Route::get('', 'IndexController@index');
        Route::group(['prefix' => 'users', 'as' => 'Users'], function (){

        });


});

Auth::routes();



