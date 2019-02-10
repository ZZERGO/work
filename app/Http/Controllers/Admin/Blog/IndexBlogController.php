<?php

namespace App\Http\Controllers\Admin\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexBlogController extends BaseBlogController
{
    public function index()
    {
        echo 'Главная страница для управления блогом';
    }
}
