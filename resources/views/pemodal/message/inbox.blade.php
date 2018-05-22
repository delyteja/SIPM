@extends('template.master_pemodal')

@section('judul')
Inbox
@endsection

@section('nav-right')
  @include('layouts/user_nav')
@endsection

@section('content')
<div class="container" >
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default" style="margin-bottom:350px;">
                <div class="panel-heading">Pesan - Pesan Masuk</div>

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
                                <th class="col-md-2">Pengirim</th>
                                <th class="col-md-5">Isi Pesan</th>
                                <th class="col-md-1">Tanggal</th>
                            </tr>
                        <tbody>
                            @foreach ($inboxs as $inbox )
                                <tr>
                                    <td class="col-md-2">{{$inbox->sender}}</td>
                                    <td class="col-md-4">{{substr($inbox->msg,0,50)}}{{strlen($inbox->msg) > 50 ? ". . .":""}}</td>
                                    <td class="col-md-2">{{$inbox->updated_at}}</td>
                                    <td class="col-md-2"><a href="{{route('pemodal_showmessage',$inbox->id)}}" class="btn btn-default">Lihat</a>
                                    <a href="{{route('pemodal_deletemessage',$inbox->id)}}" class="btn btn-default">Hapus</a></td>
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
