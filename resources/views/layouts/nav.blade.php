<!-- Topbar -->
<nav class="topbar topbar-inverse topbar-expand-md topbar-sticky">
  <div class="container">

    <div class="topbar-left">
      <button class="topbar-toggler">&#9776;</button>
      <a class="topbar-brand" href="/">
        <img class="logo-default" src="{{ asset('assets/img/brand.png') }}" alt="logo">
        <img class="logo-inverse" src="{{ asset('assets/img/brand.png') }}" alt="logo">
      </a>
    </div>


    <div class="topbar-right">
      <ul class="topbar-nav nav">
        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('paper.index') }}">Past papers <i class="fa fa-caret-down"></i></a>
          <div class="nav-submenu">
          @foreach ($subjects as $s)
            <a class="nav-link" href="{{ route('paper.index',['subject'=>$s->slug]) }}">{{ $s->name }}</a>
            @endforeach
          </div>

        </li>

        <li class="nav-item">
          <a class="nav-link" href="/events">Events </i></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/about">About </a>

        </li>

        <li class="nav-item">
          <a class="nav-link " href="/contact">Contact </a>

        </li>

        <li class="nav-item">
          <a class="nav-link" href="/faq">F&Q </i></a>

        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                @guest
                <li class="nav-item"><a href="{{ route('register') }}">Sign Up<i class="fas fa-sign-in-alt"></i></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li class="nav-link"><a href="{{ route('login') }}">Login</a></li>
                @else
                <li class="nav-link">
                    <a href="{{ route('users.edit') }}"><i class="fas fa-user"></i>My Profile</a>
                </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <li class="nav-link">
                    <a  href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                </li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                @endguest

                </a>
            </li>


      </ul>
    </div>

  </div>
</nav>
<!-- END Topbar -->
