<?php

namespace App\Http\Controllers;

use App\Models\tb_takeaway;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\TakeawayResource;
use Illuminate\Support\Facades\Validator;
use DB;

class TbTakeawayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new TakeawayResource(tb_takeaway::all());
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
     * @param  \App\Models\tb_takeaway  $tb_takeaway
     * @return \Illuminate\Http\Response
     */
    public function show(tb_takeaway $tb_takeaway)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tb_takeaway  $tb_takeaway
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_takeaway $tb_takeaway)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tb_takeaway  $tb_takeaway
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_takeaway $tb_takeaway)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_takeaway  $tb_takeaway
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_takeaway $tb_takeaway)
    {
        //
    }
}
