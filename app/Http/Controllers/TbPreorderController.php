<?php

namespace App\Http\Controllers;

use App\Models\tb_preorder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PreorderResource;
use Illuminate\Support\Facades\Validator;
use DB;

class TbPreorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new PreorderResource(tb_preorder::all());
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
     * @param  \App\Models\tb_preorder  $tb_preorder
     * @return \Illuminate\Http\Response
     */
    public function show(tb_preorder $tb_preorder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tb_preorder  $tb_preorder
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_preorder $tb_preorder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tb_preorder  $tb_preorder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_preorder $tb_preorder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_preorder  $tb_preorder
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_preorder $tb_preorder)
    {
        //
    }
}
