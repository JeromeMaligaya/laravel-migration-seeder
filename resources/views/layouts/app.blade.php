<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @yield("additional-meta")

        <title>@yield("page-title", "laravel-project")</title>

        @yield("additional-cdn")
    </head>

    <body>
        {{-- header --}}
        @include('partials.header')

        {{-- main content --}}
        <main>
            @yield('content')
        </main>

        {{-- footer --}}
        @include('partials.footer')
        @vite('resources/js/app.js')
    </body>
</html>
