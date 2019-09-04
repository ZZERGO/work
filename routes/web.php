<?php
Auth::routes();

// Маршруты для основного сайта
Route::group(
    [
        'namespace' => 'Site',
        'as' => 'site.'
    ],
    function ()
    {
        // Главная страница сайта
        Route::get('/', 'IndexController@index')->name('main');

        // Маршруты для блога на сайте
        Route::group(
            [
                'namespace' => 'Blog',
                'as' => 'blog.',
            ],
            function ()
            {
                Route::resource('post', 'PostController');
                Route::resource('category', 'CategoryController');
            }
    );
});

// Маршруты для рабочей области Dashboard
Route::group(
    [
        'namespace' => 'Dashboard',
        'as' => 'dashboard.',
        'prefix' => 'dashboard'
    ],

    function ()
    {
        // Главная DASHBOARD
        Route::get('/', 'IndexController@index')->name('main');

        // Управление доменами, сайтами и хостингами
        Route::group(
            [
                'namespace' => 'Web',
                'as' => 'web.',
                'prefix' => 'web'
            ],
            function () {

                // Главная
                Route::get('/', 'IndexController@index')->name('main');

                // управление доменами
                Route::resource('domains', 'DomainController');

                // управление сайтами
                Route::resource('sites', 'SiteController');

                // управление хостингами
                Route::resource('hostings', 'HostingController');
            });

        // Управление персоналом (пользователи, отделы, страны, должности)
        Route::group(
            [
                'namespace' => 'Personal',
                'as' => 'personal.',
                'prefix' => 'personal'
            ],
            function ()
            {
                Route::get('/', 'IndexController@index')->name('main');
                Route::resource('users', 'UserController');
                Route::resource('countries', 'CountryController');
                Route::resource('departments', 'DepartmentController');
                Route::resource('positions', 'PositionController');
            });

        // Управление блогом
        Route::group(
            [
                'namespace' => 'Blog',
                'as' => 'blog.',
                'prefix' => 'blog'
            ],
            function ()
            {
                Route::get('/', 'IndexController@index')->name('main');
                Route::resource('categories', 'CategoryController');
                Route::resource('posts', 'PostController');

            }
        );
    });

// Маршруты для админки
Route::group(
    [
        'namespace' => 'Admin',
        'prefix' => 'admin',
        'as' => 'Admin.'
    ],
    function(){

        // Главная страница админки
        Route::get('/', 'IndexController@index')->name('Main');

            //Управление сайтами и доменами
            Route::group([
                'namespace' => 'Web',
                'prefix' => 'web',
                'as' => 'Web.'
            ], function (){
                Route::get('/', 'MainController@index')->name('Main');
            });

            // Управление пользователями
            Route::group(
                [
                    'namespace' => 'Personal',
                    'prefix' => 'users',
                    'as' => 'Personal.'
                ], function (){
                    Route::get('/', 'UserController@index')->name('Main');
            });








        // Управление доменами
        Route::resource('domains','Web\DomainController');

        // Управление хостингами
        Route::resource('hostings', 'Web\HostingController');

        // Управление вебсайтами
        Route::resource('sites', 'Web\SiteController');

        // Управление странами
        Route::resource('country', 'Personal\CountryController');

        // Управление департаментами (отделами)
        Route::resource('departments', 'Personal\DepartmentController');

        // Управление блогом
        Route::group(
            [
                'namespace' => 'Blog',
                'prefix' => 'blog',
                'as' => 'blog.'
            ],
            function()
            {

                // Главная страница для управления блогом
                Route::get('/', 'IndexBlogController@index')->name('Main');

                // Управление категориями
                Route::resource('category', 'CategoryController');

                // управление постами
                Route::resource('posts', 'PostController');
             });



    });





