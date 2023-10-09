<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/ionicons.min.css')}}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/animation.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/jqueryui.min.css') }}">


    <link rel="stylesheet" href="{{asset('assets/css/style.css') }}">


    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia


    <script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>

    <!-- <script src="{{asset('assets/js/vendor/popper.min.js') }}"></script> -->
    <script src="{{asset('assets/js/vendor/bootstrap.min.js') }}"></script>


    <script src="{{asset('assets/js/plugins/slick.min.js') }}"></script>

    <script src="{{asset('assets/js/plugins/jqueryui.min.js') }}"></script>

    <script src="{{asset('assets/js/plugins/scrollup.min.js') }}"></script>
    <script src="{{asset('assets/js/plugins/ajax-contact.js') }}"></script>


    <script src="{{asset('assets/js/main.js') }}"></script>
</body>

</html>