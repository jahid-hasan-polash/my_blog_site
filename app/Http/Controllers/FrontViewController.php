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
class FrontViewController extends Controller
{


    /**
     * home view
     * @return $this
     */
    public function frontView()
    {
        $recent= Blog::take(3)->orderBy('id','desc')->get(); //recent 3 news
        $blog = Blog::orderBy('id', 'desc')->paginate(5);
        return view('front.blog', compact('blog','recent'))->with('title',"Blog");
    }


    /**
     * @return $this
     */
    public function frontBlogDetails($id)
    {
         $blog = Blog::findOrFail($id);
         $recent= Blog::take(3)->orderBy('id','desc')->get(); //recent 3 news
         return view('front.blog_details', compact('blog','recent'))->with('title',"Blog Details");
    }


    public function about(){
        return view('front.about')->with('title',"About");
    }




}
