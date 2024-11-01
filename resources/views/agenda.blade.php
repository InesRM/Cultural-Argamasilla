<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Eventos</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-black font-sans leading-normal tracking-normal banner2">
     <!-- Header -->
     <header class="bg-white shadow p-6 banner">
        {{-- foto de agenda --}}
        {{-- <img src="{{ asset('images/agenda.jpg') }}" alt="Agenda de Eventos" class="w-24 h-12"> --}}
        <h1 class="font-bold text-xl text-white leading-tight text-center">
            {{ __('Agenda De Eventos') }}
        </h1>
        <img src="{{ asset('/images/escudo-argamasilla.png') }}" class="w-12 h-auto" alt="Inicio">
        <nav>
            <ul class="flex space-x-4  bg-gray-800 bg-opacity-90">
                {{-- <li>
                    <div class="row-start-6 text-xl text-center pt-4">
                        <a href="{{ route('welcome') }}"
                            class="text-lg text-white hover:text-blue-900">Inicio</a>
                    </div>
                <li> --}}
                    <div class="row-start-6 text-xl text-center pt-4">
                        <a href="{{ route('agenda') }}"
                            class="text-lg text-white hover:text-blue-900">Agenda</a>
                    </div>
                </li>
                {{-- espacio --}}
                &nbsp;
                <li>
                    <div class="row-start-6 text-xl text-center pt-4">
                        <a href="{{ route('experiencias.show') }}"
                            class="text-lg text-white hover:text-blue-900">Experiencias</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <div class="container mx-auto p-6">
        <div class="py-8 px-4">
            <div class="flex flex-col md:flex-row items-start">
                <!-- Sidebar Section -->
                <div class="w-full md:w-1/3 mb-8 md:mb-0 md:pr-8 bg-white">
                    <p class="text-blue-500 uppercase tracking-wide">Programación Cultural</p>
                    <h3 class="text-3xl font-bold text-gray-800 leading-snug mb-4">Agenda De Eventos</h3>
                    <p class="text-gray-600 mb-4">Explora los próximos eventos que se han programado para ti.</p>
                    <div class="container mx-auto p-4">
                        <a href="{{ url()->previous() }}"
                            class="inline-block bg-green-500 text-white hover:bg-blue-500 rounded-lg px-4 py-2 transition">
                            &larr; Volver
                        </a>
                    </div>
                </div>
            </div>
        <form action="{{ route('agenda') }}" method="get" class="flex flex-col md:flex-row md:justify-center items-center mb-8 bg-black p-2">
            @csrf
            <label for="categoria" class="text-white mr-2">Categoría:</label>
            <select name="categoria" class="rounded border-black shadow-sm mr-4 p-2">
                <option value="">Todas las categorías</option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}" @if ($categoriaFiltro == $categoria->id) selected @endif>
                        {{ $categoria->nombre }}
                    </option>
                @endforeach
            </select>

            <label for="tiempo" class="text-white mr-2">Tiempo:</label>
            <select name="tiempo" class="rounded border-black shadow-sm p-2">
                <option value="">Cualquier momento</option>
                <option value="semana" @if ($filtroTiempo === 'semana') selected @endif>Esta semana</option>
                <option value="mes" @if ($filtroTiempo === 'mes') selected @endif>Este mes</option>
            </select>

            <button type="submit"
                class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded shadow-md mt-4 md:mt-0 md:ml-4">
                <i class="fas fa-search mr-2"></i> Filtrar
            </button>
        </form>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($eventos as $evento)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="img-container">
                        <img src="{{ asset('/images/' . $evento->imagen) }}" alt="{{ $evento->nombre }}">
                    </div>
                    <div class="p-4">
                        <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $evento->nombre }}</h2>
                        <p class="text-gray-600 text-base mb-3">{{ \Illuminate\Support\Str::limit($evento->descripcion, 100) }}</p>
                        <div class="flex items-center justify-between">
                            <span
                                class="bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">
                                #{{ $evento->categoria->nombre }}
                            </span>
                            <button class="bg-blue-600 hover:bg-blue-800 text-white font-semibold py-2 px-4 rounded transition"
                                x-data x-on:click="$dispatch('open-modal', '{{ 'detalles-' . $evento->id }}')">
                                Info
                            </button>
                        </div>
                    </div>
                </div>

                <x-modal>
                    <x-slot name="name">{{ 'detalles-' . $evento->id }}</x-slot>

                    <div class="p-6">
                        <h3 class="text-lg font-bold mb-2">Detalles del Evento</h3>
                        <div class="text-white mb-2">
                            <span class="font-bold">Fecha:</span> {{ $evento->fecha }}
                        </div>
                        <div class="text-white mb-2">
                            <span class="font-bold">Hora:</span> {{ $evento->hora }}
                        </div>
                        <div class="text-white mb-2">
                            <span class="font-bold">Ciudad:</span> {{ $evento->ciudad }}
                        </div>
                        <div class="text-white mb-2">
                            <span class="font-bold">Dirección:</span> {{ $evento->direccion }}
                        </div>
                        <div class="text-white mb-2">
                            <span class="font-bold">Aforo Máximo:</span> {{ $evento->aforoMax }}
                        </div>
                        <div class="text-white">
                            <span class="font-bold">Estado:</span> {{ $evento->estado }}
                        </div>
                    </div>
                </x-modal>
            @endforeach
        </div>

        <div class="mt-6">
            {{ $eventos->links() }}
        </div>

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

    <script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>
