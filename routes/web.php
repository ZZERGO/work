<?php
Auth::routes();

// Маршруты для основного сайта
Route::get('/', 'Site\IndexController@index')->name('Main');


Route::group(
    [
        'namespace' => 'Site',
        'as' => 'site.'
    ], function ()
{
    Route::group(
        [
            'namespace' => 'Blog',
            'as' => 'blog.',
            'prefix' => 'blog'
        ], function ()
    {
        // Маршруты для блога на сайте
        Route::get('', 'IndexController@index')->name('main');
        Route::resource('post', 'PostController');
        Route::resource('category', 'CategoryController');
    }
    );
});


// Маршруты для рабочей области Dashboard
// Главная DASHBOARD
Route::get('/dashboard', 'Dashboard\IndexController@index')->name('dashboard.main');
Route::group(
    [
        'namespace' => 'Dashboard',
        'as' => 'dashboard.',
        'prefix' => 'dashboard'
    ],

    function ()
    {
        // Управление сайтами и доменами
        Route::group([
            'namespace' => 'Web',
            'as' => 'web.',
            'prefix' => 'web'
        ], function (){

            // Главная
            Route::get('/', 'IndexController@index')->name('main');

            // управление доменами
            //Route::resource('domains', 'DomainController');

            // управление сайтами
            Route::resource('sites', 'SiteController');

            // управление хостингами
            Route::resource('hostings', 'HostingController');
        });
    });

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
        Route::resource('country', 'CountryController');

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





