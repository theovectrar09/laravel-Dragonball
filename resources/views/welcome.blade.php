<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{!! asset('css/style.css') !!}" media="screen">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
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
                    {{-- <img src="images/SonGoku.png" alt="HTML5 Icon" style="width:128px;height:128px;"> --}}
                <div class="title m-b-md" style="background-image: url('images/SonGoku.png');background-size:100px;background-position:center;background-repeat:no-repeat">
                    Theo Vectra Riyadi
                </div>

                <div class="links">
                        <a href="{{ URL('/app') }}"><button>NEXT</button></a>
                </div>
            </div>
        </div>
    </body>
</html>