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
        Route::get('/', 'IndexController@index')->name('Main');

        // Управление пользователями
        Route::resource('user', 'UserController');

        // Управление доменами
        Route::resource('domain','WebDomainController');

        // Управление хостингами
        Route::resource('hosting', 'WebHostingController');

        // Управление вебсайтами
        Route::resource('website', 'WebSiteController');

        // Управление странами
        Route::resource('country', 'CountryController');

        // Управление департаментами (отделами)
        Route::resource('department', 'DepartmentController');


});

Auth::routes();



