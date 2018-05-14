@extends('template.master')
@section('judul')
User
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
<div class="panel-body" style="margin-bottom:150px;">
<h4><i class="fa fa-university"></i> Postingan Saya</h4><hr>
<div class=row>
    <div class="col-md-6">
        <a href="{{url('createpostingan')}}" class="btn btn-primary">
        <i class="fa fa-plus-circle"></i> Tambah</a>
    </div>
  <div class="col-md-2">
  </div>
    <div class="col-md-4"></div>
</div>
<br>

<!-- 'email', 'namausaha','biaya','tempatusaha','namafoto','typefoto','diskripsi' -->

@if($posts->count())
<div class="table-responsive">
<table class="table table-bordered table-striped 
                  table-hover table-condensed tfix">
    <thead align="center">
      <tr>
        <td><b>Nama Uasaha</b></td>
        <td><b>Kategori</b></td>
        <td><b>Tempat Usaha</b></td>
        <td><b>Biaya</b></td>
        <td><b>Foto</b></td>
        <td><b>Diskripsi</b></td>
        <td colspan="2"><b>Edit</b></td>
      </tr>
    </thead>
    @foreach($posts as $p)
    <tr>
        <td>{{ $p->namausaha }}</td>
        <td>{{ $p->kategori }}</td>
        <td>{{ $p->tempatusaha }}</td>
        <td>{{ $p->biaya }}</td>
        <td><img src="/foto/{{ $p->namafoto }}" style="width: 150px; height: 150px;"> </td>
        <td>{{ $p->diskripsi }}</td>
        <td align="center" width="30px">
          <a href="/postingan/{{$p->id}}" class="btn btn-warning btn-sm" 
          role="button"><i class="fa fa-pencil-square"></i> Edit</a>
        </td>
        <td align="center" width="30px">
          <a href="/delpostingan/{{$p->id}}/pilihan/1" class="btn btn-sm btn-danger delete-btn" 
          role="button"><i class="fa fa-times-circle"></i> delete</a>
        </td>       
    </tr>
    @endforeach
</table>

 

</div>

@else
<div class="alert alert-warning">
  <i class="fa fa-exclamation-triangle"></i> Postingan Kososng
</div>
@endif
</div>
</div>
@endsection


