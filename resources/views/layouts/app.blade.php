<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Finance tracker') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}"><span style="color: #004085; ">
                    {{ config('app.name', 'Finance tracker') }}
                </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                            <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @else
                            <li><a class="nav-link" href="{{ url('/expenses') }}">Expenses</a></li>
                            <li><a class="nav-link" href="{{ url('/budget') }}">Budget</a></li>
                            <li><a class="nav-link" href="{{ url('/currency_converter') }}">Currency Converter</a></li>

                            <li class="nav-item dropdown"> {{-- Statement --}}
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     <span class="caret">Statement</span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/report') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('report-page').submit();">
                                        Report
                                    </a>
                                    <a class="dropdown-item" href="{{ url('/graphs') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('graphs-page').submit();">
                                        Graphs & Diagrams
                                    </a>

                                    <form id="report-page" action="{{ url('/report') }}" >
                                        @csrf
                                    </form>
                                    <form id="graphs-page" action="{{ url('/graphs') }}" >
                                        @csrf
                                    </form>
                                </div>
                            </li>


                            <li class="nav-item dropdown"> {{-- User --}}
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret" style="color: #004085; ">
                                    {{ Auth::user()->name }} </span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/settings') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('settings-page').submit();">
                                        Settings
                                    </a>
                                    <a class="dropdown-item" href="{{ url('/about') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('about-page').submit();">
                                        About
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <form id="settings-page" action="{{ url('/settings') }}">
                                        @csrf
                                    </form>
                                    <form id="about-page" action="{{ url('/about') }}">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <li><a class="nav-link">LT</a></li>
                            <li><a class="nav-link">EN</a></li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
