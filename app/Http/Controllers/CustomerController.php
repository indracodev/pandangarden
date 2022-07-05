<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CustomerResource;
use Illuminate\Support\Facades\Validator;



class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new CustomerResource(Customer::all());
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
        //set validation
        $validator = Validator::make($request->all(), [
            'customerName' => 'required',
            'customerUsername' => 'required',
            'customerEmail' => 'required',
            'customerAddress' => 'required',
            'customerPhone' => 'required',
            'customerPassword' => 'required',
        ]);

        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        //save to database
        $customer = Customer::create([
            'customerName' => $request->customerName,
            'customerUsername' => $request->customerUsername,
            'customerEmail' => $request->customerEmail,
            'customerAddress' => $request->customerAddress,
            'customerPhone' => $request->customerPhone,
            'customerPassword' =>$request->customerPassword
        ]);

        return new CustomerResource($customer);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return new CustomerResource($customer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $validator = Validator::make($request->all(), [
            'customerName' => 'required',
            'customerUsername' => 'required',
            'customerEmail' => 'required',
            'customerAddress' => 'required',
            'customerPhone' => 'required',
            'customerPassword' => 'required',
        ]);

        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        //update to database
        $customer->update([
            'customerName' => $request->customerName,
            'customerUsername' => $request->customerUsername,
            'customerEmail' => $request->customerEmail,
            'customerAddress' => $request->customerAddress,
            'customerPhone' => $request->customerPhone,
            'customerPassword' =>$request->customerPassword
        ]);

        return new CustomerResource($customer);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        
        return new CustomerResource($customer);

    }
}
