<?php
Auth::routes();

// Маршруты для основного сайта
Route::get('/', 'Site\IndexController@index')->name('Main');
Route::group(
    [
        'namespace' => 'Site',
        'as' => 'site.'
    ],
    function ()
    {
        // главная для блога
        //Route::get('/blog', 'Blog\IndexController@index');

        Route::resource('post', 'Blog\BlogPostController');
    });


// Маршруты для рабочей области Dashboard


// Маршруты для админки
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
        Route::resource('domains','WebDomainController');

        // Управление хостингами
        Route::resource('hostings', 'WebHostingController');

        // Управление вебсайтами
        Route::resource('sites', 'WebSiteController');

        // Управление странами
        Route::resource('countrys', 'CountryController');

        // Управление департаментами (отделами)
        Route::resource('departments', 'DepartmentController');

        // Управление блогом
        Route::group(
            [
                'namespace' => 'Blog',
                'prefix' => 'blog',
                'as' => 'blog.'
            ], function(){

                // Главная страница для управления блогом
                Route::get('/', 'IndexBlogController@index')->name('Main');

                // Управление категориями
                Route::resource('category', 'CategoryController');

                // управление постами
                Route::resource('posts', 'PostController');
        });

    });





