@extends('template.master')

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
                <div class="panel-heading">Message - Sent</div>

                <div class="panel-body">
                    <button type="button" class="btn btn-default" aria-label="Left Align" onclick="window.location.href='{{ route('newmessage') }}'">
                      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  New Message 
                    </button>
                    <button type="button" class="btn btn-default" aria-label="Left Align" onclick="window.location.href='{{ route('inbox') }}'">
                      <span class="glyphicon glyphicon-save" aria-hidden="true"></span>  Inbox Message
                    </button>
                    <button type="button" class="btn btn-default" aria-label="Left Align" onclick="window.location.href='{{ route('sent') }}'">
                      <span class="glyphicon glyphicon-open" aria-hidden="true"></span>  Sent Message
                    </button>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                            <tr>
                                <th class="col-md-2">To</th>
                                <th class="col-md-5">Message</th>
                                <th class="col-md-1">Date</th>
                            </tr>
                        <tbody>
                            @foreach ($sents as $sent )
                                <tr>
                                    <td class="col-md-2">{{$sent->receiver}}</td>
                                    <td class="col-md-4">{{substr($sent->msg,0,50)}}{{strlen($sent->msg) > 50 ? ". . .":""}}</td>
                                    <td class="col-md-2">{{$sent->updated_at}}</td>
                                    <td class="col-md-2"><a href="{{route('showmessage',$sent->id)}}" class="btn btn-default">View</a>
                                    <a href="{{route('deletemessage',$sent->id)}}" class="btn btn-default">Delete</a></td>
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
