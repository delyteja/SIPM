<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Response as HttpResponse;
use App\Postingan;
class PostinganController extends Controller
{
    //

    public function index()
    {
    	return view('post');
    }

    public function create()
    {
    	return view('post');
    }

    public function store(Request $request)
    {
    	$simpan = new Postingan;
    	if (Input::hasFile('foto')) 
    	{
    		$pic = Input::file('foto');
    		$pic->move(public_path().'/foto/',$pic->getClientOriginalName());
    	
	    	$simpan->email=$request->email;
	    	$simpan->namausaha=$request->namausaha;
	    	$simpan->biaya=$request->biaya;
	    	$simpan->tempatusaha=$request->tempatusaha;
	    	
	    	$simpan->namafoto=$pic->getClientOriginalName();
			$simpan->typefoto=$pic->getClientMimeType();
	    	$simpan->diskripsi=$request->diskripsi;
    	}

    	$simpan->save();

    	
    }
          
}
