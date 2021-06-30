<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        if(Auth::user()->hasRole('admin')){

            return view('home');
        }
        return view('profile')->with(['user'=>Auth::user()]);
    }

    public function countries()

    {

        $countries = Countries::all();

        return view('countries',compact('countries'));

    }
}
