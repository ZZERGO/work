<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Admin\BaseAdminController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends BaseAdminController
{
    //
    public function index()
    {
        return view('admin.blog', ['title' => 'Управление блогом']);
    }
}
