<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('/images/escudo-argamasilla.jpg') }}" type="image/x-icon">
    <title>Argamasilla-Cultural</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <header class="bg-blue-600">
            <div class="container mx-auto px-4">
                <div class="flex items-center justify-between py-4">
                    <a href="{{ route('welcome') }}">
                        <img src="{{ asset('/images/escudo-argamasilla.jpg') }}" class="w-12 h-auto" alt="Inicio">
                    </a>
                    <nav>
                        <ul class="flex space-x-4">
                            <li>
                                <div class="row-start-6 text-xl text-center pt-4">
                                    <a href="{{ route('agenda') }}"
                                        class="text-lg text-white hover:text-blue-400">Agenda</a>
                                </div>
                            </li>
                            {{-- espacio --}}
                            &nbsp;
                            &nbsp;
                            <li>
                                <div class="row-start-4 text-xl text-center pt-4">
                                    <a href="{{ route('experiencias.show') }}"
                                        class="text-lg text-white hover:text-blue-400">Experiencias</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <main>
            <div class='grid grid-cols-12 banner'>

                <div class="col-span-4 text-white font-sans font-bold bg-black min-h-screen pl-7 bg-opacity-40">
                    <div class="grid grid-rows-6 grid-flow-col min-h-screen items-center justify-items-start">

                        <i class="text-5xl font-serif font-bold italic ml-4 text-">Argamasilla Cultural</i>
                        <div class="row-span-4 row-start-2 text-3xl">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <h2 class="text-3xl font-serif font-bold text-white-500 my-1">Entrar</h2>

                                <div class="pt-10 pr-20 text-white">
                                    <label class="text-sm font-sans font-medium" for="email">
                                        Email
                                    </label>
                                    <input type="text" name="email" placeholder="micorreo@ejemplo.com"
                                        class="w-full bg-blue-600 py-3 px-12 border hover: border-white-500 rounded-lg text-base font-sans" />
                                </div>
                                <div class="pt-2 pr-20">
                                    <label class="text-sm font-sans font-medium" for="password">
                                        Contraseña
                                    </label>
                                    <input type="password" name="password" placeholder="Tu Contraseña"
                                        class=" w-full bg-blue-600 py-3 px-12 border hover: border-white-500 rounded-lg text-base font-sans" />

                                </div>
                                <a href="{{ route('register') }}" class="text-sm font-sans font-medium">¿No
                                    tienes cuenta? Registrate</a>
                                <div class="text-sm font-sans font-medium w-full pr-20 pt-14">
                                    <button type="submit"
                                        class="text-center w-1/2 py-4 bg-blue-700 hover:bg-blue-400 rounded-lg text-white">
                                        Log in
                                    </button>
                                </div>
                            </form>

                            <div>
                                {{-- Errores de inicio de sesión --}}
                                @if ($errors->any())
                                    <div class="alert alert-danger"
                                        style="font-size: 14px; padding: 10px; border-radius: 5px; color: #721c24; background-color: #f8d7da; border: 1px solid #f5c6cb; margin: 20px">
                                        <ul style="list-style-type: none; padding: 0; margin: 0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-8 text-white font-sans font-bold">
                </div>
            </div>

            <style>
                .banner {
                    background: url('{{ asset('images/cueva2.jpg') }}');
                    background-repeat: no-repeat;
                    background-size: cover
                }
            </style>

        </main>
    </div>

</body>

</html>
