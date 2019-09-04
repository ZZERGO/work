<?php

namespace App\Http\Controllers\Admin\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    // вывод главной страницы раздела
    public function index()
    {
        return view('admin.web',
            [
                'title' => 'Управление сайтами и доменами'
            ]);
    }

}
