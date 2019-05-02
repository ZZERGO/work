<?php

namespace App\Http\Controllers\Dashboard\Personal;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends BasePersonalController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $txt = 'DASHBOARD - Управление персоналом - Страны';
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
        $txt = 'DASHBOARD - Управление персоналом - Страны - Форма создания';
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
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $txt = 'DASHBOARD - Управление персоналом - Страна с id='.$id;
        echo '<b>' .$txt. '</b>';
        echo '</BR></BR>' . __METHOD__;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $txt = 'DASHBOARD - Управление персоналом - Редактирование Страны с id='.$id;
        echo '<b>' .$txt. '</b>';
        echo '</BR></BR>' . __METHOD__;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        //
    }
}
