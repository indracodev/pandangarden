<?php

namespace App\Http\Controllers;

use App\Models\tb_order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use Illuminate\Support\Facades\Validator;
use DB;

class TbOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new OrderResource(tb_order::all());
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
     * @param  \App\Models\tb_order  $tb_order
     * @return \Illuminate\Http\Response
     */
    public function show(tb_order $tb_order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tb_order  $tb_order
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_order $tb_order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tb_order  $tb_order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_order $tb_order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_order  $tb_order
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_order $tb_order)
    {
        //
    }
}
