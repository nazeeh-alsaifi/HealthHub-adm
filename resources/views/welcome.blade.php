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

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
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

<!-- fade in class -->

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

<!-- loader class symbol -->
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

<!-- logo HEALTHHUB -->
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

<!-- Horizontal Menu -->

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

            <div class="content">
                <div class="title m-b-md">
                    HealthHub
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
