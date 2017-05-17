<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest:admin');
	}
    public function showLoginForm()
    {
    	return view('auth.admin-login');
    }

    public function login(Request $request)
    { //  dd($request);
    	//return true;
    	// validate the form data
    
    	$this->validate($request,[
    		'email' => 'required|email',
    		'password' =>'required|min:6']);
    	// attemp to log the user in
		if (Auth::guard('admin')->attempt(['email' => $request->email,'password' => $request->password], $request->remember)) 
		{
    		return redirect()->intended(route('admin.dashboard'));
    		# code...
    	}
    	return redirect()->back()->withInput($request->only('email','remember'));
    	

    	// attemp succesful, then reidrect to their intended location

    	// if successful, then redirect back to the login with the form data
    }
}
