@extends('template.master')

@section('judul')
Sent Message
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
