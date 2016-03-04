<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LeEMR - PreAlpha v0.01</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link rel="stylesheet" href="/css/foundation.css" />
    <link rel="stylesheet" href="/css/app.css" />
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

</head>
<body id="app-layout">
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-left">
                <!-- Branding Image -->
                <ul class="menu">
                    <li><a class="menu-text" href="{{ url('/') }}">LeMR - Pre-Alpha v0.01</a></li>
                </ul>
            </div>

            <div class="top-bar-right">

                <!-- Right Side Of Navbar -->
                <ul class="menu horizontal">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li><a href="#" class="menu">{{ Auth::user()->name }}</a></span>
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>

    @yield('content')

    <footer>
        <div class="row expanded callout secondary">
            <div class="medium-6 columns">
                <ul class="menu">
                    <li><a href="#">Legal</a></li>
                    <li><a href="#">Partner</a></li>
                    <li><a href="#">Explore</a></li>
                </ul>
            </div>
                <div class="medium-6 columns">
                <ul class="menu float-right">
                    <li class="menu-text">&copy;2016 LeMR</li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- JavaScripts -->
    <script src="/js/vendor/jquery.min.js"></script>
    <script src="/js/vendor/what-input.min.js"></script>
    <script src="/js/foundation.min.js"></script>
    <script src="/js/app.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
