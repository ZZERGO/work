<?php

namespace App\Http\Controllers\Site\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends BaseBlogController
{
    public function index()
    {
        echo 'Главная страница блога';
        echo '<br>' . __METHOD__;
    }
}
