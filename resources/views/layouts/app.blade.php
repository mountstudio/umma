<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/component.css') }}"/>

    @stack('styles')
</head>
<body>
    <div id="app" class="">
            @include('blocks.header')
        <main class="">
            @yield('content')
        </main>
        @include('blocks.footer')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('js/classie.js') }}"></script>
    <script src="{{ asset('js/uisearch.js') }}"></script>
    <script>
        new UISearch( document.getElementById( 'sb-search' ) );
    </script>

    @stack('scripts')
</body>
</html>
