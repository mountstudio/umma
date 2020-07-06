<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Админка') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    @stack('styles')
</head>
<body>
    <div id="app" style="background: rgba(255,255,255,0.45)!important;">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel nav-header" style="">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img  src="{{asset('img/logo.svg')}}" alt="logo" style="width: 200px;height:80px ">
                </a>
            </div>
        </nav>

        <main class="py-4" style="background: #fafbfc;">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')
</body>
</html>
