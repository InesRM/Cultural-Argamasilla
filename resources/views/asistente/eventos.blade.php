<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center p-4 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-lg">
            <div class="flex space-x-8">
                <x-subnav-link :href="route('asistente.eventos')" :active="request()->routeIs('asistente.eventos')">
                    {{ __('Todos los eventos') }}
                </x-subnav-link>
                <x-subnav-link :href="route('asistente.eventos.semana')" :active="request()->routeIs('asistente.eventos.semana')">
                    {{ __('Eventos de la semana') }}
                </x-subnav-link>
                <x-subnav-link :href="route('asistente.eventos.mes')" :active="request()->routeIs('asistente.eventos.mes')">
                    {{ __('Eventos del mes') }}
                </x-subnav-link>
            </div>
            <form action="{{ route(Route::currentRouteName()) }}" method="get" class="flex items-center">
                @csrf
                <label for="categoria" class="text-white mr-2">Categorias:</label>
                <select name="categoria" class="w-64 rounded p-2 bg-gray-200">
                    <option selected value="todas">Todas las categorias</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
                <input type="hidden" name="ruta" value="{{ request()->path() }}">
                <button class="ml-2 bg-blue-600 text-white rounded px-4 py-2 hover:bg-blue-700 transition" type="submit">
                    Filtrar
                </button>
            </form>
        </div>
    </x-slot>

    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-600 shadow-md rounded-lg p-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($eventos as $evento)
                        <div class="flex flex-col rounded-lg overflow-hidden shadow-lg transition transform hover:scale-105">
                            <img class="w-full h-48 object-cover" src="{{ asset('/images/' . $evento->imagen) }}" alt="{{ $evento->nombre }}">

                            <div class="p-6 bg-white">
                                <div class="font-bold text-xl mb-2">{{ $evento->nombre }}</div>
                                <p class="text-gray-700 text-base">{{ $evento->descripcion }}</p>

                                @if($evento->estado == 'terminado')
                                    <div class="mt-2 flex items-center bg-blue-500 text-white text-sm font-bold rounded px-4 py-2">
                                        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                                        </svg>
                                        <p>Finalizado el {{$evento->fecha}}</p>
                                    </div>
                                @elseif($evento->estado == 'cancelado')
                                    <div class="mt-2 flex items-center bg-red-500 text-white text-sm font-bold rounded px-4 py-2">
                                        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                                        </svg>
                                        <p>Evento cancelado</p>
                                    </div>
                                @else
                                    <p class="mt-2">Fecha: {{$evento->fecha}}</p>
                                @endif

                                <div class="mt-4 flex justify-between items-center">
                                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">
                                        #{{ $evento->categoria->nombre }}
                                    </span>
                                    <div class="flex items-center space-x-2">
                                        @if($evento->fecha > now() && $evento->estado == 'creado')
                                            <button class="inline-block bg-green-200 rounded border-2 border-green-700 px-2 py-1 text-sm font-semibold text-gray-700 hover:bg-green-300 transition"
                                                    x-data
                                                    x-on:click="$dispatch('open-modal', '{{ 'modal-' . $evento->id }}')">
                                                Inscribirse
                                            </button>
                                        @endif
                                        <button class="inline-block bg-indigo-200 rounded border-2 border-indigo-400 px-2 py-1 text-sm font-semibold text-gray-700 hover:bg-indigo-300 transition"
                                                x-data
                                                x-on:click="$dispatch('open-modal', '{{ 'detalles-' . $evento->id }}')">
                                            Info
                                        </button>
                                    </div>
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
