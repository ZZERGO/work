<?php

namespace App\Providers;

use App\Http\Controllers\Site\Blog\CategoryController;
use App\Models\Blog\BlogPost;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        //BlogPost::observe(BlogPost::class);
        //BlogPost::observe(BlogPost::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
