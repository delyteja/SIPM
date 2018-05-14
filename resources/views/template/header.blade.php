@include('template.css')
<nav class="navbar navbar-inverse" style="background-color: #00384d; margin-top:-60px">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ URL::to('/')}}" style="color:white"><b>SIPM</b></a> 
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{ URL::to('/')}}" style="color:white">Beranda</a></li>
      <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown"  href="{{ URL::to('')}}" style="color:white">Kategori</a>
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" style="color:white">Start up</a></li>
            <li><a href="#" style="color:white">Wirausaha Mandiri</a></li>
          </ul>
      </li>
      <li><a href="{{ URL::to('/index')}}" style="color:white">Pengajuan Bisnis</a></li>
      <li><a href="{{ URL::to('/laporan')}}" style="color:white">Laporan</a></li>
      <li><a href="{{ route('inbox') }}" style="color:white">Pesan</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      @yield('nav-right')
   </ul>
 </div>
</nav>

