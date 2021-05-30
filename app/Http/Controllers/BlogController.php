<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Image;
class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $blogs=Blog::paginate(6);
        return view('blog.index')->with('blogs',$blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //

       $request->validate([
           'title'=>'required',
           'detail'=>'required',
           'photo'=>'required|mimes:jpg,png,jpeg|max:5048',
       ]);


        if($request->hasFile('photo')) {

            $newImageName=uniqid().'_'. $request->title.'.'.$request->photo->extension();


            $file = $request->file('photo');
            $file_name =$newImageName;
            $destinationPath = 'images/blogs/thumbnile/';
            $new_img = Image::make($file->getRealPath())->resize(370, 325);

// save file with medium quality
            $new_img->save($destinationPath . $file_name, 80);
            $request->photo->move(public_path('images/blogs'),$newImageName);

        }
        Blog::create([
                'title'=>$request->input('title'),
                'detail'=>$request->input('detail'),
                'slug'=>SlugService::createSlug(Blog::class,'slug',$request->title),
               'photo'=>'/images/blogs/'.$newImageName,
               'thumb'=>'/images/blogs/thumbnile/'.$newImageName,
               'tags'=>$request->input('tags'),
               'user_id'=>auth()->user()->id,
               'blog_category_id'=>$request->input('blog_category_id'),
               ]
       );

       return redirect()->back()->with('message','Blog Created Succusfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return Response
     */
    public function show($slug)
    {
        //

        return view('blog.show')->with('blog',Blog::where('slug',$slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $slug
     * @return Response
     */
    public function edit(String $slug)
    {
        //
        return view('admin.blog.edit')->with('blog',Blog::where('slug',$slug));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  string $slug
     * @return Response
     */
    public function update(Request $request, string $slug)
    {
        //


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string $slug
     * @return Response
     */
    public function destroy(string $slug)
    {
        //
    }
}
