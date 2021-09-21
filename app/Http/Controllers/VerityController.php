<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Verity;
use Illuminate\Http\Request;
use Image;
class VerityController extends Controller
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
        $request->validate([

            'id'=>'required',
            'photo.*'=>'required|mimes:jpg,png,jpeg,JPG|max:5048',
        ]);
        // check if there is photo
        if($request->has('photo')){
            $i=0;
            foreach($request->file('photo')   as $file)
            {
                $i++;

                $newImageName=uniqid().'_'. $request->_token.'.'.$file->extension();


                $file_name =$newImageName;
                $destinationPath = 'images/items/thumbnile/';
                $new_img = Image::make($file->getRealPath())->resize(true, true);

// save file with medium quality
                $new_img->save($destinationPath . $file_name, 80);
                $file->move(public_path('images/items'), $file_name);

                $verity=new Verity();

                $verity->item_id=$request->input('id');
                $verity->photo='/images/items/'.$newImageName;
                $verity->thumb='/images/items/thumbnile/'.$newImageName;
                $verity->title=$request->input('title').''.$i;
                $verity->save();

                \Illuminate\Support\Facades\Session::flash('success', 'Verity image successfully Updated!');


            }


        }
        return redirect()->back()->with('success','Verity image successfully Updated!');  //loop through photo
        // create thumb and save to db

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Verity  $verity
     * @return \Illuminate\Http\Response
     */
    public function show(Verity $verity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Verity  $verity
     * @return \Illuminate\Http\Response
     */
    public function edit(Verity $verity)
    {
        //

        return view('admin.verity.edit')->with(['verity'=>$verity]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Verity  $verity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Verity $verity)
    {
        //


        $verity = Verity::findOrFail($verity->id);

        $request->validate([

            'title'=>'required',
            'photo.*'=>'required|mimes:jpg,png,jpeg,JPG|max:5048',
        ]);



        $input = $request->except('photo');
        $verity->fill($input)->save();



        if($request->hasFile('photo')) {

            $newImageName=uniqid().'_'. $request->_token.'.'.$request->photo->extension();


            $file = $request->file('photo');
            $file_name =$newImageName;
            $destinationPath = 'images/items/thumbnile/';
            $new_img = Image::make($file->getRealPath())->resize(530, 694);

// save file with medium quality
            $new_img->save($destinationPath . $file_name, 80);
            $request->photo->move(public_path('images/items'),$newImageName);

        }


            $verity->photo = '/images/items/' . $newImageName;
            $verity->thumb = '/images/items/thumbnile/' . $newImageName;

            $verity->save();




        return redirect()->back()->with('success','Item Updated Successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Verity  $verity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Verity $verity)
    {
        //
    }
}
