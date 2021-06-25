<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Image;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }

    public function index()
    {
        $items=Item::all();
     return view('item.index')->with(['items'=>$items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('admin.item.create');
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
            'name'=>'required',
            'detail'=>'required',
            'price'=>'required',
            'init_qnt'=>'required',
            'photo'=>'required|mimes:jpg,png,jpeg|max:5048',
        ]);

        if($request->hasFile('photo')) {

            $newImageName=uniqid().'_'. $request->title.'.'.$request->photo->extension();


            $file = $request->file('photo');
            $file_name =$newImageName;
            $destinationPath = 'images/items/thumbnile/';
            $new_img = Image::make($file->getRealPath())->resize(true,true,20);

// save file with medium quality
            $new_img->save($destinationPath . $file_name, 80);
            $request->photo->move(public_path('images/items'),$newImageName);

        }
        $measurement=[
            'w'=>$request->input('width'),
            'h'=>$request->input('height'),
            'd'=>$request->input('diameter'),
        ];
        Item::create([
                'name'=>$request->input('name'),
                'detail'=>$request->input('detail'),
                'slug'=>SlugService::createSlug(Item::class,'slug',$request->name),
                'photo'=>'/images/items/'.$newImageName,
                'thumb'=>'/images/items/thumbnile/'.$newImageName,
                'tags'=>$request->input('tags'),
                'color'=>$request->input('color'),
                'price'=>$request->input('price'),
                'weight'=>$request->input('weight'),
                'init_qnt'=>$request->input('init_qnt'),
                'badge'=>$request->input('badge'),
                'user_id'=>auth()->user()->id,
                'measurement'=>json_encode($measurement),
                'item_category_id'=>$request->input('item_category_id'),
            ]
        );

        return redirect()->back()->with('message','Item Created Succusfully!');


    }

    /**
     * Display the specified resource.
     *
     * @param  string $slug
     * @return Response
     */
    public function show($slug)
    {
        return view('item.show')->with('item',Item::where('slug',$slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Item $item
     * @return Response
     */
    public function edit(Item $item)
    {
        //
        return view('admin.item.edit')->with('item.edit')->with('item',$item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Item $item
     * @return Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Item $item
     * @return Response
     */
    public function destroy(Item $item)
    {
        //
    }
    /**
     * Create a thumbnail of specified size
     *
     * @param string $path path of thumbnail
     * @param int $width
     * @param int $height
     */
    public function createThumbnail($path, $width, $height)
    {
        $img = Image::make($path)->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($path);
    }
}
