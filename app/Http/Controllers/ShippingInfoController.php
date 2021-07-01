<?php

namespace App\Http\Controllers;

use App\Models\ShippingInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShippingInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('store','update');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $shippings=ShippingInfo::all();
        return view('admin.shipping.index')->with('shippings',$shippings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('shipping.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'first_name'=>'required',
        'last_name'=>'required',
        'country'=>'required',
        'city'=>'required',
        'photo'=>'required',
        'address1'=>'required',
        'zipcode'=>'required',
    ]);

        //
if(Auth::user()->shippinginfo){
    return 'updated';
}else{







}
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShippingInfo  $shippingInfo
     * @return \Illuminate\Http\Response
     */
    public function show(ShippingInfo $shippingInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShippingInfo  $shippingInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(ShippingInfo $shippingInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShippingInfo  $shippingInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShippingInfo $shippingInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShippingInfo  $shippingInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShippingInfo $shippingInfo)
    {
        //
    }
}
