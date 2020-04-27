<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>--}}
{{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>--}}
<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    {{--    <link href="{{ asset('css/newStyle.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<!-- loader symbol function with java script-->
<div class="loader">
    <img
        src="https://www.clipartmax.com/png/full/197-1970959_whf-logo-spinner-to-indicate-loading-transparent-loading-heart-gif.png"
        alt="Loadig...">

    <script type="application/javascript">
        window.addEventListener("load", function () {
            const loader = document.querySelector(".loader");
            loader.className += " hidden"; // class "loader hidden"
        });
    </script>
</div>
<body>
<div id="app">
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center header-transparent shadow-lg">
        <div class="container d-flex align-items-center">

            <div class="logo d-flex mr-auto">
                <h1 class="text-light pr-sm-1"><a href="{{ url('/home') }}">HealthHub</a></h1>

                <div><img src="{{asset('/images/redh_blues.png')}}"
                          alt="HealthHub logo"
                          style="height: 30px;
                      margin-top: auto;"
                          class="pr-3 rounded-circle">
                </div>
            </div>

            <nav class="nav-menu d-none d-lg-block ">
                <ul>
                    <li class="nav-item active"><a class="nav-link" href="{{ url('/home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                    @guest
                        <li class="nav-item drop-down">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Register/Login <span class="caret"></span>
                            </a>
                            <ul>
                                <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                @if (Route::has('register'))
                                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                                @endif
                            </ul>
                    @else
                        <li class="nav-item drop-down">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul>
                                <li><a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </li>
                            </ul>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                    @endguest
                </ul>
            </nav>
            <!-- .nav-menu -->
        </div>
    </header>
    <!-- End Header -->

    {{--
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex" href="{{ url('/') }}">
                    <div><img src="/images/s-logo.png" alt="HealthHub logo" style="height: 30px;margin-top: auto;"
                              class="pr-3"></div>
                    <div style="margin-top: auto;color:#e9605c;" title="Home Page"><b>H</b><span
                            style="color: black">ealth</span></div>
                    <div style="margin-top: auto;color: #e9605c;" title="Home Page"><b>H</b><span
                            style="color: black">ub</span></div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    --}}
    <main>
        @yield('content')
    </main>
    <!-- ======= Footer ======= -->
    <footer id="footer" class="fixed">
        <div class="container">
            <h3>HealthHub</h3>
            <p>Your Only Place To Feel Healthy</p>
            <div class="social-links">
                <a href="http://www.twitter.com/heathhub" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="http://www.facebook.com/heathhub" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="http://www.instagram.com/healthhub" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="http://www.skype.com/healthhub" class="skype"><i class="fa fa-skype"></i></a>
                <a href="http://www.linkedin.com/healthhub" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>HealthHub</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer>
    <!-- End Footer -->
</div>
{{--end app--}}
</body>
</html>
