<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Astrolifeguide') }}</title>
        <meta name="description" content="">
        <link rel="shortcut icon" href="{{ asset('astrolifeguide') }}/img/brand/favicon.ico">

        {{-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --}}
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->



        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <script src="https://kit.fontawesome.com/fef88c5b09.js" crossorigin="anonymous"></script>

        <!-- Icons -->

        {{-- Styles --}}

        <link href="{{ asset('astrolifeguide') }}/img/brand/favicon.png" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Icons -->
        <link href="{{ asset('astrolifeguide') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('astrolifeguide') }}/css/animate.css">
        <link rel="stylesheet" href="{{ asset('astrolifeguide') }}/css/fonts.css">
        <link rel="stylesheet" href="{{ asset('astrolifeguide') }}/css/flaticon.css">
        <link rel="stylesheet" href="{{ asset('astrolifeguide') }}/css/owl.carousel.css">
        <link rel="stylesheet" href="{{ asset('astrolifeguide') }}/css/magnific-popup.css">
        <link rel="stylesheet" href="{{ asset('astrolifeguide') }}/css/reset.css">

        <link type="text/css"  rel="stylesheet" href="{{ asset('astrolifeguide') }}/css/mdb.css">
        <link type="text/css"  rel="stylesheet" href="{{ asset('astrolifeguide') }}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('astrolifeguide') }}/css/style.css">
{{--        <link rel="stylesheet" href="{{ asset('astrolifeguide') }}/css/responsive.css">--}}




        {{-- Scripts --}}

        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>


        @yield('head')

    </head>
    <body>
    <div id="preloader">
        <div id="status"><img src="{{asset('astrolifeguide')}}/img/header/horoscope.gif" id="preloader_image" alt="loader">
        </div>
    </div>
        <div id="app">

            @include('partials.nav')

            <main class="py-4" style="clear: both;">
                @yield('content')
            </main>
            @include('layouts.footers.guest')

        </div>

        {{-- Scripts --}}
        <script src="{{ mix('/js/app.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.js"
                integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
                crossorigin="anonymous"></script>


        <script src="{{ asset('astrolifeguide') }}/js/popper.js"></script>
        <script src="{{ asset('astrolifeguide') }}/js/jquery.menu-aim.js"></script>
        <script src="{{ asset('astrolifeguide') }}/js/owl.carousel.js"></script>
        <script src="{{ asset('astrolifeguide') }}/js/jquery.inview.min.js"></script>
        <script src="{{ asset('astrolifeguide') }}/js/jquery.magnific-popup.js"></script>
        <script src="{{ asset('astrolifeguide') }}/js/custom.js"></script>
        <script src="{{ asset('astrolifeguide') }}/js/bootstrap.js"></script>
        <script src="{{ asset('astrolifeguide') }}/js/mdb.js"></script>

        @stack('js')

        @yield('footer_scripts')
    </body>
</html>