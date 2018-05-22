<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\User;
use App\Postingan;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Postingan::All();
        return view('admins.admin', compact('posts'));
    }
    public function manageMessage()
    {
        $message = Message::All();
         return view('admins.message')->withMessages($message);
    }
    public function manageUser()
    {
        $user = User::All();
        return view('admins.user')->withUsers($user);
    }

    public function location()
    {
        return view('admins.location2');
    }
    
    
}
