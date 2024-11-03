<x-app-layout>
    <x-slot name="header">
        <!-- Navigation Links -->
        <div class="flex justify-between items-center p-6 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg shadow-lg">
            <div class="flex space-x-8">
                <x-subnav-link :href="route('asistente.eventos')" :active="request()->routeIs('asistente.eventos')">
                    {{ __('Todos') }}
                </x-subnav-link>
                <x-subnav-link :href="route('asistente.eventos.semana')" :active="request()->routeIs('asistente.eventos.semana')">
                    {{ __('Esta Semana') }}
                </x-subnav-link>
                <x-subnav-link :href="route('asistente.eventos.mes')" :active="request()->routeIs('asistente.eventos.mes')">
                    {{ __('Este Mes') }}
                </x-subnav-link>
            </div>
            <form action="{{ route(Route::currentRouteName()) }}" method="get" class="flex items-center">
                @csrf
                <label for="categoria" class="text-white mr-2">Categorías:</label>
                <select name="categoria" class="w-48 rounded-lg p-2 bg-gray-200">
                    <option selected value="todas">Todas las categorías</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
                <button class="ml-2 bg-teal-500 text-white rounded-lg px-4 py-2 hover:bg-teal-600 transition" type="submit">
                    Filtrar
                </button>
            </form>
        </div>
    </x-slot>

    <div class="py-10 bg-gray-100">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="bg-white shadow-xl rounded-lg p-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($eventos as $evento)
                        <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition transform hover:-translate-y-1">
                            <img class="w-full h-52 object-cover rounded-t-lg" src="{{ asset('/images/' . $evento->imagen) }}" alt="{{ $evento->nombre }}">
                            <div class="p-6">
                                <h3 class="font-semibold text-lg text-gray-800">{{ $evento->nombre }}</h3>
                                <p class="text-gray-600 mt-2">{{ Str::limit($evento->descripcion, 100) }}</p>

                                <p class="mt-3 text-gray-700">Fecha: {{ $evento->fecha }}</p>

                                <div class="flex justify-between mt-4">
                                    <span class="bg-gray-200 text-sm text-gray-700 rounded-full px-3 py-1">#{{ $evento->categoria->nombre }}</span>

                                    <x-modal>
                                        <x-slot name="name">{{ 'modal-' . $evento->id }}</x-slot>
                                        <div class="p-4 relative">
                                            <button class="absolute top-2 right-2 text-gray-400 hover:text-gray-600" x-on:click="$dispatch('close')">&times;</button>
                                            <form method="POST" action="{{ route('inscripcion.store') }}">
                                                @csrf
                                                <h2 class="text-2xl font-semibold text-indigo-600 mb-4">Formulario de inscripción</h2>
                                                <label for="numEntradas" class="block text-gray-600">Número de Entradas</label>
                                                <input type="number" name="numEntradas" class="w-full mt-1 border border-gray-300 rounded-lg p-2" required>
                                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                <input type="hidden" name="evento_id" value="{{ $evento->id }}">
                                                <button type="submit" class="w-full bg-indigo-500 text-white rounded-lg px-4 py-2 mt-4">Confirmar Inscripción</button>
                                            </form>
                                        </div>
                                    </x-modal>

                                    @if($evento->fecha > now() && $evento->estado == 'creado')
                                        <button class="bg-green-500 text-white rounded-lg px-3 py-1 text-sm" x-data x-on:click="$dispatch('open-modal', '{{ 'modal-' . $evento->id }}')">Inscribirse</button>
                                    @endif

                                    <x-modal>
                                        <x-slot name="name">{{ 'detalles-' . $evento->id }}</x-slot>
                                        <div class="p-4 relative text-center">
                                            <button class="absolute top-2 right-2 text-gray-400 hover:text-gray-600" x-on:click="$dispatch('close')">&times;</button>
                                            <h3 class="text-xl font-semibold mb-4">Detalles del Evento</h3>
                                            <p><strong>Cuándo:</strong> {{ $evento->fecha }} - {{ $evento->hora }}</p>
                                            <p><strong>Dónde:</strong> {{ $evento->ciudad }}, {{ $evento->direccion }}</p>
                                            <p><strong>Aforo máximo:</strong> {{ $evento->aforoMax }}</p>
                                            <p><strong>Estado:</strong> {{ $evento->estado }}</p>
                                        </div>
                                    </x-modal>

                                    <button class="bg-blue-600 text-white rounded-lg px-3 py-1 text-sm" x-data x-on:click="$dispatch('open-modal', '{{ 'detalles-' . $evento->id }}')">Info</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $eventos->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
