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
        'as' => 'admin.'
    ],
    function(){

        // Главная страница админки
        Route::get('', 'IndexController@index')->name('Main');

        // Управление пользователями
        Route::group(['prefix' => 'users', 'as' => 'users.'], function (){
            Route::resource('', 'UserController');
        });

        // Управление доменами
        Route::group(['prefix' => 'domains', 'as' => 'domains.'], function (){
           Route::resource('', 'WebDomainController');
        });


});

Auth::routes();



