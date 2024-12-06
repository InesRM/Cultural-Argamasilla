<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Eventos</title>
    <link rel="shortcut icon" href="{{ asset('/images/escudo-argamasilla.jpg') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal banner3">
    <!-- Header -->
    <header class="bg-white shadow p-6 banner {{ request()->routeIs('welcome') ? 'home-header' : '' }}">
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
        <div class="w-full bg-pink-900 bg-opacity-60">
            <p class="text-4xl font-serif font-bold ml-4 text-left text-white p-2">Argamasilla Cultural</p>
        </div>

        <nav class="w-full bg-gray-800 bg-opacity-30">
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
                            class="text-lg text-white font-bold hover:text-pink-900 {{ request()->routeIs('agenda') ? 'bg-gradient-to-r from-pink-900 via-pink-400 to-pink-200 text-white p-2' : '' }}">Agenda</a>
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
    </header>
    <!-- Contenido de la página -->
    <div class="container mx-auto p-6 bg-pink-50 bg-opacity-40">

        <div class="flex flex-col md:flex-row items-center">
            <!-- Sidebar Section -->
            <div class="w-full md:w-1/3 mb-8 md:mb-0 md:pr-8 p-4 bg-opacity-40">
                <p class="text-white bg-pink-900 uppercase tracking-wide font-bold p-2">Programación Cultural</p>
                <h3 class="text-3xl font-bold text-gray-800 leading-snug mb-4">Agenda De Eventos</h3>
                <p class="text-gray-600 mb-4">Explora los próximos eventos que se han programado para ti. Puedes
                    registrarte para recibir las próximas programaciones culturales de nuestra localidad y podrás
                    también inscribirte en aquellas que quieras.</p>
            </div>

            <form action="{{ route('agenda') }}" method="get"
                class="flex flex-col md:flex-row md:justify-end items-left mb-6 bg-gradient-to-r from-pink-900 to-pink-200 rounded-lg shadow-lg p-4 max-w-2xl mx-auto">
                @csrf
                <label for="categoria" class="text-white mr-2 p-2">Categoría:</label>
                <select name="categoria" class="rounded border-black shadow-sm p-2">
                    <option value="">Select</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}" @if ($categoriaFiltro == $categoria->id) selected @endif>
                            {{ $categoria->nombre }}
                        </option>
                    @endforeach
                </select>

                <label for="tiempo" class="text-white mr-2 p-2">Fecha:</label>
                <select name="tiempo" class="rounded border-black shadow-sm p-2">
                    <option value="">Fecha</option>
                    <option value="semana" @if ($filtroTiempo === 'semana') selected @endif>Esta semana</option>
                    <option value="mes" @if ($filtroTiempo === 'mes') selected @endif>Este mes</option>
                </select>

                <button type="submit"
                    class="bg-blue-400 hover:bg-pink-500 text-white font-bold py-2 px-4 rounded shadow-md mt-4 md:mt-0 md:ml-4">
                    <i class="fas fa-search mr-2"></i> Filtrar
                </button>
            </form>
        </div>
        <div class="py-8 px-4 bg-white rounded-lg shadow-lg bg-opacity-40 p-2">

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 bg-opacity-40">
                @foreach ($eventos as $evento)
                    <div
                        class="bg-blue-100 shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition duration-300 bg-opacity-40 min-h-[450px] flex flex-col">
                        <!-- Imagen del evento -->
                        <div class="img-container">
                            <img src="{{ asset('/images/' . $evento->imagen) }}" alt="{{ $evento->nombre }}">
                        </div>

                        <!-- Contenido de la tarjeta -->
                        <div class="p-4 flex-grow flex flex-col justify-between">
                            <div>
                                <h2 class="text-xl font-semibold text-blue-800 mb-2">{{ $evento->nombre }}</h2>
                                <p class="text-gray-600 text-base mb-3">
                                    {{ \Illuminate\Support\Str::limit($evento->descripcion, 100) }}
                                </p>
                            </div>
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="bg-blue-400 rounded-full px-3 py-1 text-sm font-semibold text-white">
                                        #{{ $evento->categoria->nombre }}
                                    </span>
                                    <button
                                        class="bg-pink-900 hover:bg-purple-400 text-white font-semibold py-2 px-4 rounded transition"
                                        x-data x-on:click="$dispatch('open-modal', '{{ 'detalles-' . $evento->id }}')">
                                        Info
                                    </button>
                                </div>
                                {{-- Modal de detalles --}}
                                <x-modal>
                                    <x-slot name="name">{{ 'detalles-' . $evento->id }}</x-slot>
                                    <div class="p-4 relative text-center">
                                        <button class="absolute top-2 right-2 text-gray-400 hover:text-gray-600"
                                            x-on:click="$dispatch('close')">&times;</button>
                                        <h3 class="text-xl font-semibold mb-4">Detalles del Evento</h3>
                                        <p><strong>Cuándo:</strong> {{ $evento->fecha }} - {{ $evento->hora }}</p>
                                        <p><strong>Dónde:</strong> {{ $evento->ciudad }}, {{ $evento->direccion }}</p>
                                        <p><strong>Aforo máximo:</strong> {{ $evento->aforoMax }}</p>
                                        <p><strong>Estado:</strong> {{ $evento->estado }}</p>
                                    </div>
                                </x-modal>
                                <!-- Iconos de redes sociales -->
                                <div class="flex justify-center space-x-4 mt-4">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                                        target="_blank" class="hover:scale-110">
                                        <img src="{{ asset('/images/facebook.png') }}" class="w-6 h-6"
                                            alt="Compartir en Facebook">
                                    </a>
                                    <a href="https://api.whatsapp.com/send?text={{ urlencode(url()->current()) }}"
                                        target="_blank" class="hover:scale-110">
                                        <img src="{{ asset('/images/whatsapp.png') }}" class="w-6 h-6"
                                            alt="Compartir en WhatsApp">
                                    </a>
                                    <a href="https://www.instagram.com/" target="_blank" class="hover:scale-110">
                                        <img src="{{ asset('/images/instagram.png') }}" class="w-6 h-6"
                                            alt="Compartir en Instagram">
                                    </a>
                                    <a href="https://biblioteca-argamasilla.blogspot.com/" target="_blank"
                                        class="hover:scale-110">
                                        <img src="{{ asset('/images/argamasilla.png') }}" class="w-6 h-6"
                                            alt="Blog">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        <div class="mt-6">
            {{ $eventos->links() }}
        </div>

    </div>
    <footer class="bg-gradient-to-r from-pink-50 to-pink-900 py-6 bg-opacity-10">
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
            <p class="text-center text-pink-900">© 2024 Argamasilla Cultural</p>
        </div>
    </footer>
    <script src="//unpkg.com/alpinejs" defer></script>
</body>

</html>
