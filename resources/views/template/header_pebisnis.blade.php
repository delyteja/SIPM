@include('template.css')
<nav class="navbar navbar-inverse" style="background-color: #00384d; margin-top:-60px">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ URL::to('/pebisnis')}}" style="color:white"><b>SIPM</b></a> 
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{ URL::to('/pebisnis')}}" style="color:white">Beranda</a></li>
      <li><a href="{{ route('pebisnis_inbox') }}" style="color:white">Pesan</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      @yield('nav-right')
   </ul>
 </div>
</nav>

