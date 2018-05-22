<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
  
  <title>@yield('judul')</title>

  @include('template.css')
  @yield('new-css')
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="icon" href="{{asset ('img/favicon.png')}}" type="image/png">
</head>
<body>
@include('template.header')

@if (session()->has('sukses'))
            <div class="container">
                <div class="alert alert-success col-md-11">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ session()->get('sukses') }}
                </div>
            </div>
@endif
  <!-- Thumbnail -->
  <div class="container text-center bg-grey">
    <div class="row">
      @yield('content')
    </div>    
  </div>
</div>

@include('template.footer')
@include('template.js')
@yield('new-js')
</body>
</html>