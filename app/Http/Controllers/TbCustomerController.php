<?php

namespace App\Http\Controllers;

use App\Models\tb_customer;
use Illuminate\Http\Request;
use App\Models\vis_kota;
use App\Http\Controllers\Controller;
use App\Http\Resources\CustomerResource;
use Illuminate\Support\Facades\Validator;
use DB;

class TbCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $tb_customer;
    public function __construct(tb_customer $tb_customer)
    {
        $this->tb_customer = $tb_customer;
    }
    public function index()
    {
        $arrayresult = [];
        $result = [
            'name' => 'EVENT_APPROVAL',
            'data' => tb_customer::all(),
            'status' => 'Add success', 'code' => 200
        ];

        return new CustomerResource($result);
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
     * @param  \App\Models\tb_customer  $tb_customer
     * @return \Illuminate\Http\Response
     */
    public function show(tb_customer $tb_customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tb_customer  $tb_customer
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_customer $tb_customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tb_customer  $tb_customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_customer $tb_customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_customer  $tb_customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_customer $tb_customer)
    {
        //
    }
}
