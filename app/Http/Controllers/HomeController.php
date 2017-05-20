<?php

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
        return view('home');
    }

    public function edit(dosen $dosen)
    {
        //
        $dsn = dosen::findorfail($dosen);
       return view ('dosen.edit',compact('dsn'));

    }

     public function update(Request $request, dosen $dosen)
    {
        //
        $dsn = dosen::findorfail($dosen);
        $dsn->update($request->all());
        return redirect('/dosen');


    }



}
