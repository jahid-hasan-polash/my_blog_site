<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Http\Requests\BlogRequest;
use Redirect;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Pagination;
class BlogController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::all();
        return view('blog.index', compact('blog'))->with('title',"All Blog List");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create')->with('title',"Create New Blog");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\BlogRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->details = $request->details;
        $blog->tag = $request->tag;
        $blog->image = $request->image;
        $blog->meta_data = $request->meta_data;
        $blog->user_id = Auth::user()->id;
        $blog->save();
        return Redirect::route('blog.index')->with('success','Blog Successfully Created');
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
        $blog = Blog::findOrFail($id);

        return view('blog.edit', compact('blog'))->with('title',"Edit Blog");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\BlogRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->details = $request->details;
        $blog->tag = $request->tag;
        $blog->meta_data = $request->meta_data;
        //$blog->image = $request->image;
        $blog->save();
        return Redirect::route('blog.index')->with('success','Blog Updated Successfully');
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

        return Redirect::route('blog.index')->with('success',"Blog Successfully deleted");
    }
}
