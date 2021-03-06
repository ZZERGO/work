<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Admin\BaseAdminController;
use App\Models\Web\WebSite;
use Illuminate\Http\Request;

class SiteController extends BaseAdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo '</BR>' . __METHOD__;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo '</BR>' . __METHOD__;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Web\WebSite  $webSite
     * @return \Illuminate\Http\Response
     */
    public function show(WebSite $webSite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Web\WebSite  $webSite
     * @return \Illuminate\Http\Response
     */
    public function edit(WebSite $webSite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Web\WebSite  $webSite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WebSite $webSite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Web\WebSite  $webSite
     * @return \Illuminate\Http\Response
     */
    public function destroy(WebSite $webSite)
    {
        //
    }
}
