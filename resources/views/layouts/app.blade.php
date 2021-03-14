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
        <!-- Scripts -->
        <script src="{{ asset('/public/js/app.js') }}" defer></script>
        @livewireStyles
        @bukStyles
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />
        <div class="min-h-screen bg-gray-100">
            <div class="flex items-start justify-between">

            @livewire('navigation-menu')

            <!-- Page Heading -->
         

            <!-- Page Content -->
            <div>
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
