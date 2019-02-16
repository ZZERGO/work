<?php

namespace App\Http\Controllers\Dashboard\Blog;


class IndexController extends BaseController
{
    public function index()
    {
        $txt = 'DASHBOARD - Управление блогом - Главная';
        echo '<b>' .$txt. '</b>';
        echo '</BR></BR>' . __METHOD__;
    }
}
