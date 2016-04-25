<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Tag;
use App\Http\Requests\BlogRequest;
use Redirect;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Pagination;
use Intervention\Image\ImageManagerStatic as Image;
use Carbon\Carbon;
class BlogController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::orderBy('id', 'desc')->get();
        return view('blog.index', compact('blog'))->with('title',"All Blog List");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag= Tag::lists('name','name');
        return view('blog.create',compact('tag'))->with('title',"Create New Blog");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\BlogRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {

        //return $request->all();
        $blog = new Blog();

        /**************************Image*******************/
        if($request->hasFile('image')){

            $image = $request->file('image');
            $fullImage = '/upload/blog/fullImage/image-'.$request->meta_data.'-'.strtotime(date('Y-m-d H:i:s')).'.'.$image->getClientOriginalExtension();
            $thumbnail = '/upload/blog/thumbnail/thumbnail-'.$request->meta_data.'-'.strtotime(date('Y-m-d H:i:s')).'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(558, 221)->save(public_path($fullImage));
            Image::make($image)->resize(81, 81)->save(public_path($thumbnail));

             $blog->image = $fullImage;
            $blog->img_thumbnail = $thumbnail;

        }else{

            return redirect()->route('blog.index')->with('error','File Not Found');
        }
        /**************************Image*******************/
        $blog->title = $request->title;
        $blog->details = $request->details;
        $blog->tag = $request->tag;
        $blog->meta_data = $request->meta_data;
        $blog->user_id =  \Auth::user()->id;
        $blog->save();

        return redirect()->route('blog.index')->with('success','Blog Successfully Created');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag= Tag::lists('name','name');
        $tag_type=  Blog::where('id',$id)->pluck('tag');
        $blog = Blog::findOrFail($id);

        return view('blog.edit', compact('blog','tag_type','tag'))->with('title',"Edit Blog");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\BlogRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->details = $request->details;
        $blog->tag = $request->tag;
        $blog->meta_data = $request->meta_data;
        //$blog->image = $request->image;
        $blog->save();

        return redirect()->route('blog.index')->with('success','Blog Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Blog::destroy($id);

        return redirect()->route('blog.index')->with('success',"Blog Successfully deleted");
    }
}