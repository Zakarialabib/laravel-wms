<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        {!! SEO::generate() !!}
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('/public/css/app.css') }}">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="{{ asset('/public/css/adminlte.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('/public/css/fontawesome-free/css/all.min.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('/public/js/app.js') }}" defer></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('/public/js/adminlte.min.js') }}"></script>
        <!-- jQuery 3 -->
        <script src="{{ asset('/public/js/jquery.min.js') }}"></script>

    
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        @stack('scripts')
        @livewireStyles
        @bukStyles

    </head>
    <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
        <x-jet-banner />
        <div class="wrapper">
            <nav class="main-header relative flex flex-wrap items-center py-3 px-4 flex-no-wrap content-start text-black navbar-white">
                <!-- Left navbar links -->
                <div class="flex flex-wrap list-reset pl-0 mb-0 ml-auto">
                    <a class="inline-block cursor-pointer py-2 px-4 no-underline" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </div>
            </nav>            
            @livewire('navigation-menu')

            <!-- Page Heading -->
         

            <!-- Page Content -->
            <div class="content-wrapper">
                {{ $slot }}
            <div>
        </div>

        @stack('modals')
        <script src="{{ asset('/public/js/jquery.min.js') }}"></script>
        <script src="{{ asset('/public/js/popper.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.js" defer=""></script>
        @livewireScripts
        @bukScripts
    </body>
</html>
