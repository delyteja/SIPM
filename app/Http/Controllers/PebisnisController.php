<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PebisnisController extends Controller
{
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
