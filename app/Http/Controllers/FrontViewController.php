<?php

namespace App\Http\Controllers;
use App\Tag;
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
        $tag= Tag::all();
        $recent= Blog::take(3)->orderBy('id','desc')->get(); //recent 3 news
        $blog = Blog::orderBy('id', 'desc')->paginate(5);
        return view('front.blog', compact('blog','recent','tag'))->with('title',"Blog");
    }


    /**
     * @return $this
     */
    public function frontBlogDetails($meta_data)
    {
        try{
            $tag= Tag::all();
            $blog = Blog::where('meta_data','=',$meta_data)->first();
            $recent= Blog::take(3)->orderBy('id','desc')->get(); //recent 3 news
            return view('front.blog_details', compact('blog','recent','tag'))->with('title',"Blog Details");
        }catch(Exception $e){
            return "Sorry, Page not Found ";
        }

    }


    public function about(){
        return view('front.about')->with('title',"About");
    }



   public function tagAssociateBlog($tag_name){
      try{
          $tag= Tag::all();
          $recent= Blog::take(3)->orderBy('id','desc')->get(); //recent 3 news
          $blog = Blog::where('tag','=',$tag_name)->orderBy('id', 'desc')->paginate(5);
          return view('front.blog', compact('blog','recent','tag'))->with('title',"Blog");
      }
      catch(Exception $e){

          return "Sorry, Page not Found ";
      }
   }







}
