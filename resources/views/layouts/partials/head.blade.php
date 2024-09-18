<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dashboard')</title>
    <meta name="description" content="Dashboard">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Dashboard">
    <meta property="og:site_name" content="Dashboard">
    <meta property="og:description"
        content="Dashboard">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('assets/media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('assets/media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png') }}">
    <!-- END Icons -->

    <!-- jQuery -->
    <script src="{{ asset('js/lib/jquery.min.js') }}"></script>

    <!-- Stylesheets -->
    <!-- Dashmix framework -->
    {{-- <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/dashmix.min.css') }}"> --}}

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    {{-- <link rel="stylesheet" id="css-theme" href="{{ asset('assets/css/themes/xwork.min.css') }}"> --}}
    <!-- END Stylesheets -->
    @yield('css')
    @vite(['resources/assets/css/dashmix.css', 'resources/assets/js/dashmix.app.min.js', 'resources/assets/js/dashmix.js'])
    {{-- @vite(['resources/sass/main.scss', 'resources/js/dashmix/app.js']) --}}
    @yield('js')
</head>
