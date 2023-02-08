<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.108.0">
    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('page_title' ,'Page_Title')</title>

    <!-- Styles -->


    <link href="{{ asset('backend/dist/css/bootstrap-reboot.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/dist/css/layout.css') }}" rel="stylesheet">

    {{-- custom css file includes here --}}
    @yield('css-scripts')



    <!-- Fonts -->
</head>

<body class="sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    {{-- main container section start --}}
    <div class="container-fluid p-0 wrapper" id="app">
        {{-- navigation section start --}}
        @yield('navbar')
        {{-- navigation section end --}}
        {{-- main content section start here --}}
        <div class="main_content">
            @yield('sidebar')
            @yield('main_content')
        </div>
        {{-- footer section start --}}
        @yield('footer')
        {{-- footer section end --}}
        {{-- main content section end here --}}
    </div>
    {{-- main container section end --}}
    @yield('modals')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/popper/popper.min.js') }} ">


    </script>

    @yield('js-scripts')
</body>

</html>