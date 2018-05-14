@extends('template.master')
@section('judul')
Usaha Warung Pak Dani
@endsection
@section('new-css')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
<div class="row">

  <div class="col-lg-3">
   
    <div class="list-group">
      <h3>Total Biaya Yang Dibutuhkan:Rp 2000000,00</h3>
      <h3>Progress Pendanaan:</h3>
      <div class="w3-light-grey w3-round-large">
      <div class="w3-container w3-blue w3-round-large" style="width:25%">25%</div>
    </div>
    <p style="margin-top:10px;"><b>Terkumpul Rp 500.000,00/Rp 2000.000,00</b></p>

    </div>
  </div>
  <!-- /.col-lg-3 -->

  <div class="col-lg-9">

    <div class="card mt-4">
      <img class="card-img-top img-fluid" style="width: 900px; height: 400px;" src="{{asset ('img/warung.jpg')}}" alt="">
      <div class="card-body">
        <h3 class="card-title">Deatil Usaha</h3>
        <p class="card-text">Pak Dani membuka Usaha beraneka ragam macam kopi dan makan ringan, Pak Dani juga menjual beraneka ragam nasi, Pak Dani membutuhkan tambahan modal 
        sebesar Rp 2000000,00 untuk menambah barang dagangan dan untuk membeli kursi baru untuk tempat duduk pelanggan, semua itu dilakukan Pak Dani array_merge_recursive
        usaha yang sedang dijalaninya sekarang semakin besar sehingga besar pula keuntungan yang didapat</p>
      </div>
    </div>
    <!-- /.card -->

    <div class="card card-outline-secondary my-4">
      <div class="card-body">
        <hr>
        <a style="margin-bottom:30px;"href="#" class="btn btn-success">Bantu Pak Dani</a>
        <hr>
      </div>
    </div>
    <!-- /.card -->

  </div>
  <!-- /.col-lg-9 -->

</div>

</div>
<!-- /.container -->


@endsection