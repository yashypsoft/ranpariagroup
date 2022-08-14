<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ranparia Group - @yield('title')</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
        <link rel="stylesheet" id="bootstrap-css" href="{{ asset('/css/bootstrap.css') }}" type="text/css" media="all">
        <link rel="stylesheet" id="awesome-font-css" href="{{ asset('css/font-awesome.css') }}" type="text/css" media="all">
        <link rel="stylesheet" id="ionicon-font-css" href="{{ asset('css/ionicon.css') }}" type="text/css" media="all">
        <link rel="stylesheet" id="slick-slider-css" href="{{ asset('css/slick.css') }}" type="text/css" media="all">
        <link rel="stylesheet" id="slick-theme-css" href="{{ asset('css/slick-theme.css') }}" type="text/css" media="all">
        <link rel="stylesheet" id="magnific-popup-css" href="{{ asset('css/magnific-popup.css') }}" type="text/css" media="all">
        <link rel="stylesheet" id="industris-style-css" href="{{ asset('css/style.css') }}" type="text/css" media="all">

        <link rel="shortcut icon" href="favicon.png">
    </head>
    <body class="antialiased">
        @include('layouts.partials.navabar')
        @include('layouts.partials.carousel')
        @yield('content')

        @include('layouts.partials.footer')


        <script src='{{ asset('js/jquery.min.js') }}'></script>
        <script src='{{ asset('js/slick.min.js') }}'></script>
        <script src='{{ asset('js/jquery.sticky.js') }}'></script>
        <script src='{{ asset('js/countto.min.js') }}'></script>
        <script src='{{ asset('js/jquery.magnific-popup.min.js') }}'></script>
        <script src='{{ asset('js/jquery.isotope.min.js') }}'></script>
        <script src='{{ asset('js/scripts.js') }}'></script>
    </body>
</html>
