<?php

namespace App\Http\Controllers\Dashboard\Web;

use Illuminate\Http\Request;

class IndexController extends BaseWebController
{
    public function index()
    {
        echo 'DASHBOARD - управление сайтами, доменами и хостингами';
    }
}
