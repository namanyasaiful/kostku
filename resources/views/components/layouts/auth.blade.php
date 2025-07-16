<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Kostku</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body>
    {{ $slot }}

    @livewireScripts
</body>

</html>