<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>{{ config("app.name", "Laravel") }}</title>

        {{-- Fav Icon --}}
        <link rel="icon" href="{{ asset("images/logo.png") }}" type="image/png" />

        {{-- Swiper CSS1 JS1 --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        @vite(["resources/css/app.css", "resources/js/app.js"])
    </head>
    <body class="">
        @include("layouts.nav")
        @yield("content")
        {{-- Swiper CSS1 JS1 --}}
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        {{-- Scroll Reveal JS1 --}}
        <script src="{{ asset("js/scrollreveal.min.js") }}"></script>

        {{-- Custom JS1 --}}
        <script src="{{ asset("js/main.js") }}"></script>
    </body>
</html>
