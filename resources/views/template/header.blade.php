@include('template.css')
<nav class="navbar navbar-inverse" style="background-color:#00384d; margin-top:-60px">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ URL::to('/')}}" style="color:white"><b>SIPM</b></a> 
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{ URL::to('/')}}" style="color:white; font-size:17px;"><b>Beranda</b></a></li>
      <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown"  href="{{ URL::to('')}}" style="color:white; font-size:17px;"><b>Kategori</b></a>
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" style="color:white">Start up</a></li>
            <li><a href="#" style="color:white">Wirausaha Mandiri</a></li>
          </ul>
      </li>
      <li><a href="{{ URL::to('/index')}}" style="color:white; font-size:17px;"><b>Pengajuan Bisnis</b></a></li>
      <li><a href="{{ URL::to('laporan/index')}}" style="color:white; font-size:17px;"><b>Laporan</b></a></li>
      <li><a href="{{ route('inbox') }}" style="color:white; font-size:17px;"><b>Pesan</b></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      @yield('nav-right')
   </ul>
 </div>
</nav>

