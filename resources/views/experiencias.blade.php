<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiencias</title>
    <link rel="shortcut icon" href="{{ asset('/images/escudo-argamasilla.jpg') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="banner2"> <!-- Cambiado a un fondo claro -->
    <!-- Header -->
    <header class="bg-white shadow p-6 banner">
        <h2 class="text-4xl font-serif font-bold ml-4 text-center text-white font-bold">
            {{ __('Empresas y Experiencias') }}
        </h2>
        <div class="flex items-left justify-between p-4">
            <a href="{{ route('welcome') }}">
                <img src="{{ asset('/images/escudo-argamasilla.jpg') }}" class="w-12 h-auto" alt="Inicio">
            </a>
        </div>
        <div class="w-full bg-pink-900 bg-opacity-60">
            <p class="text-4xl font-serif font-bold ml-4 text-left text-white p-2">Argamasilla Cultural</p>
        </div>
        <nav class="w-full bg-gray-800 bg-opacity-40 font-bold">
            <ul class="flex justify-end space-x-4 p-4">
                <li>
                    <div class="text-xl text-center pt-4">
                        <a href="{{ route('welcome') }}" class="text-lg text-white hover:text-blue-400">Inicio</a>
                    </div>
                </li>
                <li>
                    <div class="text-xl text-center pt-4">
                        <a href="{{ route('agenda') }}" class="text-lg text-white hover:text-blue-400">Agenda</a>
                    </div>
                </li>
                <li>
                    <div class="text-xl text-center pt-4">
                        <a href="{{ route('experiencias.show') }}"
                            class="text-lg text-white hover:text-blue-400">Experiencias</a>
                    </div>
                </li>
            </ul>
        </nav>

    </header>

    <div class="container mx-auto p-8">
        <section class="bg-white rounded-lg shadow-lg bg-opacity-60 p-2"> <!-- Mantiene el fondo blanco -->
            <div class="w-full md:w-1/3 mb-8 md:mb-0 md:pr-8">
                <p class="text-white uppercase tracking-wide bg-pink-900 font-bold p-2">Empresas y Propuestas</p>
                <h3 class="text-3xl font-bold text-black leading-snug mb-4 p-2">EcoTurismo</h3>
                <p class="text-gray-900 font-bold mb-4 p-2">Explora las próximas experiencias que una selección de empresas
                    han programado para ti.</p>
            </div>

            <div class="py-8 px-4">
                <div class="flex flex-col md:flex-row items-start">
                    <!-- Sidebar Section -->

                    <!-- Timeline Section -->
                    <div class="w-full md:w-2/3 bg-white bg-opacity-50">
                        @php $contador = 0; @endphp
                        @foreach ($experiencias as $experiencia)
                            @php $contador++; @endphp
                            <div
                                class="grid md:grid-cols-2 mb-8 items-center {{ $contador % 2 == 0 ? 'md:grid-cols-2-reverse' : '' }} gap-4">
                                <div class="p-4">
                                    <img src="{{ asset('/images/' . $experiencia->imagen) }}"
                                        alt="Imagen de {{ $experiencia->nombre }}" class="w-full rounded-lg">
                                </div>
                                <div class="p-4">
                                    <p class="text-base text-blue-500 mb-2">{{ $experiencia->fechaInicio }}</p>
                                    <h4 class="font-semibold text-lg md:text-xl text-gray-800 mb-2">
                                        {{ $experiencia->nombre }}</h4>
                                    <p class="text-gray-600 mb-4">{{ $experiencia->descripcionLarga }}</p>
                                    <div class="flex space-x-4">
                                        <a href="{{ $experiencia->empresa->web }}" target="_blank"
                                            rel="noopener noreferrer"
                                            class="bg-green-500 hover:bg-blue-500 text-white rounded-lg px-4 py-2 border border-white transition">
                                            Inscríbete
                                        </a>
                                        <a href="#" x-data
                                            x-on:click="$dispatch('open-modal', '{{ 'modal-' . $experiencia->id }}')"
                                            class="bg-blue-500 hover:bg-green-500 text-white rounded-lg px-4 py-2 border border-white transition">
                                            Info
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->
                            <x-modal>
                                <x-slot name="name">{{ 'modal-' . $experiencia->id }}</x-slot>
                                <div class="p-4">
                                    <img src="{{ asset('/images/' . $experiencia->imagen) }}"
                                        alt="Imagen de {{ $experiencia->nombre }}" class="w-full rounded-lg">
                                </div>
                                <div class="p-4">
                                    <p class="font-bold bg-pink-900 text-lg mb-2 text-white p-2">Precio: {{ $experiencia->precio }} €
                                    </p>
                                    <p class="text-blue-800 font-bold">{{ $experiencia->descripcionLarga }}</p>
                                </div>
                                <x-primary-button x-data
                                    x-on:click="$dispatch('close-modal', '{{ 'modal-' . $experiencia->id }}')"
                                    class="mt-4">Cerrar</x-primary-button>
                            </x-modal>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
{{-- footer --}}
<footer class="bg-gradient-to-r from-pink-50 to-pink-900 py-6 bg-opacity-40">
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
    <div class="container mx-auto">
        <p class="text-center text-white">© 2024 Argamasilla Cultural</p>
    </div>

</html>
