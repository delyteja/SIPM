@extends('layouts.app')
@section('judul')
Start Up
@endsection

@section('content')
 <div class="panel panel-default">
<div class="panel-body">
<h4><i class="fa fa-university"></i> Start Up</h4><hr>
<div class=row>
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
        <td><b>Email</b></td>
        <td><b>Nama Uasaha</b></td>
        <td><b>Kategori</b></td>
        <td><b>Tempat Usaha</b></td>
        <td><b>Biaya</b></td>
        <td><b>Foto</b></td>
        <td><b>Diskripsi</b></td>
      </tr>
    </thead>
    @foreach($posts as $p)
    <tr>
        <td>{{ $p->email }}</td>
        <td>{{ $p->namausaha }}</td>
        <td>{{ $p->kategori }}</td>
        <td>{{ $p->tempatusaha }}</td>
        <td>{{ $p->biaya }}</td>
        <td><img src="/foto/{{ $p->namafoto }}" style="width: 150px; height: 150px;"> </td>
        <td>{{ $p->diskripsi }}</td>  
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


