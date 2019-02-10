<?php

namespace App\Http\Controllers\Dashboard\Personal;

use Illuminate\Http\Request;

class IndexController extends BasePersonalController
{
    public function index()
    {
        echo 'DASHBOARD - управление персоналом';
    }
}
