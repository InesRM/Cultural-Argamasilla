<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiencias</title>
    <link rel="shortcut icon" href="{{ asset('/images/escudo-argamasilla.jpg') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="banner2"> <!-- Cambiado a un fondo claro -->
    <!-- Header -->
    <header class="bg-white shadow p-6 banner">
        <h2 class="text-4xl font-serif font-bold ml-4 text-center text-white">
            {{ __('Empresas y Experiencias') }}
        </h2>
        <div class="flex items-left justify-between p-4">
            <a href="{{ route('welcome') }}">
                <img src="{{ asset('/images/escudo-argamasilla.jpg') }}" class="w-12 h-auto" alt="Inicio">
            </a>
        </div>
        <nav class="w-full bg-gray-800 bg-opacity-40">
            <p class="text-white text-left font-serif font-bold italic">Argamasilla de Calatrava</p>
            <ul class="flex justify-end space-x-4 p-4">
                <li>
                    <div class="text-xl text-center pt-4">
                        <a href="{{ route('welcome') }}" class="text-lg text-white hover:text-red-900">Inicio</a>
                    </div>
                </li>
                <li>
                    <div class="text-xl text-center pt-4">
                        <a href="{{ route('agenda') }}" class="text-lg text-white hover:text-red-900">Agenda</a>
                    </div>
                </li>
                <li>
                    <div class="text-xl text-center pt-4">
                        <a href="{{ route('experiencias.show') }}"
                            class="text-lg text-white hover:text-red-900">Experiencias</a>
                    </div>
                </li>
            </ul>
        </nav>

    </header>

    <div class="container mx-auto p-8">
        <section class="bg-white rounded-lg shadow-lg bg-opacity-40"> <!-- Mantiene el fondo blanco -->
            <div class="w-full md:w-1/3 mb-8 md:mb-0 md:pr-8 bg-white">
                <p class="text-blue-500 uppercase tracking-wide">Cronología</p>
                <h3 class="text-3xl font-bold text-gray-800 leading-snug mb-4">Agenda de experiencias</h3>
                <p class="text-gray-600 mb-4">Explora las próximas experiencias que una selección de empresas
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
                                            class="bg-blue-500 hover:bg-green-500 text-white rounded-lg px-4 py-2 border border-blue-500 transition">
                                            Inscríbete
                                        </a>
                                        <a href="#" x-data
                                            x-on:click="$dispatch('open-modal', '{{ 'modal-' . $experiencia->id }}')"
                                            class="bg-blue-500 hover:bg-green-500 text-white rounded-lg px-4 py-2 border border-blue-500 transition">
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
                                    <p class="font-bold bg-green-500 text-lg mb-2">Precio: {{ $experiencia->precio }} €
                                    </p>
                                    <p class="text-white">{{ $experiencia->descripcionLarga }}</p>
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
    <style>
        .banner {
            background: url('{{ asset('images/cueva2.jpg') }}');
            background-repeat: no-repeat;
            background-size: cover
        }
    </style>
    <style>
        .banner2 {
            background: url('{{ asset('images/brujula2.jpg') }}');
            background-repeat: no-repeat;
            background-size: cover
        }
    </style>
</body>

</html>
