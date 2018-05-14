<div style="display:inline-block; margin-left:-40px;">
    <h3 style="color:white; "><b>Selamat Datang, {{ Auth::user()->name }}</b></h3>
  </div>
  <div style="display:inline-block; margin-right:60px;">
    <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position: relative; padding-left: 10px ">
      <img src="/avatar/{{Auth::user()->avatar}}" style="width: 32px; height: 32px; position: absolute; top: 10px; left: 10px; border-radius: 50% "> 
           <span class="caret"></span>
      </a>
      <ul class="dropdown-menu" role="menu" style="background-color: black;">
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