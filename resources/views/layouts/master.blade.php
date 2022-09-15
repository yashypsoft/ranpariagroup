<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="Ranparia,Engineering,Group,Rajkot" />
        <meta name="description" content="Ranparia Engineering Co has a highly qualified staff which includes technicians, engineers, quality inspectors, admin staff, skilled and semi skilled workers around 120 people in strength. our team is having profound knowledge in the feild of casting, forging and machining." />
        <meta name="robots" content="index, follow">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <link rel="canonical" href="http://ranpariagroup.in" />


        <title>@yield('title') | Ranparia Engineering Group </title>

        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
        @yield('addcss')
        <link rel="stylesheet" id="bootstrap-css" href="{{ asset('/css/bootstrap.css') }}" type="text/css" media="all">
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}

        <link rel="stylesheet" id="awesome-font-css" href="{{ asset('css/font-awesome.css') }}" type="text/css" media="all">
        <link rel="stylesheet" id="ionicon-font-css" href="{{ asset('css/ionicon.css') }}" type="text/css" media="all">
        <link rel="stylesheet" id="slick-slider-css" href="{{ asset('css/slick.css') }}" type="text/css" media="all">
        <link rel="stylesheet" id="slick-theme-css" href="{{ asset('css/slick-theme.css') }}" type="text/css" media="all">
        <link rel="stylesheet" id="magnific-popup-css" href="{{ asset('css/magnific-popup.css') }}" type="text/css" media="all">
        <link rel="stylesheet" id="industris-style-css" href="{{ asset('css/style.css') }}" type="text/css" media="all">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <link rel="shortcut icon" href="{{ asset('favicon.ico')}}">
    </head>
    <body class="antialiased">
        @include('layouts.partials.navbar')
        <div id="bussness-inquiry" onclick="location.href='https://api.whatsapp.com/send?phone=919723918607';" aria-label="Business Enquiry" style="opacity: 1;">{{__('Business Enquiry')}}</div>
        @yield('content')

        @include('layouts.partials.footer')


        <script src='{{ asset('js/jquery.min.js') }}'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src='{{ asset('js/bootstrap.min.js') }}'></script>
        <script src='{{ asset('js/slick.min.js') }}'></script>
        <script src='{{ asset('js/jquery.sticky.js') }}'></script>
        <script src='{{ asset('js/countto.min.js') }}'></script>
        <script src='{{ asset('js/jquery.magnific-popup.min.js') }}'></script>
        <script src='{{ asset('js/jquery.isotope.min.js') }}'></script>
        <script src='{{ asset('js/scripts.js') }}'></script>
        @yield('addScript')
    </body>
</html>
