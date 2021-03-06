<!DOCTYPE html>
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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/tasche.css') }}" rel="stylesheet">

    <!-- Flaggor -->
    <link href="{{ asset('css/flag-icon-css/assets/docs.css') }} " rel="stylesheet">
    <link href="{{ asset('css/flag-icon-css/css/flag-icon.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="/matches/today">Dagens matcher</a></li>
                        <li class="nav-item"><a class="nav-link" href="/teams">Teams</a></li>
                        <li class="nav-item"><a class="nav-link" href="/players">Players</a></li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        Grupper
                            </a>    
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/matches/group/a">
                                A
                                </a>
                                <a class="dropdown-item" href="/matches/group/b">
                                    B
                                </a>
                                <a class="dropdown-item" href="/matches/group/c">
                                    C
                                </a>
                                <a class="dropdown-item" href="/matches/group/d">
                                    D
                                </a>
                                <a class="dropdown-item" href="/matches/group/e">
                                    E
                                </a>
                                <a class="dropdown-item" href="/matches/group/f">
                                    F
                                </a>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="/forum">Forum</a></li>
                        <li class="nav-item"><a class="nav-link" href="/matches">Matcher</a></li>
                        <li class="nav-item"><a class="nav-link" href="/table">Ställning</a></li>
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
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10">   
                        @include('layouts.status')
 
                        @yield('content')
                    </div>
                </div>
            </div>                
        </main>
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <p>En tävling för alla från Hulabeck Mediabyrå.</p>
                        <p>Kontakt: <a href="mailto:info@hulabeck.se">info@hulabeck.se</a></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
