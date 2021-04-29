<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $address=Address::all()->last();
        return  view('address.index')->with('address',$address);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(Address::all()->last()){

            return view('address.edit')->with(['address'=>Address::all()->last()]);
        }else{
            return view('address.create');
        }


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

        $request->validate([
            'tel'=>'required',
             'email'=>'required',
            'email2'=>'required',
            'address1'=>'required',

        ]);


        Address::create([
                'tel'=>$request->input('tel'),
                'tel2'=>$request->input('tel2'),
                'email'=>$request->input('email'),
                'email2'=>$request->input('email2'),
                'address1'=>$request->input('address1'),
                'address2'=>$request->input('address2'),

            ]
        );
        return redirect()->back()->with(['succuss'=>'Address Added Sucusfully!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        //
        return view('address.show')->with('address',$address);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
        //
        return view('address.edit')->with('address',$address);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        //
    }
}
