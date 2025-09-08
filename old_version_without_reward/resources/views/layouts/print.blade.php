<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield("title")</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" rel="preload" as="script" ></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/timer.js') }}" defer></script>
    <script src="{{ asset('js/etp.js') }}" rel="preload" as="script" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fish.css') }}" rel="stylesheet">
    <link href="{{ asset('css/print.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">

    <main class="py-4">
        @yield('fishtable')
        @yield('points_history')
        @yield('roles_history')
        @yield('activity')
        @yield('report')
        @yield('edit')
        @yield('toasts')
    </main>
</div>
</body>
</html>
