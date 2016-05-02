<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Blog;
use App\Http\Requests\ProfileRequest;
use App\Profile;
use Intervention\Image\ImageManagerStatic as Image;
use App\Http\Requests\PhotoRequest;
class ProfileController extends Controller
{


    //blogger profile
    public function profile()
    {
        $profile =Profile::where('user_id',Auth::user()->id)->first();
        $blog= Blog::where('user_id',Auth::User()->id)->orderBy('id','desc')->get();
        return view('auth.profile')
            ->with('title', 'Profile')
            ->with('blog',$blog)
            ->with('user', Auth::user())
            ->with('profile', $profile);


    }






    public function update(ProfileRequest $request)
    {
        try{
            Profile::where('id','=',Auth::user()->id)->update([

                'phone'=>$request->phone,
                'platform'=>$request->platform,
                'position'=>$request->position,
                'organization'=>$request->organization,
                'fb_user'=>$request->fb_user,
                'twitter_user'=>$request->twitter_user,
                'github_user'=>$request->github_user,
                'about_me'=>$request->about_me,

            ]);

            return redirect()->back()->with('title', 'Profile')->with('success','Profile Updated Successfully');

        }catch(Exception $e){
            return redirect()->back()->with('error','Something went wrong, Please try Again.');
        }

    }




    public function photoUpload(PhotoRequest $request){


        if ($request->hasFile('image'))
        {
             $image = $request->file('image');


//            //deleting previous file
//            $prev_avatar_url = Auth::user()->profiles->img_url;
//            if($prev_avatar_url != 'upload/profile/default/avatar.jpg'){
//                if (\File::exists($prev_avatar_url)) {
//                    \File::delete($prev_avatar_url);
//                }
//                $prev_icon_url = Auth::user()->profiles->thumb_url;
//                if (\File::exists($prev_icon_url)) {
//                    \File::delete($prev_icon_url);
//                }
//            }



            $fullImage = 'upload/profile/avatar/avatar-'. strtotime(date('Y-m-d-H-i-s')) . '.' . $image->getClientOriginalExtension();
            $thumbnail = 'upload/profile/icon/icon-'  . strtotime(date('Y-m-d-H-i-s')) . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(200, 200)->save(public_path($fullImage));
            Image::make($image)->resize(45, 45)->save(public_path($thumbnail));



            $profile = Profile::where('user_id',Auth::user()->id)
                        ->update(array(
                            'img_url' => $fullImage,
                            'thumb_url' => $thumbnail
                        ));

            if($profile){
                return redirect()->back()->with('success','Avatar updated successfully');
            }else{
                return redirect()->back()->with('error','Something went wrong');
            }

        }else{

            return redirect()->back()->with(['error'=>'Image could not be uploaded']);
        }
    }

















}
