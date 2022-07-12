<?php

namespace App\Http\Controllers;

use App\Models\tb_reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ReservationResource;
use Illuminate\Support\Facades\Validator;
use DB;

class TbReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return new ReservationResource(tb_reservation::all());
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
     * @param  \App\Models\tb_reservation  $tb_reservation
     * @return \Illuminate\Http\Response
     */
    public function show(tb_reservation $tb_reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tb_reservation  $tb_reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_reservation $tb_reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tb_reservation  $tb_reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_reservation $tb_reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_reservation  $tb_reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_reservation $tb_reservation)
    {
        //
    }
}
