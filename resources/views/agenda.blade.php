<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Eventos</title>
    <link rel="shortcut icon" href="{{ asset('/images/escudo-argamasilla.jpg') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal banner2">
    <!-- Header -->
    <header class="bg-white shadow p-6 banner">
        {{-- foto de agenda --}}
        {{-- <img src="{{ asset('images/agenda.jpg') }}" alt="Agenda de Eventos" class="w-24 h-12"> --}}
        <h1 class="text-4xl font-serif font-bold ml-4 text-center text-white">
            {{ __('Agenda Cultural') }}
        </h1>
        <div class="flex items-left justify-between p-4">
            <a href="{{ route('welcome') }}">
                <img src="{{ asset('/images/escudo-argamasilla.jpg') }}" class="w-12 h-auto" alt="Inicio">
            </a>
        </div>
        <div class="w-full bg-red-600 bg-opacity-40">
            <p class="text-4xl font-serif font-bold ml-4 text-left text-white p-2">Argamasilla de Calatrava</p>
        </div>
        <nav class="w-full bg-gray-800 bg-opacity-40">
            <ul class="flex justify-end space-x-4 p-2 bg-gray-600 bg-opacity-40">
                <li>
                    <div class="text-xl text-center pt-4">
                        <a href="{{ route('welcome') }}"
                            class="text-lg text-white font-bold hover:text-blue-200">Inicio</a>
                    </div>
                </li>
                <li>
                    <div class="text-xl text-center pt-4">
                        <a href="{{ route('agenda') }}"
                            class="text-lg text-white font-bold hover:text-blue-200">Agenda</a>
                    </div>
                </li>
                <li>
                    <div class="text-xl text-center pt-4">
                        <a href="{{ route('experiencias.show') }}"
                            class="text-lg text-white font-bold hover:text-blue-200">Experiencias</a>
                    </div>
                </li>
            </ul>
        </nav>

    </header>
    <div class="container mx-auto p-6 bg-white">
        <div class="py-8 px-4">

            <form action="{{ route('agenda') }}" method="get"
                class="flex flex-col md:flex-row md:justify-center items-center mb-8 bg-blue-100 p-2">
                @csrf
                <label for="categoria" class="text-blue-600 mr-2">Categoría:</label>
                <select name="categoria" class="rounded border-black shadow-sm mr-4 p-2">
                    <option value="">Todas las categorías</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}" @if ($categoriaFiltro == $categoria->id) selected @endif>
                            {{ $categoria->nombre }}
                        </option>
                    @endforeach
                </select>

                <label for="tiempo" class="text-blue-600 mr-2">Fecha:</label>
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

            <div class="flex flex-col md:flex-row items-center">
                <!-- Sidebar Section -->
                <div class="w-full md:w-1/3 mb-8 md:mb-0 md:pr-8 bg-white bg-opacity-50 p-4">
                    <p class="text-blue-500 uppercase tracking-wide font-bold">Programación Cultural</p>
                    <h3 class="text-3xl font-bold text-gray-800 leading-snug mb-4">Agenda De Eventos</h3>
                    <p class="text-gray-600 mb-4">Explora los próximos eventos que se han programado para ti.</p>
                    <img src="{{ asset('/images/office2.jpg') }}" alt="Experiencias">
                </div>
            </div>


            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($eventos as $evento)
                    <div
                        class="bg-blue-100 shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition duration-300">
                        <div class="img-container">
                            <img src="{{ asset('/images/' . $evento->imagen) }}" alt="{{ $evento->nombre }}">
                        </div>
                        <div class="p-4">
                            <h2 class="text-xl font-semibold text-blue-800 mb-2">{{ $evento->nombre }}</h2>
                            <p class="text-gray-600 text-base mb-3">
                                {{ \Illuminate\Support\Str::limit($evento->descripcion, 100) }}</p>
                            <div class="flex items-center justify-between">
                                <span class="bg-blue-400 rounded-full px-3 py-1 text-sm font-semibold text-white">
                                    #{{ $evento->categoria->nombre }}
                                </span>
                                <button
                                    class="bg-green-600 hover:bg-blue-800 text-white font-semibold py-2 px-4 rounded transition"
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
        </div>
        <div class="mt-6">
            {{ $eventos->links() }}
        </div>

    </div>
    <style>
        .banner {
            background: url('{{ asset('images/cueva2.jpg') }}');
            background-repeat: no-repeat;
            background-size: cover
        }
    </style>
    {{-- <style>
            .banner2 {
                background: url('{{ asset('images/office.jpg') }}');
                background-repeat: no-repeat;
                background-size: cover
            }
        </style> --}}

    <script src="//unpkg.com/alpinejs" defer></script>
</body>

</html>
