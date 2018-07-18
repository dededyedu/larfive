<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LarFive</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="app">
      <nav class="navbar is-transparent has-shadow" role="navigation" aria-label="dropdown navigation">
        <div class="container">
            <div class="navbar-brand">
                  <a class="navbar-item" href="{{route('home')}}">
                      <img src="{{asset('images/larfive-logo.png')}}" alt="Bulma: a modern CSS framework based on Flexbox" width="" height="28">
                  </a>
                <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>

              <div class="navbar-menu">
                <div class="navbar-start">
                  <a class="navbar-item is-tab" href="#">
                    About
                  </a>
              <div class="navbar-item has-dropdown is-hoverable">
                  <a class="navbar-link is-tab" href="#">
                    Product
                  </a>
                <div class="navbar-dropdown is-boxed">
                  <a class="navbar-item" href="#">
                      <p><span class="icon"><i class="fa fa-bars"> </i></span><strong>FATHONAH 2.0</strong> </br>  <h class="is-size-7">Core Banking System</h></p>
                  </a>
                  <a class="navbar-item" href="#">
                      <p><span class="icon"><i class="fa fa-address-book"></i></span><strong>INSAN 1.0</strong> </br>  <h class="is-size-7">Employee Management System</h></p>
                  </a>
                  <a class="navbar-item" href="#">
                      <p><span class="icon"><i class="fa fa-mobile fa-2x"></i></span><strong>BBS Mobi 2.0</strong> </br>  <h class="is-size-7">Mobile App</h></p>
                  </a>
                  <a class="navbar-item" href="#">
                      <p><span class="icon"><i class="fa fa-cog fa-spin fa-fw"></i></span><strong>PALU GADA</strong> </br>  <h class="is-size-7">Apa Lu Mau Gua Ada :D</h></p>
                  </a>
                </div>
              </div>
                  <a class="navbar-item is-tab" href="#">
                    Contact
                  </a>
                </div>

                <div class="navbar-end">
                  <div class="navbar-item has-dropdown is-hoverable" role="navigation" aria-label="dropdown navigation">

                    @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                      <a class="navbar-link" href="{{ route('login') }}">
                        <span class="icon"><i class="fa fa-sign-in m-r-10"></i></span> Login
                      </a>
                      <div class="navbar-dropdown is-boxed">
                      <a class="navbar-item" href="{{ route('register') }}">
                        <span class="icon"><i class="fa fa-handshake-o m-r-10"></i></span> Join!
                      </a>
                      </div>
                    @endauth
                </div>
            @endif




                    {{-- @if (Route::has('login'))
                      @auth
                        <div class="navbar-item has-dropdown" role="navigation" aria-label="dropdown navigation">
                          <a class="navbar-link" href="#">
                            <span class="icon"><i class="fa fa-user-circle-o m-r-10"></i></span>  Hi, deded
                          </a>
                        <div class="navbar-dropdown is-boxed">
                          <a class="navbar-item" href="#">
                            <span class="icon"><i class="fa fa-address-card m-r-10"></i></span>  Profile
                          </a>
                          <a class="navbar-item" href="#">
                            <span class="icon"><i class="fa fa-cog m-r-10"></i></span>  Setting
                          </a>
                          <hr class="navbar-devider">
                          <a class="navbar-item" href="#">
                            <span class="icon"><i class="fa fa-sign-out m-r-10"></i></span>Logout
                          </a>
                        </div>
                        </div>

                    @else

                      <a class="navbar-link" href="{{ route('login') }}">
                        <span class="icon"><i class="fa fa-sign-in m-r-10"></i></span> Login
                      </a>
                      <div class="navbar-dropdown is-boxed">
                      <a class="navbar-item" href="{{ route('register') }}">
                        <span class="icon"><i class="fa fa-handshake-o m-r-10"></i></span> Join!
                      </a>
                      </div>


                    @endauth
                    @endif --}}
                  </div>
                </div>
              </div>
        </div>
      </nav>
      <section class="hero is-info is-bold m-t-50">
              <div class="container has-text=centered">
                <div class="hero-body">
                      <img src="{{asset('images/alton2.png')}}" alt="Alton" width="" height="30px">

                      <h2 class="subtitle">
                        we are nearly in touch !
                    </h2>

                </div>

              </div>
      </section>
      <!--footer-->
      <footer class="footer">
      <div class="content has-text-centered">
        <p>
          <strong>Alton</strong> are <a href="https://bhaktisumekar.co.id">Information Technology Company</a>. The source code is licensed
          <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
          is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
        </p>
      </div>
      </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
