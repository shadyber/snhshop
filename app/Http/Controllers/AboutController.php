<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function create()
    {
        if (About::get()->last()) {
            return view('about.edit')->with('about', About::get()->last());
        } else {
            return view('about.create');
        }
    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'detail'=>'required',

            'photo'=>'required|mimes:jpg,png,jpeg|max:5048',
            'logo'=>'required|mimes:jpg,png,jpeg|max:5048',
        ]);

        if($request->hasFile('photo')) {

            $newImageName=uniqid().'_'. $request->title.'.'.$request->photo->extension();
            $request->photo->move(public_path('images/about'),$newImageName);

        }
        if($request->hasFile('logo')) {

            $logo=uniqid().'_'. $request->title.'.'.$request->logo->extension();
            $request->logo->move(public_path('images/about'),$logo);

        }
        About::create([
                'name'=>$request->input('name'),
                'detail'=>$request->input('detail'),

                'photo'=>'/images/about/'.$newImageName,
                'logo'=>'/images/about/'.$logo,
                'history'=>$request->input('tags'),
                'mission'=>$request->input('color'),
                'goal'=>$request->input('price'),
                'values'=>$request->input('weight'),

            ]
        );

        return redirect()->back()->with('message','Item Created Succusfully!');


    }
}
