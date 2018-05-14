<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PebisnisController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');     // 
    }
    
    public function index() {
    	return view('pebisnis.index');
    }

    public function PakDani () {
    	return view('pebisnis.PakDani');
    }

    public function laporan() {
    	return view('pebisnis.laporan');
    }
}
