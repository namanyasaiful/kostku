<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kostku')</title>
    <!-- <link rel="icon" href="{{ asset('assets/logo.png') }}" type="image/png"> -->
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body>
    <div>
        <!-- @auth
            @if(auth()->user()->role === 'pengelola')
                @include('components.sidebar.pengelola')
            @else
                @include('components.sidebar.penyewa')
            @endif
        @endauth -->

        <main>
            {{ $slot }}
        </main>
    </div>
    @livewireScripts
    @vite('resources/js/app.js')
</body>

</html>