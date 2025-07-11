<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kostku</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body>
    <div class="w-full min-h-screen bg-gray-100 flex flex-col lg:flex-row">
        <!-- Sidebar hanya tampil di desktop -->
        <div class="hidden lg:flex w-1/2 min-h-screen bg-[#53AD9F] text-white flex-col justify-center items-start px-20">
            <h1 class="font-bold text-6xl mb-4">Ayo kelola kostmu bersama KOSTKU</h1>
            <p class="text-2xl mb-20">Kini mengelola kost menjadi lebih mudah</p>
            <div class="px-40">
                <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="w-60 h-48">
            </div>
        </div>

        <!-- Login -->
        <div class="w-full lg:w-1/2 min-h-screen bg-white text-black flex flex-col justify-center items-center">
            @livewire('auth.login')
        </div>
    </div>
</body>

</html>