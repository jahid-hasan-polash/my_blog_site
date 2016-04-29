<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Auth;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    //List all Blogger
    public function index()
    {
        $user = User::all();

        return view('user.index', compact('user'))
            ->with('title', 'All Blogger List');

    }


    //create blogger/ apply for blogger
    public function create()
    {
        return view('user.create')
            ->with('title', 'Apply For Blogger');
    }


    //store blogger data
    public function store(Request $request)
    {
        $rules =[
            'name'                  => 'required',
            'email'                 => 'required|unique:users,email',
            'password'              => 'required|confirmed',
            'password_confirmation' => 'required'
        ];
        $data = $request->all();

        $validation = Validator::make($data,$rules);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
        }else{
            $user = new User;
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->password = Hash::make($data['password']);

            if($user->save()){
                Auth::logout();
                return redirect()->route('login')
                            ->with('success','Registered successfully. Sign In Now.');
            }else{
                return redirect()->route('dashboard')
                            ->with('error',"Something went wrong.Please Try again.");
            }
        }
    }


    //blogger profile
    public function profile()
    {
         return view('auth.profile')
                    ->with('title', 'Profile')->with('user', Auth::user());
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        User::destroy($id);

        return redirect()->route('user.index')->with('success', "User Successfully deleted");
    }
}
