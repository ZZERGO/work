<?php

namespace App\Http\Controllers\Dashboard\Personal;

use App\Position;
use Illuminate\Http\Request;

class PositionController extends BasePersonalController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $txt = 'DASHBOARD - Управление персоналом - Должности';
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
        $txt = 'DASHBOARD - Управление персоналом - Должности - Создание';
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
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $txt = 'DASHBOARD - Управление персоналом - Должность с id='.$id;
        echo '<b>' .$txt. '</b>';
        echo '</BR></BR>' . __METHOD__;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $txt = 'DASHBOARD - Управление персоналом - Редактирование должности с id='.$id;
        echo '<b>' .$txt. '</b>';
        echo '</BR></BR>' . __METHOD__;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Position $position)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function destroy(Position $position)
    {
        //
    }
}
