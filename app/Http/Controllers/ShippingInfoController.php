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
        'country_code'=>'required',
        'city'=>'required',
        'photo'=>'required',
        'address1'=>'required',
        'zipcode'=>'required',
    ]);

        //
if(Auth::user()->shippinginfo){


    $shipingifno=Auth::user()->shippinginfo;
    $shipingifno->first_name=$request->input('first_name');
    $shipingifno->last_name=$request->input('last_name');
    $shipingifno->country=$request->input('country');
    $shipingifno->city=$request->input('city');
    $shipingifno->address1=$request->input('address1');
    $shipingifno->address2=$request->input('address2');
    $shipingifno->zipcode=$request->input('zipcode');

    $shipingifno->save();

    return redirect()->back()->with('sucuss','Shipping Address Updated Succusfully.');
}else{
    $shipingifno=new ShippingInfo;
    $shipingifno->first_name=$request->input('first_name');
    $shipingifno->last_name=$request->input('last_name');
    $shipingifno->country=$request->input('country');
    $shipingifno->city=$request->input('city');
    $shipingifno->address1=$request->input('address1');
    $shipingifno->address2=$request->input('address2');
    $shipingifno->zipcode=$request->input('zipcode');
    $shipingifno->user_id=Auth::user()->id;

    $shipingifno->save();


    return redirect()->back()->with('sucuss','Shipping Address Created Succusfully.');



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
