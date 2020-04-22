<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .header-bottom {
            background-color: #C83C3C;
            color: black;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 50px;
            margin: 0;
            position: relative;

        }


        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
        }


        .content {
            text-align: center;
        }


        .links > a {
            color: white;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .fa {
            padding:  10px;
            font-size: 20px;
            width: 50px;
            text-align: center;
            text-decoration: none;
            border-radius: 100%;

        }

        /* Add a hover effect if you want */
        .fa:hover {
            opacity: 0.9;

        }

        /* Set a specific color for each brand */

        /* Facebook */
        .fa-facebook {
            background: #3B5998;
            color: white;
        }

        /* Twitter */
        .fa-twitter {
            background: #55ACEE;
            color: white;
        }
        /* Youtube */
        .fa-youtube {
            background: #55ACEE;
            color: white;
        }
    </style>
</head>

<body>
    <header id="header" class="health-hub-header ">
        <div class="header-top row" ></div>
        <div class="header-mid row"></div>
        <div class="header-bottom flex-center position-ref full-height row">
            <div class="content flex-center">
                <div class="links col-md-auto">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">الرئيسية</a>
                </div>
                <div class="social-media-links col-3">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>

                </div>
            </div>
        </div>
        <div class="header-trending row"></div>
    </header>


    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex" href="{{ url('/') }}">
                    <div><img src="/images/s-logo.png" alt="HealthHub logo"  style="height: 30px;margin-top: auto;" class="pr-3"></div>
                    <div style="margin-top: auto;color:#e9605c;" title="Home Page"><b>H</b><span style="color: black">ealth</span></div>
                    <div style="margin-top: auto;color: #e9605c;" title="Home Page"><b>H</b><span style="color: black">ub</span></div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
