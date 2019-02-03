<?php

namespace App\Http\Controllers\Admin;

use App\Models\Web\WebDomain;
use Illuminate\Http\Request;

class WebDomainController extends BaseAdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo 'управление доменами - главная';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo 'Управление доменами - форма создания домена';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo 'правление доменами - сохранение';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Web\WebDomain  $webDomain
     * @return \Illuminate\Http\Response
     */
    public function show(WebDomain $webDomain)
    {
        echo 'уравление доменами - показать информацию о домене' . $webDomain->name;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Web\WebDomain  $webDomain
     * @return \Illuminate\Http\Response
     */
    public function edit(WebDomain $webDomain)
    {
        echo 'управление доменаи - форма редактирования домена' . $webDomain;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Web\WebDomain  $webDomain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WebDomain $webDomain)
    {
        echo 'управление доменами - обовление информации в БД';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Web\WebDomain  $webDomain
     * @return \Illuminate\Http\Response
     */
    public function destroy(WebDomain $webDomain)
    {
        echo 'управление доменами - удаление записис о домене из БД';
    }
}
