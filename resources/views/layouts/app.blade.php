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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />        <link rel="stylesheet" href="{{ asset('/public/css/adminlte.min.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" integrity="sha512-5m1IeUDKtuFGvfgz32VVD0Jd/ySGX7xdLxhqemTmThxHdgqlgPdupWoSN8ThtUSLpAGBvA8DY2oO7jJCrGdxoA==" crossorigin="anonymous" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('/public/css/fontawesome-free/css/all.min.css') }}">
        @stack('styles')
        <!-- Scripts -->
        <script src="{{ asset('/public/js/app.js') }}" defer></script>
        <!-- AdminLTE App -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>      
        <script src="{{ asset('/public/js/adminlte.min.js') }}"></script>
        <!-- jQuery 3 -->
        <script src="{{ asset('/public/js/jquery.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js" integrity="sha512-2RLMQRNr+D47nbLnsbEqtEmgKy67OSCpWJjJM394czt99xj3jJJJBQ43K7lJpfYAYtvekeyzqfZTx2mqoDh7vg==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js" integrity="sha512-XKa9Hemdy1Ui3KSGgJdgMyYlUg1gM+QhL6cnlyTe2qzMCYm4nAZ1PsVerQzTTXzonUR+dmswHqgJPuwCq1MaAg==" crossorigin="anonymous"></script>        @stack('scripts')
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
        @livewire('livewire-ui-modal')
        @livewireUIScripts
        @livewireScripts
        @bukScripts
    </body>
</html>
