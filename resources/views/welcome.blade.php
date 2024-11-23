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
        <header class="bg-red-600 bg-opacity-20">
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
                                        class="text-lg text-white hover:text-blue-200">Agenda</a>
                                </div>
                            </li>
                            {{-- espacio --}}
                            &nbsp;
                            &nbsp;
                            <li>
                                <div class="row-start-4 text-xl text-center pt-4">
                                    <a href="{{ route('experiencias.show') }}"
                                        class="text-lg text-white hover:text-blue-200">Experiencias</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <main>
            <div class='grid grid-cols-12 banner'>

                <div class="col-span-7 text-white font-sans font-bold min-h-screen bg-gray-700 bg-opacity-40 pl-7">
                    <div class="grid grid-rows-6 grid-flow-col min-h-screen items-center justify-items-start">

                        <h1 class="text-5xl font-serif font-bold italic ml-2 p-2 text-white">Argamasilla Cultural</h1>

                        <div class="row-span-3 row-start-3 text-3xl">
                            <form method="POST" action="{{ route('login') }}" class="bg-white bg-opacity-40 p-4 rounded-lg">
                                @csrf
                                <h2 class="text-3xl font-serif font-bold text-pink-900 my-1 text-center">Identificación</h2>

                                <div class="pt-10 pr-20 ">
                                    <label class="text-sm font-sans text-gray-700 font-bold" for="email">
                                        Email
                                    </label>
                                    <input type="text" name="email" placeholder="correo@ejemplo.com"
                                        class="w-full bg-white py-2 px-10 border-pink-900 hover: border-blue-900 rounded-lg text-gray-700 font-sans text-sm" />
                                </div>
                                <div class="pt-2 pr-20 text-gray-800">
                                    <label class="text-sm font-sans text-gray-700 font-bold" for="password">
                                        Contraseña
                                    </label>
                                    <input type="password" name="password" placeholder="Tu Contraseña"
                                        class=" w-full bg-white py-2 px-10 border hover: border-pink-900 rounded-lg text-gray-700 font-sans text-sm" />

                                </div>
                                <a href="{{ route('register') }}" class="text-sm font-sans text-gray-700">¿No
                                    tienes cuenta? Registrate</a>
                                <div class="text-sm font-sans font-medium w-full pr-20 pt-9">
                                    <button type="submit"
                                        class="text-center w-1/2 py-4 bg-pink-900 bg-opacity-60 hover:bg-gray-700 rounded-lg text-white">
                                        Identificarse
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

        </main>
    </div>

</body>
{{-- footer --}}
<footer class="bg-gradient-to-r from-pink-50 to-pink-100 py-6">
    <div class="container mx-auto px-6">
        <!-- Redes Sociales -->
        <div class="flex justify-center space-x-6 mb-4">
            <a href="https://www.facebook.com/biblioteca.argamasillacva" target="_blank" class="hover:scale-110">
                <img src="{{ asset('/images/facebook.png') }}" class="w-8 h-8" alt="Facebook">
            </a>
            <a href="https://web.whatsapp.com/" target="_blank" class="hover:scale-110">
                <img src="{{ asset('/images/whatsapp.png') }}" class="w-8 h-8" alt="WhatsApp">
            </a>
            <a href="https://www.instagram.com/bibliotecargamasillacva/" target="_blank" class="hover:scale-110">
                <img src="{{ asset('/images/instagram.png') }}" class="w-8 h-8" alt="Instagram">
            </a>
            <a href="https://biblioteca-argamasilla.blogspot.com/" target="_blank" class="hover:scale-110">
                <img src="{{ asset('/images/argamasilla.png') }}" class="w-8 h-8" alt="Blog">
            </a>
        </div>

        <!-- Derechos y Créditos -->
        <div class="text-center text-pink-900">
            <p>Desarrollado por <a href="#" class="font-bold text-gray-700 hover:text-blue-600">Inés Ruiz</a></p>
            <p class="text-sm">&copy; 2024 Argamasilla Cultural</p>
        </div>
    </div>
</footer>

</html>
