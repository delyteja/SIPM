@extends('template.master_pemodal')
@section('judul')
Laporan Pendanaan
@endsection

@section('nav-right')
  @include('layouts/user_nav')
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


