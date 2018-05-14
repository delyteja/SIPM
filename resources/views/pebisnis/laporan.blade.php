@extends('template.master_pebisnis')
@section('judul')
Laporan Pendanaan
@endsection

@section('nav-right')
  <div style="display:inline-block; margin-left:-40px;">
    <h3 style="color:white; "><b>Selamat Datang, {{ Auth::user()->name }}</b></h3>
  </div>
  <div style="display:inline-block; margin-right:60px;">
    <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position: relative; padding-left: 10px ">
      <img src="/avatar/{{Auth::user()->avatar}}" style="width: 32px; height: 32px; position: absolute; top: 10px; left: 10px; border-radius: 50% "> 
           <span class="caret"></span>
      </a>
      <ul class="dropdown-menu" role="menu">
          <li>
          <a href="{{ url('/profile')}}"><i class="fa fa-btn fa-user"></i> Profile</a>
              <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fa fa-btn fa-sign-out"></i>
                  Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
          </li>
      </ul>
    </li>
  </div>
@endsection


@section('content')
 <div class="panel panel-default">
<div class="panel-body" style="margin-bottom:200px;">
<h4><i class="fa fa-university"></i> Laporan Pendanaan Usaha Warung Pak Dani</h4><hr>
<br>

<div class="table-responsive">
<table class="table table-bordered table-striped 
                  table-hover table-condensed tfix">
    <thead align="center">
      <tr>
        <td><b>No</b></td>
        <td><b>Aktivitas</b></td>
        <td><b>Biaya Yang Dikeluarkan</b></td>
        <td><b>Keterangan</b></td>
      </tr>
    </thead>
    <tr>
        <td>1</td>
        <td>Beli Kursi Kayu</td>
        <td>Rp500000,00</td>
        <td>Pembelian sebanyak dua buah</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Beli Aneka Macam Kopi</td>
        <td>Rp200000,00</td>
        <td>Pembelian sebanyak 10 pack</td>
    </tr>
</table>

</div>
</div>
</div>
@endsection


