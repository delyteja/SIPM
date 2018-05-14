@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Manage Message</div>

                <div class="panel-body">
                    <button type="button" class="btn btn-default" aria-label="Left Align" onclick="window.location.href='{{ route('admin.user') }}'">
                      <span class="glyphicon glyphicon-user" aria-hidden="true"></span>  Manage User
                    </button>
                    <button type="button" class="btn btn-default" aria-label="Left Align" onclick="window.location.href='{{ route('admin.message') }}'">
                      <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  Manage Message
                    </button>
                    <button type="button" class="btn btn-default" aria-label="Left Align" onclick="window.location.href='#'">
                      <span class="glyphicon glyphicon-file" aria-hidden="true"></span>  Manage Post
                    </button>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                            <tr>
                                <th class="col-md-2">Name</th>
                                <th class="col-md-2">Email</th>                         
                                <th class="col-md-2">Password</th>
                            </tr>
                        <tbody>
                            @foreach ($users as $user )
                                <tr>
                                    <td class="col-md-2">{{$user->name}}</td>
                                    <td class="col-md-2">{{$user->email}}</td>
                                    <td class="col-md-2">{{$user->password}}</td>
                                    <td class="col-md-2">
                                    <a href="{{route('admin.deleteuser',$user->id)}}" class="btn btn-default">Delete</a></td>
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
