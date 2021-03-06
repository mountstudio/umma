<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Информационно-просветительский сайт ummamag.kg. Вся информация, размещенная на данном веб-сайте, предназначена только для персонального использования и не подлежит распространению без разрешения Ummamag.kg. Редакция не несет ответственности за содержимое перепечатанных материалов и высказывания отдельных лиц.">
    @stack('metas')
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/component.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/buttons.css')}}"/>

    @stack('styles')
</head>
<body style="overflow-x: hidden;">
<?php
    $banner = \App\Banner::all()->first();
?>
<section class="position-absolute " style="z-index: -1;background: url('{{ asset('storage/large/' .$banner->image) }}') no-repeat;background-size: cover;background-position: center;height: 100vh;width: 100%;">

</section>
<section class="position-absolute d-none d-lg-block" style="bottom: -52px;height: 100px;width: 110%;left: -30px;filter: blur(15px);background: white;z-index: -1;">

</section>
    <div id="app" class="">
            @include('layouts.header')
        <main class="">
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('js/classie.js') }}"></script>
    <script src="{{ asset('js/uisearch.js') }}"></script>
    <script>
        new UISearch( document.getElementById( 'sb-search' ) );
    </script>
<script>
    $('.shadow-on-hover').hover(e => {
        $(e.currentTarget).removeClass('shadow');
        $(e.currentTarget).addClass('shadow-sm');
    }, e => {
        $(e.currentTarget).removeClass('shadow-sm');
        $(e.currentTarget).addClass('shadow');
    })
</script>

    @stack('scripts')
</body>
</html>
