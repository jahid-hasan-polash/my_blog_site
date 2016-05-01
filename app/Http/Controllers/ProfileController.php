<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Blog;
use App\Http\Requests\ProfileRequest;
use App\Profile;
class ProfileController extends Controller
{


    //blogger profile
    public function profile()
    {
        $blog= Blog::where('user_id',Auth::User()->id)->get();
        return view('auth.profile')
            ->with('title', 'Profile')
            ->with('blog',$blog)
            ->with('user', Auth::user());

    }






    public function update(ProfileRequest $request)
    {
        Profile::where('id','=',Auth::user()->id)->update([
                  //
        ]);
    }


}
