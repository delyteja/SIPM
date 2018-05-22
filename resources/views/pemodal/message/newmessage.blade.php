@extends('template.master_pemodal')


@section('judul')
New Message
@endsection

@section('nav-right')
  @include('layouts/user_nav')
@endsection


@section('content')
<div class="container" style="margin-bottom:200px;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Pesan - Pesan Baru</div>

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
                    <form class="form-group" role="form" method="POST" action="{{ route('pemodal_newmessage.submit') }}">
                     {{ csrf_field() }}
                        <div class="form-group">
                            <label for="receiver">Kepada</label>
                            <div>
                                 <input id="receiver" type="email" class="form-control" name="receiver" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="msg">Isi Pesan:</label>
                            <textarea class="form-control" rows="8" id="message" name="message"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary">
                                Kirim
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
