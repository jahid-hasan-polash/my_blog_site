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
         $tag= Tag::all();
         $blog = Blog::where('meta_data','=',$meta_data)->first();
         $recent= Blog::take(3)->orderBy('id','desc')->get(); //recent 3 news
         return view('front.blog_details', compact('blog','recent','tag'))->with('title',"Blog Details");
    }


    public function about(){
        return view('front.about')->with('title',"About");
    }



    public function quote(){
        $url = "http://quotesondesign.com/wp-json/posts?filter[orderby]=rand&filter[posts_per_page]=1";
        $json = file_get_contents($url);
        $datas = json_decode($json, true);

        foreach ($datas['property_data'] as $data) {



        }


    }




}
