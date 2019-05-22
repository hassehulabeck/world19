<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/am.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
            <div class="links">
                    @if (\Request::is('/'))
                    @else
                        <a href="/">Home</a>    
                    @endif
                    <a href="/teams">Teams</a>
                    <a href="/players">Players</a>
                    <a href="/entries">Entries</a>
                </div>
            
            @yield('main')
            @yield('foot')
    </div>
</body>
</html>