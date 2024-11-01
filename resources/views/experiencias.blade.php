<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiencias</title>
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="banner2"> <!-- Cambiado a un fondo claro -->
    <!-- Header -->
    <header class="bg-white shadow p-6 banner">
        <h2 class="font-bold text-xl text-white leading-tight text-center">
            {{ __('Empresas y Experiencias') }}
        </h2>
    </header>

    <div class="container mx-auto p-8">
        <section class="bg-white rounded-lg shadow-lg"> <!-- Mantiene el fondo blanco -->
            <div class="w-full md:w-1/3 mb-8 md:mb-0 md:pr-8 bg-white">
                <p class="text-blue-500 uppercase tracking-wide">Cronología</p>
                <h3 class="text-3xl font-bold text-gray-800 leading-snug mb-4">Agenda de experiencias</h3>
                <p class="text-gray-600 mb-4">Explora las próximas experiencias que una selección de empresas
                    han programado para ti.</p>
                </div>
                <div class="container mx-auto p-4">
                    <a href="{{ url()->previous() }}"
                        class="inline-block bg-green-500 text-white hover:bg-blue-500 rounded-lg px-4 py-2 transition">
                        &larr; Volver
                    </a>
                </div>
            <div class="py-8 px-4">
                <div class="flex flex-col md:flex-row items-start">
                    <!-- Sidebar Section -->

                    <!-- Timeline Section -->
                    <div class="w-full md:w-2/3 bg-white">
                        @php $contador = 0; @endphp
                        @foreach ($experiencias as $experiencia)
                            @php $contador++; @endphp
                            <div class="flex mb-8 items-center {{ $contador % 2 == 0 ? 'flex-row-reverse' : '' }}">
                                <div class="w-5/12"></div>
                                <div class="w-5/12 {{ $contador % 2 == 0 ? 'text-right' : 'text-left' }}">
                                    <div class="p-4">
                                        <img src="{{ asset('/images/' . $experiencia->imagen) }}"
                                            alt="Imagen de {{ $experiencia->nombre }}" class="w-full rounded-lg">
                                    </div>
                                    <p class="text-base text-blue-500 mb-2">{{ $experiencia->fechaInicio }}</p>
                                    <h4 class="font-semibold text-lg md:text-xl text-gray-800 mb-2">
                                        {{ $experiencia->nombre }}</h4>
                                    <p class="text-gray-600 mb-4">{{ $experiencia->descripcionLarga }}</p>
                                    <div class="flex space-x-4">

                                        <a href="{{ $experiencia->empresa->web }}" target="_blank"
                                            rel="noopener noreferrer"
                                            class="bg-blue-500 hover:bg-green-500 text-white hover:text-blue-500 rounded-lg px-4 py-2 border border-blue-500 transition">
                                            Inscríbete
                                        </a>
                                        <a href="#" x-data
                                            x-on:click="$dispatch('open-modal', '{{ 'modal-' . $experiencia->id }}')"
                                            class="bg-blue-500 hover:bg-green-500 text-white hover:text-white rounded-lg px-4 py-2 border border-blue-500 transition">Info</a>
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
            background: url('{{ asset('images/cueva.jpg') }}');
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
