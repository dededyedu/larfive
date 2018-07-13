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
                  <a class="navbar-item is-tab" href="#">
                    Product
                  </a>
                  <a class="navbar-item is-tab" href="#">
                    Contact
                  </a>
                </div>

                <div class="navbar-end">
                  <div class="navbar-item has-dropdown is-hoverable" role="navigation" aria-label="dropdown navigation">
                    @if (Auth::guest())
                        <a class="navbar-link" href="#">
                            Login
                        </a>
                      <div class="navbar-dropdown is-boxed">
                        <a class="navbar-item" href="#">
                            Join!
                        </a>
                      </div>
                    @else
                      <div class="navbar-item has-dropdown" role="navigation" aria-label="dropdown navigation">
                        <a class="navbar-link" href="#">
                            Hi, deded
                        </a>
                      <div class="navbar-dropdown is-boxed">
                        <a class="navbar-item" href="#">
                            Profile
                        </a>
                        <a class="navbar-item" href="#">
                            Setting
                        </a>
                        <hr class="navbar-devider">
                        <a class="navbar-item" href="#">
                          Logout
                        </a>
                      </div>
                      </div>
                    @endif
                  </div>
                </div>
              </div>
        </div>
      </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
