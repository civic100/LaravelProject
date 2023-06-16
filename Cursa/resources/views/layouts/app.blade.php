<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- CSS -->
    <link rel="stylesheet" href='/Cursa/resources/css/app.css' />

    <script src="{{asset('js/totalPriceRace.js')}}"></script>
</head>
<body>
    <div id="app">
        @auth
            @include('layouts.headerAdmin')
        @endauth 

        @guest
            @include('layouts.headerGeneral')
        @endguest

        
        <main class="py-4">
            @yield('content')
        </main>
        
        @include('layouts.footerGeneral')
    </div>
</body>
</html>
