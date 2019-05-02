<?php

namespace App\Http\Controllers\Dashboard\Blog;

use Illuminate\Http\Request;

class CategoryController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $txt = 'DASHBOARD - Управление блогом - Категории';
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
        $txt = 'DASHBOARD - Управление блогом - форма создания категории';
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
        $txt = 'DASHBOARD - Управление блогом - Информация о категории c ID='.$id;
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
        $txt = 'DASHBOARD - Управление блогом - Редактируем категорию с id='.$id;
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
