<?php

namespace App\Http\Controllers\Site;

use App\Models\Personal\User;

class IndexController extends BaseSiteController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $users = User::all();

        return view('site.index', compact('users'));
    }
}
