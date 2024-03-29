<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LeMR - Version 0.01 Pre-Alpha</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link rel="stylesheet" href="/css/foundation.css" />
    <link rel="stylesheet" href="/css/app.css" />
    {{-- <link href="{{ elixir('/css/app.css') }}" rel="stylesheet"> --}}

</head>
<body id="app-layout">
    <nav class="top-bar">
        <div class="top-bar-left">

            <!-- Branding Image -->
            <ul class="menu">
                <li>
                    <a class="" href="{{ url('/') }}">
                        Task List
                    </a>
                </li>
            </ul>

        </div>

        <div class="top-bar-right">

            <!-- Right Side Of Navbar -->
            <ul class="menu">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li>{{ Auth::user()->name }} <span class="caret"></span></li>
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                @endif
            </ul>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="/js/vendor/jquery.min.js"></script>
    <script src="/js/vendor/what-input.min.js"></script>
    <script src="/js/foundation.min.js"></script>
    <script src="/js/app.js"></script>
    {{-- <script src="{{ elixir('/js/app.js') }}"></script> --}}
</body>
</html>
