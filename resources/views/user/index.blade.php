@extends('template.master')
@section('judul')
User
@endsection

  @section('nav-right')
    @include('layouts/user_nav')
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


