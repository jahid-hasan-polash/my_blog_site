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


    /*==================================================*/
    //View all blog list, descending order
    /*==================================================*/
    public function frontView()
    {
        $tag= Tag::all();
        $recent= Blog::take(3)->orderBy('id','desc')->get(); //recent 3 news
        $blog = Blog::orderBy('id', 'desc')->paginate(5);

//         $links = \DB::table('blog')
//            ->select(\DB::raw('YEAR(created_at) year, MONTH(created_at) month, MONTHNAME(created_at) month_name, COUNT(*) post_count'))
//            ->groupBy('year')
//            ->groupBy('month')
//            ->orderBy('year', 'desc')
//            ->orderBy('month', 'desc')
//            ->get();

        return view('front.blog', compact('blog','recent','tag'))->with('title',"SCDN Blog :||: SCDN Lab ");
    }


    /*==================================================*/
    //View blog details
    /*==================================================*/
    public function frontBlogDetails($meta_data)
    {
        try{
            $tag= Tag::all();
            $blog = Blog::where('meta_data','=',$meta_data)->first();
            $recent= Blog::take(3)->orderBy('id','desc')->get(); //recent 3 news
            return view('front.blog_details', compact('blog','recent','tag'))->with('title',"Details :||:  $meta_data" );
        }catch(Exception $e){
            return "Sorry, Page not Found ";
        }

    }


    /*==================================================*/
    //View About page
    /*==================================================*/
    public function about(){
        return view('front.about')->with('title',"Tech Blog :||: About");
    }



    /*==================================================*/
    //Getting these Blog Associate which associate with
    // selected tag
    /*==================================================*/
   public function tagAssociateBlog($tag_name){
      try{
          $tag= Tag::all();
          $recent= Blog::take(3)->orderBy('id','desc')->get(); //recent 3 news
          $blog = Blog::where('tag','=',$tag_name)->orderBy('id', 'desc')->paginate(5);
          $bing = str_slug($tag_name, "+");;
          return view('front.blog', compact('blog','recent','tag','bing'))->with('title',"Tag :||: $tag_name" );

      }
      catch(Exception $e){

          return "Sorry, Page not Found ";
      }
   }



    /*==================================================*/
    //For Search any blog with blog title or blog details
    /*==================================================*/

    public function search(){

        $search_value = \Input::get('search_value');
        try{
            $tag= Tag::all();
            $recent= Blog::take(3)->orderBy('id','desc')->get(); //recent 3 news
            $blog = Blog::where('details','like','%'.$search_value.'%')
                ->orWhere('details','like',$search_value.'%')
                ->orWhere('title','like',$search_value.'%')
                ->orWhere('title','like','%'.$search_value.'%')
                ->orderBy('id', 'desc')
                ->paginate(5);
            $bing = str_slug($search_value, "+");

            return view('front.blog', compact('blog','recent','tag','bing'))->with('title',"Search :||: $search_value");
        } catch (Exception $e) {

            return "Sorry, Page not Found ";
        }
    }





//    public function searchResult()
//    {
//        $tag= Tag::all();
//        $recent= Blog::take(3)->orderBy('id','desc')->get(); //recent 3 news
//        $blog = Blog::orderBy('id', 'desc')->paginate(5);
//
//        return view('front.blog', compact('blog','recent','tag'))->with('title',"Search Result");
//    }




    /*==================================================*/
    //Blog Archive
    /*==================================================*/

    public function archive()
    {
        try{
            $tag= Tag::all();
           // $blog = Blog::where('meta_data','=',$meta_data)->first();
            $blog = Blog::all()->groupBy(function($date) {
                return Carbon::parse($date->created_at)->formatLocalized('%B %Y');
            });

            $recent= Blog::take(3)->orderBy('id','desc')->get(); //recent 3 news

            return view('front.archive', compact('blog','recent','tag'))->with('title',"Archive :||:  SCDN Lab Blog");
        }catch(Exception $e){
            return "Sorry, Page not Found ";
        }

    }

    /*==================================================*/
    //error
    /*==================================================*/
    public function error(){
        return view('error')->with('title',' SCDN Lab :||: Unauthorized Page');
    }


}
