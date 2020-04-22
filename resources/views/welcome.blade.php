<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HealthHub</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }


            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            {{-- fade in class --}}

            .fade-in{
                animation: fade-in 5s;
                animation-fill-mode: forwards;
            }

            @keyframes fade-in {
                from {
                    opacity: 0;
                }
                to{
                    opacity: 1;
                }
            }

            {{-- loader class symbol --}}
            .loader {
                position: fixed;
                z-index: 99;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: white;
                display: flex;
                justify-content: center;
                align-items: center;
                animation: fadeOut 2s;
                animation-fill-mode: forwards;

            }

            .loader > img {
                width: 100px;
            }



            @keyframes fadeOut {
                100% {
                    opacity: 0;
                    visibility: hidden;
                }
            }

            {{-- logo HEALTHHUB --}}
            #logo {
                animation: fill 0.5s ease forwards 3s;


            }
            #logo path:nth-child(1){
                stroke-dasharray: 544.781982421875;
                stroke-dashoffset: 544.781982421875;
                animation: line-anim 2s ease forwards 0.3s;
                animation: fill2 0.5s ease forwards 0.5s;

            }
            #logo path:nth-child(2){
                stroke-dasharray: 525.2340087890625;
                stroke-dashoffset: 525.2340087890625;
                animation: line-anim 2s ease forwards 0.6s;
            }
            #logo path:nth-child(3){
                stroke-dasharray:363.093994140625;
                stroke-dashoffset: 363.093994140625;
                animation: line-anim 2s ease forwards 0.9s;

            }
            #logo path:nth-child(4){
                stroke-dasharray: 363.093994140625;
                stroke-dashoffset: 363.093994140625;
                animation: line-anim 2s ease forwards 1.2s;

            }
            #logo path:nth-child(5){
                stroke-dasharray: 544.781982421875;
                stroke-dashoffset: 544.781982421875;
                animation: line-anim 2s ease forwards 1.5s;

            }
            #logo path:nth-child(6){
                stroke-dasharray: 544.781982421875;
                stroke-dashoffset: 544.781982421875;
                animation: line-anim 2s ease forwards 1.8s;


            }
            #logo path:nth-child(7){
                stroke-dasharray: 607.3242797851562;
                stroke-dashoffset: 607.3242797851562;
                animation: line-anim 2s ease forwards 2.1s;
                animation: fill2 0.5s ease forwards 2s;


            }
            #logo path:nth-child(8){
                stroke-dasharray: 607.3242797851562;
                stroke-dashoffset: 607.3242797851562;
                animation: line-anim 2s ease forwards 2.4s;
            }
            #logo path:nth-child(9){
                stroke-dasharray: 607.3242797851562;
                stroke-dashoffset: 607.3242797851562;
                animation: line-anim 2s ease forwards 2.7s;

            }

            @keyframes line-anim {
                to {
                    stroke-dashoffset: 0;
                }
            }

            @keyframes fill {
                from{
                    fill:transparent;
                }
                to{
                    fill : black;
                }
            }

            @keyframes fill2 {
                from{
                    fill:transparent;
                }
                to{
                    fill :red;
                }
            }

            {{-- Horizantel menu--}}

            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
            }

            li {
                float: left;
            }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            li a:hover:not(.active) {
                background-color: #111;
            }

            .active {
                background-color: #c51f1a;
            }


        </style>
    </head>
    <body>
    <!-- loader symbol function with java script-->
    <div class="loader">
        <img src="https://www.clipartmax.com/png/full/197-1970959_whf-logo-spinner-to-indicate-loading-transparent-loading-heart-gif.png" alt="Loadig...">

        <script type="application/javascript">
            window.addEventListener("load", function () {
                const loader = document.querySelector(".loader");
                loader.className += " hidden"; // class "loader hidden"
            });
        </script>
    </div>
<!-- The Main Symbol using svg-->
    <div class="content">
        <div class="title m-b-md">

            <svg id="logo"  width="556" height="74" viewBox="0 0 556 74" fill="none" xmlns="http://www.w3.org/2000/svg">

                    <path d="M55.375 71H46.3281V39.4531H11.9219V71H2.92188V2.75H11.9219V32.0938H46.3281V2.75H55.375V71Z" stroke="black" stroke-width="4" mask="url(#path-1-outside-1)"/>
                    <path d="M109.938 39.4531H80.3594V63.6406H114.719V71H71.3594V2.75H114.25V10.1562H80.3594V32.0938H109.938V39.4531Z" stroke="black" stroke-width="4" mask="url(#path-1-outside-1)"/>
                    <path d="M163.609 53.1875H135.016L128.594 71H119.312L145.375 2.75H153.25L179.359 71H170.125L163.609 53.1875ZM137.734 45.7812H160.938L149.312 13.8594L137.734 45.7812Z" stroke="black" stroke-width="4" mask="url(#path-1-outside-1)"/>
                    <path d="M197.594 63.6406H229.938V71H188.547V2.75H197.594V63.6406Z" stroke="black" stroke-width="4" mask="url(#path-1-outside-1)"/>
                    <path d="M274.422 10.1562H252.484V71H243.531V10.1562H221.641V2.75H274.422V10.1562Z" stroke="black" stroke-width="4" mask="url(#path-1-outside-1)"/>
                    <path d="M337 71H327.953V39.4531H293.547V71H284.547V2.75H293.547V32.0938H327.953V2.75H337V71Z" stroke="black" stroke-width="4" mask="url(#path-1-outside-1)"/>
                    <path d="M429.25 71H420.203V39.4531H385.797V71H376.797V2.75H385.797V32.0938H420.203V2.75H429.25V71Z" stroke="black" stroke-width="4" mask="url(#path-1-outside-1)"/>
                    <path d="M493.281 2.75V49.1562C493.25 55.5938 491.219 60.8594 487.188 64.9531C483.188 69.0469 477.75 71.3438 470.875 71.8438L468.484 71.9375C461.016 71.9375 455.062 69.9219 450.625 65.8906C446.188 61.8594 443.938 56.3125 443.875 49.25V2.75H452.781V48.9688C452.781 53.9062 454.141 57.75 456.859 60.5C459.578 63.2188 463.453 64.5781 468.484 64.5781C473.578 64.5781 477.469 63.2188 480.156 60.5C482.875 57.7812 484.234 53.9531 484.234 49.0156V2.75H493.281Z" stroke="black" stroke-width="4" mask="url(#path-1-outside-1)"/>
                    <path d="M507.484 71V2.75H529.797C537.203 2.75 542.766 4.28125 546.484 7.34375C550.234 10.4062 552.109 14.9375 552.109 20.9375C552.109 24.125 551.203 26.9531 549.391 29.4219C547.578 31.8594 545.109 33.75 541.984 35.0938C545.672 36.125 548.578 38.0938 550.703 41C552.859 43.875 553.938 47.3125 553.938 51.3125C553.938 57.4375 551.953 62.25 547.984 65.75C544.016 69.25 538.406 71 531.156 71H507.484ZM516.484 39.0781V63.6406H531.344C535.531 63.6406 538.828 62.5625 541.234 60.4062C543.672 58.2188 544.891 55.2188 544.891 51.4062C544.891 43.1875 540.422 39.0781 531.484 39.0781H516.484ZM516.484 31.8594H530.078C534.016 31.8594 537.156 30.875 539.5 28.9062C541.875 26.9375 543.062 24.2656 543.062 20.8906C543.062 17.1406 541.969 14.4219 539.781 12.7344C537.594 11.0156 534.266 10.1562 529.797 10.1562H516.484V31.8594Z" stroke="black" stroke-width="4" mask="url(#path-1-outside-1)"/>
                <img src="/images/heart-symbol.gif" height="50" width="50" style="vertical-align:middle" />
                </svg>
            </div>
        </div>
  <!-- The Horizontal Menu-->
    <div class="fade-in">
    <ul>
        <li><a class="active" href="{{ url('/home') }}">Home</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="#contact">Articlales</a></li>
        <li><a href="#about">About</a></li>
    </ul>
    </div>

    <!--login & register
    <div class="fade-in-logo">

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>-->
    </body>
</html>

