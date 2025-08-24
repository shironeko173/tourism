
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="/">We Code!</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="/assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Learn</a></li>
          <li><a class="nav-link scrollto" href="#recommended">Recommended</a></li>
          <li><a class="nav-link scrollto " href="#recently">Recently</a></li>
          
          @auth
            <li class="dropdown"><a href="">{{auth()->user()->name}}</a>
              @if (Auth::user()->role == "admin")
                  <ul>
                    <li><a href="/dashboard">Dasboard</a></li>
                    <li><a href="#">ini Admin</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">Log Out</a></li>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                  </ul>  
              @else
                  <ul>
                    <li><a href="#">Pengaturan Akun</a></li>
                    <li><a href="#">Whishlist Materi</a></li>
                    <li><a href="#">History</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">Log Out</a></li>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                  </ul>  
              @endif
            </li>
          @else
            <li><a class="getstarted" href="../login">Login</a></li>
          @endauth


        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>