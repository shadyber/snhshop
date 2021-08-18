<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\ItemPhotos;
use App\Models\Verity;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Image;
use Symfony\Component\Console\Input\Input;
use function MongoDB\BSON\toJSON;

class AdminItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function index()
    {
        $items=Item::all();
        return view('admin.item.index')->with(['items'=>$items]);
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

        if(!Auth::user()->hasRole('admin')){
            return redirect()->back()->with('error','You Don\'t Have This Permission');
        }


        $request->validate([
            'name'=>'required',
            'detail'=>'required',
            'price'=>'required',
            'init_qnt'=>'required',
            'item_category_id'=>'required',
            'photo'=>'required|mimes:jpg,png,jpeg|max:5048',
        ]);



        if($request->hasFile('photo')) {

            $newImageName=uniqid().'_'. $request->_token.'.'.$request->photo->extension();


            $file = $request->file('photo');
            $file_name =$newImageName;
            $destinationPath = 'images/items/';
            $new_img = Image::make($file->getRealPath())->resize(true, true);

// save file with medium quality
            $new_img->save($destinationPath . $file_name, 100);
            $new_img->save($destinationPath.'thumbnile/' . $file_name, 15);

            $request->photo->move(public_path('images/items'),$newImageName);

        }
        $mesurments = json_encode(
            array(

                'height' => $request->input('height'),
                'width' => $request->input('width'),
                'diameter' => $request->input('diameter'),

            ));
       $item= Item::create([
                'name'=>$request->input('name'),
                'detail'=>$request->input('detail'),
                'slug'=>SlugService::createSlug(Item::class,'slug',$request->title.$request->_token),
                'photo'=>'/images/items/'.$newImageName,
                'thumb'=>'/images/items/thumbnile/'.$newImageName,
                'tags'=>$request->input('tags'),
                'color'=>$request->input('color'),
                'price'=>$request->input('price'),
                'weight'=>$request->input('weight'),
                'init_qnt'=>$request->input('init_qnt'),
                'badge'=>$request->input('badge'),
                'measurement'=>$mesurments,
                'user_id'=>auth()->user()->id,
                'item_category_id'=>$request->input('item_category_id'),
            ]
        );

        $default_verity=new Verity;
        $default_verity->title='default';
        $default_verity->item_id=$item->id;
        $default_verity->thumb='/images/items/thumbnile/'.$newImageName;
        $default_verity->photo='/images/items/'.$newImageName;
$default_verity->save();

$default_photo = new ItemPhotos;
$default_photo->item_id=$item->id;
$default_photo->photo='/images/items/'.$newImageName;
$default_photo->thumb='/images/items/thumbnile/'.$newImageName;
$default_photo->title='default photo';
$default_photo->verity_id=$default_verity->id;
$default_photo->save();
        return redirect()->back()->with('success','Item Created Succusfully!');


    }

    /**
     * Display the specified resource.
     *
     * @param  string $slug
     * @return Response
     */
    public function show($slug)
    {
        return view('admin.item.show')->with('item',Item::where('slug',$slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $slug
     * @return Response
     */
    public function edit($slug)
    {
        //
        return view('admin.item.edit')->with('item',Item::where('slug',$slug)->first());
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

        $item = Item::findOrFail($item->id);

        $this->validate($request, [
            'name' => 'required',
            'detail' => 'required',
            'price' => 'required'
        ]);


        $mesurments = json_encode(
            array(

                'height' => $request->input('height'),
                'width' => $request->input('width'),
                'diameter' => $request->input('diameter'),

            ));

        $input = $request->except('photo');
        $item->fill($input)->save();
        $item->measurment=$mesurments;


        return redirect()->back()->with('success','Item Updated Succesfully.');

    }

     /**
     * Update the specified resource in storage.
     *
     * @param Request  $request
 * @return Response
     */
    public function photoupdate(Request $request)
    {

        $request->validate([

            'id'=>'required',
            'photo'=>'required|mimes:jpg,png,jpeg,JPG|max:5048',
        ]);
        $item = Item::findOrFail($request->input('id'));

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

                $item->photo='/images/items/'.$newImageName;
                $item->thumb='/images/items/thumbnile/'.$newImageName;
                $item->save();

        return redirect()->back()->with('success','Item Photo added.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Item $item
     * @return Response
     */
    public function destroy(Item $item)
    {
        if(!Auth::user()->hasRole('admin')){
            return redirect()->back()->with('error','You Don\t Have This Permission');
        }
        $item->delete();
        return redirect()->back()->with('success','Item removed');
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
