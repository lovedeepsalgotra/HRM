<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
        
      

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Argon Dashboard') }}</title>
        <!-- Favicon -->
        <link href="{{ asset('argon') }}/img/brand/favicon.png" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Extra details for Live View on GitHub Pages -->

        <!-- Icons -->
        <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
    </head>
    
    
    <style>
        .bg-default{
            background: #f7c90e !important
        }
    </style>
    <body class="{{ $class ?? '' }}">
          <meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:image" content="https://ampleteckdev.com/goldstarpens/wp-content/uploads/2022/05/thumb_7e2de32db376164a2f828f8502f8b5566f2fb78e.jpg" />
<meta property="og:image:alt" content="ALT_TEXT_FOR_IMAGE" />
<meta property="og:image:type" content="image/jpg" />
<meta property="og:image:secure_url" content="https://ampleteckdev.com/goldstarpens/wp-content/uploads/2022/05/thumb_7e2de32db376164a2f828f8502f8b5566f2fb78e.jpg" />
<meta property="og:site_name" content="image-preview" />
<meta property="og:type" content="website" />
        @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @include('layouts.navbars.sidebar')
        @endauth
        
        <div class="main-content">
            @include('layouts.navbars.navbar')
            @yield('content')
        </div>

        @guest()
            @include('layouts.footers.guest')
        @endguest

        <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        
        @stack('js')
        
        <!-- Argon JS -->
        <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
    </body>
</html>