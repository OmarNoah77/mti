<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Infraestructura MTI</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url(ADMIN . '/') }}">Admin</a>
                        <a href="{{ url('logout') }}">Salir</a>
                    @else
                        <a href="{{ url('login') }}">Login</a>
                        <a href="{{ url('/register') }}">Registro</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Infraestructura  <b>MTI</b>
                    <img src="https://static1.squarespace.com/static/5aa6a0a33917ee7a8e83d788/t/5aa6a6f3f9619a74263ce3f1/1530882389824/">
                </div>

                <div class="links">
                    
                    <!--<a href="https://laravel.com/docs">Baner1</a>
                    <a href="https://laracasts.com">Baner2</a>
                    <a href="https://laravel-news.com">Baner3</a>
                    <a href="https://forge.laravel.com">Baner4</a>
                    <a href="https://github.com/laravel/laravel">Baner5</a>-->
                </div>
            </div>
        </div>
    </body>
</html>
