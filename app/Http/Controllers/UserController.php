<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class UserController extends Controller
{
    
     public function profile()
    {
        return view('profil',array('user' => Auth::user() ));
    }

    public function update(Request $request)
    {
    	if ($request->hasFile('avatar')) 
    	{
    		$av = $request->file('avatar');
    		$filename = time(). '.' . $av->getClientOriginalExtension();
    		Image::make($av)->resize(300,300)->save(public_path('/avatar/'.$filename));
    		$user = Auth::user();
    		$user->avatar= $filename;
    		$user->save();

    		//return view('profil',array('user' => Auth::user() ));
    		return view('home');
    	}
    	
    }
}
