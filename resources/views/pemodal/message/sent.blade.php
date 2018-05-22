@extends('template.master_pemodal')

@section('judul')
Sent Message
@endsection

@section('nav-right')
  @include('layouts/user_nav')
@endsection

@section('content')
<div class="container" style="margin-bottom:350px;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Pesan - Pesan Terkirim</div>

                <div class="panel-body">
                    <button type="button" class="btn btn-default" aria-label="Left Align" onclick="window.location.href='{{ route('pemodal_newmessage') }}'">
                      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  Pesan Baru 
                    </button>
                    <button type="button" class="btn btn-default" aria-label="Left Align" onclick="window.location.href='{{ route('pemodal_inbox') }}'">
                      <span class="glyphicon glyphicon-save" aria-hidden="true"></span>  Pesan Masuk
                    </button>
                    <button type="button" class="btn btn-default" aria-label="Left Align" onclick="window.location.href='{{ route('pemodal_sent') }}'">
                      <span class="glyphicon glyphicon-open" aria-hidden="true"></span>  Pesan Terkirim
                    </button>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                            <tr>
                                <th class="col-md-2">Kepada</th>
                                <th class="col-md-5">Isi Pesan</th>
                                <th class="col-md-1">Tanggal</th>
                            </tr>
                        <tbody>
                            @foreach ($sents as $sent )
                                <tr>
                                    <td class="col-md-2">{{$sent->receiver}}</td>
                                    <td class="col-md-4">{{substr($sent->msg,0,50)}}{{strlen($sent->msg) > 50 ? ". . .":""}}</td>
                                    <td class="col-md-2">{{$sent->updated_at}}</td>
                                    <td class="col-md-2"><a href="{{route('pemodal_showmessage',$sent->id)}}" class="btn btn-default">Lihat</a>
                                    <a href="{{route('pemodal_deletemessage',$sent->id)}}" class="btn btn-default">Hapus</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                        </thead>
                      </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
