<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ferinterior</title>
    <meta name="description" content="Free open source Tailwind CSS Store template">
    <meta name="keywords"
        content="tailwind,tailwindcss,tailwind css,css,starter template,free template,store template, shop layout, minimal, monochrome, minimalistic, theme, nordic">

    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{ asset('library/fontawesome-free-5.15.4/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('library/sweetalert2/sweetalert2.all.min.js') }}"></script>
    @livewireStyles
</head>

<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">

    <!--Nav-->
    <nav id="header" class="w-full z-30 top-0 py-1">
        @livewire('navbar')
    </nav>

    <div class="carousel relative container mx-auto" style="max-width:1600px;">
        @include('layouts.home.app-carousel')
    </div>


    <section class="bg-white py-8">
        {{-- MAIN CONTENT --}}
        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

            {{ $slot }}

        </div>
    </section>

    @include('layouts.home.app-footer')
    @livewireScripts
</body>

</html>
