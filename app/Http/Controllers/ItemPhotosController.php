<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\ItemPhotos;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Image;
use MongoDB\Driver\Session;

class ItemPhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $photos=ItemPhotos::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //validate

        $request->validate([

            'id'=>'required',
            'photo.*'=>'required|mimes:jpg,png,jpeg|max:5048',
        ]);
        // check if there is photo
        if($request->has('photo')){
            foreach($request->file('photo')   as $file)
            {

                $newImageName=uniqid().'_'. $request->title.'.'.$file->extension();


                $file_name =$newImageName;
                $destinationPath = 'images/items/thumbnile/';
                $new_img = Image::make($file->getRealPath())->resize(530, 694);

// save file with medium quality
                $new_img->save($destinationPath . $file_name, 80);
                $file->move(public_path('images/items'),$newImageName);

                $items_photo=new ItemPhotos;

                $items_photo->item_id=$request->input('id');
                $items_photo->photo='/images/items/'.$newImageName;
                $items_photo->thumb='/images/items/thumbnile/'.$newImageName;
                $items_photo->title=$request->input('title');
                $items_photo->save();

                \Illuminate\Support\Facades\Session::flash('message', 'Alt Image successfully Updated!');


            }


    }
        return redirect()->back();  //loop through photo
        // create thumb and save to db

    }

    /**
     * Display the specified resource.
     *
     * @param ItemPhotos $itemPhotos
     * @return Response
     */
    public function show(ItemPhotos $itemPhotos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ItemPhotos $itemPhotos
     * @return Response
     */
    public function edit(ItemPhotos $itemPhotos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param ItemPhotos $itemPhotos
     * @return Response
     */
    public function update(Request $request, ItemPhotos $itemPhotos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ItemPhotos $itemPhotos
     * @return Response
     */
    public function destroy(ItemPhotos $itemPhotos)
    {
        //
    }
}
