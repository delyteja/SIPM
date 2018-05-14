<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Postingan;
use App\User;
use Image;
class UserController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');     // 
    }

     public function index()
    {   
         $posts = Postingan::All()->where('email',Auth::user()->email);
        return view('user.index', compact('posts'));
    }

    public function profile()
    {
         return view('profil.index',array('user'=>Auth::user()) );
    }

     public function startup()
    {
          $posts = Postingan::All()->where('kategori','like','Start Up');
        return view('user.startup', compact('posts'));
    }

     public function wirausaha()
    {
         $posts = Postingan::All()->where('kategori','like','Wirausaha');
        return view('user.wirausaha', compact('posts'));
    }
    public function PakDani()
    {
        return view('user.Pdani');
    }
    public function laporan()
    {
        return view('user.laporan');
    }

    public function work()
    {
        return view('user.work');
    }

    public function true_index()
    {
        return view('index');
    }



    public function update_avatar(Request $request)
    {
        if ($request->hasFile('avatar')) 
        {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('/avatar/'.$filename));
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
         return view('profil.index',array('user'=>Auth::user()) );

    }
   

}
