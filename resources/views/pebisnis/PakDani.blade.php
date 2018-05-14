@extends('template.master_pebisnis')
@section('judul')
Usaha Warung Pak Dani
@endsection
@section('new-css')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
  input:placeholder-shown {
    color: black;
    font-weight: bold;
  }
</style>
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
<!-- Page Content -->
<div class="container">
<h1 class="my-4">Usaha Warung Pak Dani</h1>
</br>
<div class="row">

  <div class="col-md-6">

    <div class="card mt-4">
      <img class="card-img-top img-fluid" style="width: 85%; height: 85%;" src="{{asset ('img/warung.jpg')}}" alt="">
    </div>
    <!-- /.card -->

    <div class="card card-outline-secondary my-4">
      <div class="card-body">
        <hr>
        <a style="margin-bottom:30px;" data-toggle="modal" data-target="#modal-investasi" class="btn btn-success">Bantu Pak Dani</a>
        <a style="margin-bottom:30px; margin-left: 30px;" href="{{ route('laporanPakDani') }}" class="btn btn-primary">Lihat Laporan</a>
        <hr>
      </div>
    </div>
    <!-- /.card -->

  </div>
  <!-- /.col-md-6 -->
  <div class="col-md-6">
   
    <div class="list-group" style="text-align: left;">
      <ul style="list-style: none;">
        <li><h4><strong>Total Biaya Yang Dibutuhkan</strong></h4></li>
        <h4>Rp 2.000.000,00</h4><hr style="border-color: black; width: 35%;">
        <li><h4><strong>Dana Yang Terkumpul</strong></h4></li>
        <h4>Rp 500.000,00</h4><hr style="border-color: black; width: 35%;">
        <li><h4><strong>Progress Pendanaan</strong></h4></li>
        <div class="w3-light-grey w3-round-large">
        <div class="w3-container w3-blue w3-round-large" style="width:25%">25%</div>
        </div>
        <hr style="border-color: black; width: 35%;">
        <li><h4><strong>Detail Usaha</strong></h4></li>
        <p card-text style="text-align: justify;">
          Pak Dani membuka Usaha beraneka ragam macam kopi dan makan ringan, Pak Dani juga menjual beraneka ragam nasi, Pak Dani membutuhkan tambahan modal sebesar Rp 2.000.000,00 untuk menambah barang dagangan dan untuk membeli kursi baru untuk tempat duduk pelanggan, semua itu dilakukan Pak Dani agar usaha yang sedang dijalaninya sekarang semakin besar sehingga besar pula keuntungan yang didapat
        </p>
      </ul>
    </div>
  </div>
  <!-- /.col-md-6 -->
</div>

</div>
<!-- /.container -->
@include('pebisnis/investasi')

@endsection