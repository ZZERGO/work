<?php

namespace App\Http\Controllers\Dashboard\Personal;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends BasePersonalController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $txt = 'DASHBOARD - Управление персоналом - Отделы';
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
        $txt = 'DASHBOARD - Управление персоналом - Отделы - Форма создания';
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
     * @param  \App\Models\Department  $departments
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $txt = 'DASHBOARD - Управление персоналом - Отдел c id='.$id;
        echo '<b>' .$txt. '</b>';
        echo '</BR></BR>' . __METHOD__;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $departments
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $txt = 'DASHBOARD - Управление персоналом - Редактирование Отдела с id='.$id;
        echo '<b>' .$txt. '</b>';
        echo '</BR></BR>' . __METHOD__;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $departments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $departments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $departments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $departments)
    {
        //
    }
}
