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

<!-- Header -->
<header class="bg-white shadow p-6 banner4">
    <h2 class="text-4xl font-serif font-bold ml-4 text-center text-white font-bold">
        {{ __('Empresas y Experiencias') }}
    </h2>
    <div class="flex items-left justify-between p-4">
        <a href="{{ route('welcome') }}">
            <img src="{{ asset('/images/escudo-argamasilla.jpg') }}" class="w-12 h-auto" alt="Inicio">
        </a>
    </div>
    <div class="w-full bg-pink-900 bg-opacity-70">
        <p class="text-4xl font-serif font-bold ml-4 text-left text-white p-2">Argamasilla Cultural</p>
    </div>
    <nav class="w-full bg-gray-800 bg-opacity-40 font-bold">
        <ul class="flex justify-end space-x-4 p-4">
            <li>
                <div class="text-xl text-center pt-4">
                    <a href="{{ route('welcome') }}" class="text-lg text-white hover:bg-gradient-to-r from-pink-900 via-pink-400 to-pink-200 text-white p-2">Inicio</a>
                </div>
            </li>
            <li>
                <div class="text-xl text-center pt-4">
                    <a href="{{ route('agenda') }}" class="text-lg text-white hover:bg-gradient-to-r from-pink-900 via-pink-400 to-pink-200 text-white p-2">Agenda</a>
                </div>
            </li>
            <li>
                <div class="text-xl text-center pt-4">
                    <a href="{{ route('experiencias.show') }}"
                        class="text-lg text-white font-bold hover:text-pink-900 {{ request()->routeIs('experiencias.show') ? 'bg-gradient-to-r from-pink-900 via-pink-400 to-pink-200 text-white p-2' : '' }}">Experiencias</a>
                </div>
            </li>
        </ul>
    </nav>

</header>
<body class="banner2"> <!-- Cambiado a un fondo claro -->
    <div class="container mx-auto p-8">
                        <section class="bg-white rounded-lg shadow-lg bg-opacity-60 p-2">
                            <div class="w-full md:w-1/3 mb-8 md:mb-0 md:pr-8">
                                <p class="text-white uppercase tracking-wide bg-pink-900 font-bold p-2">Empresas y Propuestas</p>
                                <h3 class="text-3xl font-bold text-black leading-snug mb-4 p-2">EcoTurismo</h3>
                                <p class="text-gray-700 font-bold mb-4 p-2">
                                    Te invitamos a conocer, recorrer y disfrutar de la naturaleza protegida de Argamsilla de Calatrava,
                                    a través de una selección de experiencias de ecoturismo en espacios protegidos de la Red Natura 2000.
                                    Un abanico de actividades ofrecidas por empresas turísticas comprometidas con la conservación de la biodiversidad.
                                </p>
                            </div>

                            <div class="py-8 px-4">
                                <!-- Contenedor con diseño de rejilla -->
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                                    @foreach ($experiencias as $experiencia)
                                        <!-- Cada experiencia -->
                                        <div class="bg-white bg-opacity-70 rounded-lg shadow-md p-4">
                                            <!-- Imagen -->
                                            <div>
                                                <img src="{{ asset('/images/' . $experiencia->imagen) }}"
                                                    alt="Imagen de {{ $experiencia->nombre }}"
                                                    class="w-full h-40 object-cover rounded-lg">
                                            </div>
                                            <!-- Detalles -->
                                            <div class="mt-4">
                                                <p class="text-base text-blue-500 mb-2">{{ $experiencia->fechaInicio }}</p>
                                                <h4 class="font-semibold text-lg md:text-xl text-gray-800 mb-2">
                                                    {{ $experiencia->nombre }}
                                                </h4>
                                                <p class="text-gray-600 mb-4">
                                                    {{ Str::limit($experiencia->descripcionLarga, 100, '...') }}
                                                </p>
                                                <!-- Botones -->
                                                <div class="flex space-x-4">
                                                    <a href="{{ $experiencia->empresa->web }}" target="_blank"
                                                        rel="noopener noreferrer"
                                                        class="bg-pink-900 hover:bg-pink-500 text-white rounded-lg px-4 py-2 border border-white transition">
                                                        Solicitar
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
                                                    alt="Imagen de {{ $experiencia->nombre }}"
                                                    class="w-full rounded-lg">
                                            </div>
                                            <div class="p-4">
                                                <p class="font-bold bg-pink-900 text-lg mb-2 text-white p-2">Precio: {{ $experiencia->precio }} €</p>
                                                <p class="text-blue-800 font-bold">{{ $experiencia->descripcionLarga }}</p>
                                            </div>
                                            <x-primary-button x-data
                                                x-on:click="$dispatch('close-modal', '{{ 'modal-' . $experiencia->id }}')"
                                                class="mt-4">
                                                Cerrar
                                            </x-primary-button>
                                        </x-modal>
                                    @endforeach
                                </div>
                            </div>
                        </section>
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
