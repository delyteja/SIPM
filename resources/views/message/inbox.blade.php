@extends('template.master')

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
                <div class="panel-heading">Message - Inbox</div>

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
                                <th class="col-md-2">Sender</th>
                                <th class="col-md-5">Message</th>
                                <th class="col-md-1">Date</th>
                            </tr>
                        <tbody>
                            @foreach ($inboxs as $inbox )
                                <tr>
                                    <td class="col-md-2">{{$inbox->sender}}</td>
                                    <td class="col-md-4">{{substr($inbox->msg,0,50)}}{{strlen($inbox->msg) > 50 ? ". . .":""}}</td>
                                    <td class="col-md-2">{{$inbox->updated_at}}</td>
                                    <td class="col-md-2"><a href="{{route('showmessage',$inbox->id)}}" class="btn btn-default">View</a>
                                    <a href="{{route('deletemessage',$inbox->id)}}" class="btn btn-default">Delete</a></td>
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
