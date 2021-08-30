<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
use App\Models\Item;


class SiteController extends Controller
{

    public function home(){
        return view('site.home');
    }

    public function posts(){
        $data = Item::all();
        return view('item.index',compact('data'));
    }

    public function postDetails($slug){
        $post = Item::where('slug',$slug)->first();
        return view('item.show',compact('post'));
    }

}
