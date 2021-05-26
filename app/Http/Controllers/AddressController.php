<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
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
     * @return Response
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
     * @param Request $request
     * @return Response
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
     * @param Address $address
     * @return Response
     */
    public function show(Address $address)
    {
        //
        return view('address.show')->with('address',$address);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Address $address
     * @return Response
     */
    public function edit(Address $address)
    {
        //
        return view('address.edit')->with('address',$address);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Address $address
     * @return Response
     */
    public function update(Request $request, Address $address)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Address $address
     * @return Response
     */
    public function destroy(Address $address)
    {
        //
    }
}
