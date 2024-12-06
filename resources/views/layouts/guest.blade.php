<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Argamasilla Cultural') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased bg-pink-200">
      <nav class="w-full bg-pink-900">
            <ul class="flex justify-end space-x-4 p-2 bg-gray-600 bg-opacity-40">
                <li>
                    <div class="text-xl text-center pt-4">
                        <a href="{{ route('welcome') }}"
                            class="text-lg text-white font-bold hover:bg-gradient-to-r from-pink-900 via-pink-400 to-pink-200 text-white p-2 {{ request()->routeIs('welcome') ? 'bg-gradient-to-r from-pink-200 via-pink-800 to-pink-900 text-white p-2' : '' }}">Inicio</a>
                    </div>
                </li>
                <li>
                    <div class="text-xl text-center pt-4">
                        <a href="{{ route('agenda') }}"
                            class="text-lg text-white font-bold hover:bg-gradient-to-r from-pink-900 via-pink-400 to-pink-200 text-white p-2 {{ request()->routeIs('agenda') ? 'bg-gradient-to-r from-pink-900 via-pink-400 to-pink-200 text-white p-2' : '' }}">Agenda</a>
                    </div>
                </li>
                <li>
                    <div class="text-xl text-center pt-4">
                        <a href="{{ route('experiencias.show') }}"
                            class="text-lg text-white font-bold hover:bg-gradient-to-r from-pink-900 via-pink-400 to-pink-200 text-white p-2 {{ request()->routeIs('experiencias.show') ? 'bg-gradient-to-r from-pink-200 via-pink-400 to-pink-900 text-white p-2' : '' }}">Experiencias</a>
                    </div>
                </li>
            </ul>
        </nav>
    <div class="min-h-screen flex flex-col sm:justify-center pt-6 sm:pt-0 bg-argamasilla dark:bg-argamasilla items-center">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gray-400 dark:bg-pink-900 shadow-md overflow-hidden sm:rounded-lg dark:bg-opacity-70">
            <a href="/">
                <img src="{{asset('/images/user1.jpg')}}" alt="registro" class="rounded-full w-16 h-auto">
            </a>
            {{ $slot }}
        </div>
    </div>
</body>

</html>
