<?php

namespace App\Http\Controllers;

use App\Models\tb_gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\GalleryResource;
use Illuminate\Support\Facades\Validator;
use DB;

class TbGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new GalleryResource(tb_gallery::all());
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
     * @param  \App\Models\tb_gallery  $tb_gallery
     * @return \Illuminate\Http\Response
     */
    public function show(tb_gallery $tb_gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tb_gallery  $tb_gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_gallery $tb_gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tb_gallery  $tb_gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_gallery $tb_gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_gallery  $tb_gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_gallery $tb_gallery)
    {
        //
    }
}
