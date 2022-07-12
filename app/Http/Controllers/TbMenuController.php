<?php

namespace App\Http\Controllers;

use App\Models\tb_menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\MenuResource;
use Illuminate\Support\Facades\Validator;
use DB;

class TbMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new MenuResource(tb_menu::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\tb_menu  $tb_menu
     * @return \Illuminate\Http\Response
     */
    public function show(tb_menu $tb_menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tb_menu  $tb_menu
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_menu $tb_menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tb_menu  $tb_menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_menu $tb_menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_menu  $tb_menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_menu $tb_menu)
    {
        //
    }
}
