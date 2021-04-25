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
}
