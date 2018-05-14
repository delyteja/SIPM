@extends('template.master')

@section('judul')
Home
@endsection

@section('new-css')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@endsection
@section('nav-right')
    <li><a href="{{ URL::to('register')}}" style="color:white"><i class="fa fa-registered" aria-hidden="true"></i>Register</a></li>
     <li><a href="{{ URL::to('login')}}" style="color:white"> <i class="fa fa-sign-in" aria-hidden="true"></i>Login</a></li>
@endsection

@section('content')
<ul class="nav nav-tabs" role="tablist">
  <li role="presentation" class="active"><a href="#newpost" aria-controls="newpost" role="tab" data-toggle="tab">New Post</a></li>
  <li role="presentation"><a href="#favourites" aria-controls="favourites" role="tab" data-toggle="tab">Favourites</a></li>
</ul>
<!-- <br> -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="newpost">      
    <div class="row text-center">
      <h2><p>Postingan Terbaru</p></h2>
      <div class="row">
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="{{asset ('img/buku.jpg')}}" alt="Buku" width="400" height="200">
            <p><strong>Buku Murah</strong></p>
            <div class="w3-light-grey w3-round-large">
              <div class="w3-container w3-blue w3-round-large" style="width:25%">25%</div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="{{asset ('img/kelinci.jpg')}}" alt="Rabbit" width="400" height="300">
            <p><strong>Ternak kelinci</strong></p>
            <div class="w3-light-grey w3-round-large">
              <div class="w3-container w3-blue w3-round-large" style="width:25%">25%</div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="{{asset ('img/buah.jpg')}}" alt="Buah" width="400" height="300">
            <p><strong>Bisnis Buah</strong></p>
            <div class="w3-light-grey w3-round-large">
              <div class="w3-container w3-blue w3-round-large" style="width:25%">25%</div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="{{asset ('img/depan.jpg')}}" alt="Bisnis" width="400" height="300">
            <p><strong>Mari Berbisnis</strong></p>
            <div class="w3-light-grey w3-round-large">
              <div class="w3-container w3-blue w3-round-large" style="width:25%">25%</div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="{{asset ('img/technology.jpg')}}" alt="Technology" width="400" height="300">
            <p><strong>Start Up</strong></p>
            <div class="w3-light-grey w3-round-large">
              <div class="w3-container w3-blue w3-round-large" style="width:25%">25%</div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="{{asset ('img/plant.jpg')}}" alt="Berkebun" width="400" height="300">
            <p><strong>Usaha Pertanian</strong></p>
            <div class="w3-light-grey w3-round-large">
              <div class="w3-container w3-blue w3-round-large" style="width:25%">25%</div>
            </div>
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