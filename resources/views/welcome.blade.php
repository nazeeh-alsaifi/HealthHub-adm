<!DOCTYPE html>
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
            <link href="{{ asset('css/newStyle.css') }}" rel="stylesheet">
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        </head>

    <body>

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
    <!-- The Main Symbol HEALTH HUB  svg-->
    <div class="fade-in"><img src="/images/heart.gif" width="150px" height="170px" style="position: relative;left: 45%" ></div>
    <div class="basic">
    <div id="top-logo" class="text-center" style="margin-bottom:0">
        <div class="title  p-md-3 mr-auto">
            <svg id="logo" width="556" height="74" viewBox="0 0 556 74" fill="none"
                 xmlns="http://www.w3.org/2000/svg">

                <path d="M55.375 71H46.3281V39.4531H11.9219V71H2.92188V2.75H11.9219V32.0938H46.3281V2.75H55.375V71Z"
                      stroke="black" stroke-width="0.2" mask="url(#path-1-outside-1)"/>
                <path
                    d="M109.938 39.4531H80.3594V63.6406H114.719V71H71.3594V2.75H114.25V10.1562H80.3594V32.0938H109.938V39.4531Z"
                    stroke="black" stroke-width="0.2" mask="url(#path-1-outside-1)"/>
                <path
                    d="M163.609 53.1875H135.016L128.594 71H119.312L145.375 2.75H153.25L179.359 71H170.125L163.609 53.1875ZM137.734 45.7812H160.938L149.312 13.8594L137.734 45.7812Z"
                    stroke="black" stroke-width="0.2" mask="url(#path-1-outside-1)"/>
                <path d="M197.594 63.6406H229.938V71H188.547V2.75H197.594V63.6406Z" stroke="black" stroke-width="0.2"
                      mask="url(#path-1-outside-1)"/>
                <path d="M274.422 10.1562H252.484V71H243.531V10.1562H221.641V2.75H274.422V10.1562Z" stroke="black"
                      stroke-width="0.2" mask="url(#path-1-outside-1)"/>
                <path d="M337 71H327.953V39.4531H293.547V71H284.547V2.75H293.547V32.0938H327.953V2.75H337V71Z"
                      stroke="black" stroke-width="0.2" mask="url(#path-1-outside-1)"/>
                <path d="M429.25 71H420.203V39.4531H385.797V71H376.797V2.75H385.797V32.0938H420.203V2.75H429.25V71Z"
                      stroke="black" stroke-width="0.2" mask="url(#path-1-outside-1)"/>
                <path
                    d="M493.281 2.75V49.1562C493.25 55.5938 491.219 60.8594 487.188 64.9531C483.188 69.0469 477.75 71.3438 470.875 71.8438L468.484 71.9375C461.016 71.9375 455.062 69.9219 450.625 65.8906C446.188 61.8594 443.938 56.3125 443.875 49.25V2.75H452.781V48.9688C452.781 53.9062 454.141 57.75 456.859 60.5C459.578 63.2188 463.453 64.5781 468.484 64.5781C473.578 64.5781 477.469 63.2188 480.156 60.5C482.875 57.7812 484.234 53.9531 484.234 49.0156V2.75H493.281Z"
                    stroke="black" stroke-width="0.2" mask="url(#path-1-outside-1)"/>
                <path
                    d="M507.484 71V2.75H529.797C537.203 2.75 542.766 4.28125 546.484 7.34375C550.234 10.4062 552.109 14.9375 552.109 20.9375C552.109 24.125 551.203 26.9531 549.391 29.4219C547.578 31.8594 545.109 33.75 541.984 35.0938C545.672 36.125 548.578 38.0938 550.703 41C552.859 43.875 553.938 47.3125 553.938 51.3125C553.938 57.4375 551.953 62.25 547.984 65.75C544.016 69.25 538.406 71 531.156 71H507.484ZM516.484 39.0781V63.6406H531.344C535.531 63.6406 538.828 62.5625 541.234 60.4062C543.672 58.2188 544.891 55.2188 544.891 51.4062C544.891 43.1875 540.422 39.0781 531.484 39.0781H516.484ZM516.484 31.8594H530.078C534.016 31.8594 537.156 30.875 539.5 28.9062C541.875 26.9375 543.062 24.2656 543.062 20.8906C543.062 17.1406 541.969 14.4219 539.781 12.7344C537.594 11.0156 534.266 10.1562 529.797 10.1562H516.484V31.8594Z"
                    stroke="black" stroke-width="0.2" mask="url(#path-1-outside-1)"/>
                <img src="{{asset('/images/heart-symbol.gif')}}" height="50" width="50" style="vertical-align:middle"/>
            </svg>
        </div>
    </div>
    </div>

    <!-- ======= Header ======= -->
    <div class="basic">
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

            <div class="nav-menu d-none d-lg-block ">
                <ul >
                    <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                    <li class="nav-item drop-down">
                        <a class="nav-link" href="">Register/Login</a>
                        <ul>
                            <li><a class="nav-link" href="#">Register</a></li>
                            <li><a class="nav-link" href="#">Login</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">Contact</a></li>
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
            <!-- .nav-menu -->
        </div>

    </header>

    <body>
    <div class="text-bar"><p>Your  Way  For  Better  Life.</p></div>
    <div class="basic">

        <article>
                <div class="row">
                    <div class="column">
                        <div class="first">
                        <div class="flip-card-container">
                            <div class="flip-card">
                                <div class="flip-card-front">

                                    <img src="/images/s-logo.png" alt="Albert Einstein">
                                </div>
                                <div class="flip-card-back">
                                    <p>
                            "Two things are infinite: the universe and human stupidity; and I'm not sure about the universe."
                                        <span>- Albert Einstein -</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

                <div class="column">
                    <div class="second">
                    <div class="flip-card-container">
                        <div class="flip-card">
                            <div class="flip-card-front">

                            <img src="/images/s-logo.png" alt="Albert Einstein">
                            </div>
                            <div class="flip-card-back">
                            <p>
                                "Two things are infinite: the universe and human stupidity; and I'm not sure about the universe."
                                <span>- Albert Einstein -</span>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                    <div class="column">
                        <div class="third">
                        <div class="flip-card-container">
                            <div class="flip-card">
                                <div class="flip-card-front">

                            <img src="/images/s-logo.png" alt="Albert Einstein">
                        </div>
                        <div class="flip-card-back">
                            <p>
                                "Two things are infinite: the universe and human stupidity; and I'm not sure about the universe."
                                <span>- Albert Einstein -</span>
                        </div>
                    </div>
                </div>
                    </div>
                    </div>


                <div class="column">
                    <div class="fourth">
                    <div class="flip-card-container">
                        <div class="flip-card">
                            <div class="flip-card-front">

                                <img src="/images/s-logo.png" alt="Albert Einstein">
                            </div>
                            <div class="flip-card-back">
                                <p>
                                    "Two things are infinite: the universe and human stupidity; and I'm not sure about the universe."
                                    <span>- Albert Einstein -</span>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <div class="column">
                    <div class="fifth">
                    <div class="flip-card-container">
                        <div class="flip-card">
                            <div class="flip-card-front">

                                <img src="/images/s-logo.png" alt="Albert Einstein">
                            </div>
                            <div class="flip-card-back">
                                <p>
                                    "Two things are infinite: the universe and human stupidity; and I'm not sure about the universe."
                                    <span>- Albert Einstein -</span>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <div class="column">
                    <div class="sixth">
                    <div class="flip-card-container">
                        <div class="flip-card">
                            <div class="flip-card-front">

                                <img src="/images/s-logo.png" alt="Albert Einstein">
                            </div>
                            <div class="flip-card-back">
                                <p>
                                    "Two things are infinite: the universe and human stupidity; and I'm not sure about the universe."
                                    <span>- Albert Einstein -</span>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
        </article>
    </div>
        <!-- ======= Footer ======= -->

        <footer id="footer">
            <div class="container">
                <h3>HealthHub</h3>
                <p>Your Only Place To Feel Healthy</p>
                <div class="social-links">
                    <a href="http://www.twitter.com/heathhub" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="http://www.facebook.com/heathhub" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="http://www.instagram.com/healthhub" class="instagram"><i class="fa fa-instagram"></i></a>
                    <a href="http://www.skype.com/healthhub" class="google-plus"><i class="fa fa-skype"></i></a>
                    <a href="http://www.linkedin.com/healthhub" class="linkedin"><i class="fa fa-linkedin"></i></a>
                </div>
                <div class="copyright">
                    &copy; Copyright <strong><span>HealthHub</span></strong>. All Rights Reserved
                </div>
            </div>
        </footer>
        <!-- End Footer -->
        {{--end app--}}
    </body>
</html>

