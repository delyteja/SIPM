@extends('template.master')
@section('judul')
Home
@endsection

@section('new-css')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@endsection

@section('nav-right')
  @if (Auth::guest())
    <li><a href="{{ URL::to('register')}}" style="color:white; font-size:17px;"><i class="fa fa-registered" aria-hidden="true" style="font-size:15px;"></i>Register</a></li>
    <li><a href="{{ URL::to('login')}}" style="color:white; font-size:17px;"> <i class="fa fa-sign-in" aria-hidden="true"></i>Login</a></li>
  @else
      @include('layouts/user_nav')
  @endif
@endsection

@section('content')
<ul class="nav nav-tabs" role="tablist">
  <li role="presentation" class="active"><a href="#newpost" aria-controls="newpost" role="tab" data-toggle="tab">Postingan Terbaru</a></li>
  <li role="presentation"><a href="#favourites" aria-controls="favourites" role="tab" data-toggle="tab">Favorit</a></li>
</ul>
<!-- <br> -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="newpost">      
    <div class="row text-center">
      <h2><p>Postingan Terbaru</p></h2>
      <div class="row">
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="{{asset ('img/warung.jpg')}}" alt="Buku" width="400" height="200">
            <a href="{{ URL::to('/PakDani')}}"><p><strong>Usaha Warung Pak Dani</strong></p></a>
            <div class="w3-light-grey w3-round-large">
              <div class="w3-container w3-blue w3-round-large" style="width:25%">25%</div>
            </div>
            <p style="margin-top:10px;"><b>Terkumpul Rp 500.000,00/Rp 2000.000,00</b></p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="{{asset ('img/buku.jpg')}}" alt="Rabbit" width="400" height="300">
            <p><strong>Usaha Buku Pak Luqman</strong></p>
            <div class="w3-light-grey w3-round-large">
              <div class="w3-container w3-blue w3-round-large" style="width:50%">50%</div>
            </div>
            <p style="margin-top:10px;"><b>Terkumpul Rp 1.500.000,00/Rp 3.000.000,00</b></p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="{{asset ('img/buah1.jpg')}}" alt="Buah" width="400" height="400">
            <p><strong>Usaha Buah Bu Hanifa</strong></p>
            <div class="w3-light-grey w3-round-large">
              <div class="w3-container w3-blue w3-round-large" style="width:33%">33%</div>
            </div>
            <p style="margin-top:10px;"><b>Terkumpul Rp 500.000,00/Rp 1.500.000,00</b></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="{{asset ('img/lele.jpg')}}" alt="Bisnis" width="400" height="300">
            <p><strong>Usaha Ternak Lele Pak Fajar</strong></p>
            <div class="w3-light-grey w3-round-large">
              <div class="w3-container w3-blue w3-round-large" style="width:25%">25%</div>
            </div>
            <p style="margin-top:10px;"><b>Terkumpul Rp 500.000,00/Rp 2000.000,00</b></p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="{{asset ('img/puyuh.jpg')}}" alt="Technology" width="400" height="300">
            <p><strong>Uasaha Ternak Burung Puyuh Pak Ali</strong></p>
            <div class="w3-light-grey w3-round-large">
              <div class="w3-container w3-blue w3-round-large" style="width:25%">25%</div>
            </div>
            <p style="margin-top:10px;"><b>Terkumpul Rp 500.000,00/Rp 2000.000,00</b></p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="{{asset ('img/plant.jpg')}}" alt="Berkebun" width="400" height="300">
            <p><strong>Usaha Bibit Durian Pak Andy</strong></p>
            <div class="w3-light-grey w3-round-large">
              <div class="w3-container w3-blue w3-round-large" style="width:25%">25%</div>
            </div>
            <p style="margin-top:10px;"><b>Terkumpul Rp 500.000,00/Rp 2000.000,00</b></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div role="tabpanel" class="tab-pane" id="favourites">
    <div class="row text-center">
      <h2><p>Postingan Terfavorit</p></h2>
      <div class="row">
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="{{asset ('img/buku.jpg')}}" alt="Buku" width="400" height="300">
            <p><strong>Buku Murah</strong></p>
            <p>Jual Buku Murah</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="{{asset ('img/kelinci.jpg')}}" alt="Rabbit" width="400" height="300">
            <p><strong><a href="#">Rabbit</a></strong></p>
            <p>This is Rabbit</p>
          </div>
        </div>        
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="{{asset ('img/technology.jpg')}}" alt="Technology" width="400" height="300">
            <p><a href="#"><strong>Technology</strong></a></p>
            <p>Technology</p>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>


@endsection

@section('new-js')
@endsection