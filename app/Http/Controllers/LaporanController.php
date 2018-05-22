<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Laporan;
class LaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');     // 
    }

    public function index()
    {
        $laporan = Laporan::where('user_id',Auth::user()->id)->get();
        return view('laporan.index',compact('laporan'));
    }
    public function add()
    {
        return view('laporan.create');
    }
    public function store(Request $request)
    {
        $laporan = new Laporan;
        $laporan->user_id = Auth::user()->id;
        $laporan->aktivitas = $request->aktivitas;
        $laporan->biaya = $request->biaya;
        $laporan->keterangan = $request->keterangan;
        $laporan->save();
        return redirect('laporan/index')->with('sukses','Data laporan berhasil ditambahkan');
    }
    public function edit()
    {

    }
    public function update()
    {

    }
    public function delete($id)
    {
     $del = Laporan::findOrFail($id);
     $del->delete();
     
     return redirect('laporan/index')->with('sukses','Data laporan berhasil di hapus');
    }
}
