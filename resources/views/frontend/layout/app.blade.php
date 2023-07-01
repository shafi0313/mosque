<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>UWA MSA </title>
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    {{-- <link href="{{ asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('frontend/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('frontend/images/ico/favicon.ico') }}">
</head>

<body class="homepage">
    <header id="header"> 
        @include('frontend.layout.includes.navigation')
    </header>

    @yield('content')

    @include('frontend.layout.includes.footer')

    <style>
        .whyisntitwhite {
            color: white;
        }
    </style>

    <script src="{{ asset('frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/prayer-time/jquery.prayer.times.min.js') }}"></script>
    @stack('scripts')
</body>
</html>
