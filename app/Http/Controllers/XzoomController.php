<?php

namespace App\Http\Controllers;

use App\Models\ItemPhotos;
use Illuminate\Http\Request;
use function App\Models\Verity;

class XzoomController extends Controller
{
    //

    public function makeSlider( $id)
    {
        $photos=ItemPhotos::varityPhoto($id);

  return view('xzoom.show')->with(['photos'=>$photos]);

    }
}
