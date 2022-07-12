<?php

namespace App\Http\Controllers;

use App\Models\tb_menu_po;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\MenuPoResource;
use Illuminate\Support\Facades\Validator;
use DB;

class TbMenuPoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new MenuPoResource(tb_menu_po::all());
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
     * @param  \App\Models\tb_menu_po  $tb_menu_po
     * @return \Illuminate\Http\Response
     */
    public function show(tb_menu_po $tb_menu_po)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tb_menu_po  $tb_menu_po
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_menu_po $tb_menu_po)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tb_menu_po  $tb_menu_po
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_menu_po $tb_menu_po)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_menu_po  $tb_menu_po
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_menu_po $tb_menu_po)
    {
        //
    }
}
