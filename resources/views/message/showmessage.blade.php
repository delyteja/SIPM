@extends('template.master')

@section('judul')
Show Message
@endsection

@section('nav-right')
  @include('layouts/user_nav')
@endsection

@section('content')
<div class="container" style="margin-bottom:250px;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Message - Sent Id : {{$shows->id}}</div>

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
                                <th class="col-md-2">From</th>
                                <th class="col-md-2">To</th>                         
                                <th class="col-md-5">Message</th>
                                <th class="col-md-1">Date</th>
                            </tr>
                        <tbody>
                           
                                <tr>
                                    <td class="col-md-2">{{$shows->sender}}</td>
                                    <td class="col-md-2">{{$shows->receiver}}</td>
                                    <td class="col-md-4">{{$shows->msg}}</td>
                                    <td class="col-md-2">{{$shows->updated_at}}</td>
                                </tr>
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
