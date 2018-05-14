<?php
// DIGUNAKAN HANYA SAAT USER BUKA WEB, LOGIN ATAU REGISTER -> di user
// controller untuk interface user saat pertama kali masuk web
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index');
    }






}
