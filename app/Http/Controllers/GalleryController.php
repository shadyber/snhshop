<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Image;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    return view('gallery.index')->with(['photos'=>Gallery::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
       return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title'=>'required',
            'photo'=>'required|mimes:jpg,png,jpeg|max:5048',
        ]);

        if($request->hasFile('photo')) {

            $newImageName=uniqid().'_'. $request->title.'.'.$request->photo->extension();


            $file = $request->file('photo');
            $file_name =$newImageName;
            $destinationPath = 'images/thumbnile/';
            $new_img = Image::make($file->getRealPath())->resize(530, 694);

// save file with medium quality
            $new_img->save($destinationPath . $file_name, 80);
            $request->photo->move(public_path('images/'),$newImageName);

        }


        Gallery::create([
            'title'=>$request->input('title'),
            'items'=>$request->input('items'),
            'tags'=>$request->input('tags'),
            'photo'=>'/images/'.$newImageName,
            'thumb'=>'/images/thumbnile/'.$newImageName
]);

        return redirect()->back()->with('message','Gallery Photo succuessfuly Created !');

    }

    /**
     * Display the specified resource.
     *
     * @param Gallery $gallery
     * @return Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Gallery $gallery
     * @return Response
     */
    public function edit(Gallery $gallery)
    {
        //

        return  view('admin.gallery.edit')->with('gallery',$gallery);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Gallery $gallery
     * @return Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Gallery $gallery
     * @return Response
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
