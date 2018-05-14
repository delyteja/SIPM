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
      
         $P = Postingan::paginate(100);   
         return view('postingan.home', compact('P'));
    }

    public function create()
    {
    	return view('postingan.create');
    }

    public function store(Request $request)
    {
    	$simpan = new Postingan;
    	if (Input::hasFile('foto')) 
    	{   $pic = Input::file('foto');
            $simpan->namafoto = time() . '.' .$pic->getClientOriginalName();
            
            Image::make($pic)->resize(300,300)->save(public_path('/foto/'.$simpan->namafoto));
            $simpan->typefoto=$pic->getClientMimeType();
    		
  
    	
	    	$simpan->email=$request->email;
            $simpan->kategori=$request->kategori;
	    	$simpan->namausaha=$request->namausaha;
	    	$simpan->biaya=$request->biaya;
	    	$simpan->tempatusaha=$request->tempatusaha;
	    	
	    	//$simpan->namafoto=$pic->getClientOriginalName();
			$simpan->typefoto=$pic->getClientMimeType();
	    	$simpan->diskripsi=$request->diskripsi;
    	}

    	$simpan->save();
        //return view('user.index');
        return redirect('/index');

    	
    }

    public function edit($id)
    {
        //
        $posts = Postingan::findorfail($id);
       return view ('postingan.edit',compact('posts'));

    }

    public function update(Request $request,$id)
    {  //$temp=Postingan::where('id','like','$id');
       $posts = Postingan::findorfail($id);
       // $tempnama=$posts->namafoto;
       // $temptipe=$posts->typefoto;
        
        if (Input::hasFile('foto')) 
        {
            $pic = Input::file('foto');
            $posts->namafoto= time() . '.' .$pic->getClientOriginalName();
            
            //$pic->move(public_path().'/foto/'.$pic->getClientOriginalName());
            Image::make($pic)->resize(300,300)->save(public_path('/foto/'.$posts->namafoto));
            $posts->typefoto=$pic->getClientMimeType();
        }
    
            $posts->email=$request->email;
            $posts->namausaha=$request->namausaha;
            $posts->biaya=$request->biaya;
            $posts->tempatusaha=$request->tempatusaha;
            $posts->diskripsi=$request->diskripsi;
            $posts->kategori=$request->kategori;

            $posts->update($request->all());
            return redirect('/index');

       
    }

    
    public function delete($id,$token)
    {
        $del = Postingan::findorfail($id);
        $del->delete();

        switch ($token) {
            case '1':
                return redirect('index') ;
                break;
            
            case '2':
                return redirect('admin') ;
                break;
        }
        
    }


          
}
