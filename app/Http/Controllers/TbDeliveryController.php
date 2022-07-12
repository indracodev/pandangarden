<?php

namespace App\Http\Controllers;

use App\Models\tb_delivery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\DeliveryResource;
use Illuminate\Support\Facades\Validator;
use DB;

class TbDeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new DeliveryResource(tb_delivery::all());
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
     * @param  \App\Models\tb_delivery  $tb_delivery
     * @return \Illuminate\Http\Response
     */
    public function show(tb_delivery $tb_delivery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tb_delivery  $tb_delivery
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_delivery $tb_delivery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tb_delivery  $tb_delivery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_delivery $tb_delivery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_delivery  $tb_delivery
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_delivery $tb_delivery)
    {
        //
    }
}
