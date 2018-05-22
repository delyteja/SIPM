<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PemodalController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');     // 
    }
    
    public function index() {
    	return view('pemodal.index');
    }

    public function PakDani () {
    	return view('pemodal.PakDani');
    }

    public function laporan() {
    	return view('pemodal.laporan');
    }

    public function tambah_laporan()
    {
        return view('pemodal.tambah_laporan');
    }
}
