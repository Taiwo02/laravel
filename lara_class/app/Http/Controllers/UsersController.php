<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\User;
use Post;

class UsersController extends Controller
{
    public function users(){
        $posts= Post::orderBy('tittle','asc')->get();
    }
   public function profile(){
       return view('profile',array('user'=>Auth::user()));
   }
   public function update_avatar(Request $request){
     if ($request->hasFile('avatar')) {
          $avatar=$request->file('avatar');
          $fileName=time().'.'.$avatar->getClientOriginalExtension();
          Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'.$fileName));
          $user=Auth::user();
          $user->avatar=$fileName;
          $user->save();
       return view('profile',array('user'=>Auth::user()));

       }
   }
   public function all_users()
    {
        // $posts= Auth::all();
        // $users= User::orderBy('created_at','asc')->paginate(3);
        $users= User::orderBy('created_at','asc')->get();
        // $users= User::find($id);
        return view('users')->with('users',$users);
       
    }
}
