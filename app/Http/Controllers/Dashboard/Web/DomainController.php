<?php

namespace App\Http\Controllers\Dashboard\Web;

use Illuminate\Http\Request;

class DomainController extends BaseWebController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $txt = 'DASHBOARD - Управление WWW - Домены';
        echo '<b>' .$txt. '</b>';
        echo '</BR></BR>' . __METHOD__;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $txt = 'DASHBOARD - Управление WWW - форма создания домена';
        echo '<b>' .$txt. '</b>';
        echo '</BR></BR>' . __METHOD__;
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $txt = 'DASHBOARD - Управление WWW - информация о домене с id='.$id;
        echo '<b>' .$txt. '</b>';
        echo '</BR></BR>' . __METHOD__;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $txt = 'DASHBOARD - Управление WWW - Редактируем домен с id='.$id;
        echo '<b>' .$txt. '</b>';
        echo '</BR></BR>' . __METHOD__;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
