<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-800 leading-tight">
            {{ __('Mis inscripciones') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-300 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 p-6 text-gray-900 dark:text-gray-800">
                    @foreach ($inscripciones as $inscripcion)
                    <div class="flex flex-col justify-between rounded-lg overflow-hidden shadow-lg bg-white dark:bg-blue-200 transition hover:shadow-xl">

                        <!-- Event Image -->
                        <img class="w-full h-48 object-cover" src="{{ asset('/images/' . $inscripcion->evento->imagen) }}" alt="Imagen del evento">

                        <!-- Event Content -->
                        <div class="px-6 py-4">
                            <h3 class="font-bold text-lg mb-2 text-gray-800">{{ $inscripcion->evento->nombre }}</h3>
                            <p class="text-gray-700 dark:text-gray-800 text-sm mb-4">{{ $inscripcion->evento->descripcion }}</p>

                            <!-- Event Status -->
                            @if($inscripcion->evento->estado == 'terminado')
                                <div class="flex items-center bg-blue-500 text-blue-800 text-sm font-bold rounded-lg px-4 py-2 mb-4">
                                    <svg class="fill-current w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/>
                                    </svg>
                                    <span>Finalizado el {{ $inscripcion->evento->fecha }}</span>
                                </div>
                            @elseif($inscripcion->evento->estado == 'cancelado')
                                <div class="flex items-center bg-red-500 text-white text-sm font-bold rounded-lg px-4 py-2 mb-4">
                                    <svg class="fill-current w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/>
                                    </svg>
                                    <span>Evento cancelado</span>
                                </div>
                            @else
                                <p class="text-blue-800 text-sm mb-4">Fecha: {{ $inscripcion->evento->fecha }}</p>
                            @endif
                        </div>

                        <!-- Tags and Button -->
                        <div class="px-6 pb-4 flex flex-col items-center">
                            <span class="inline-block bg-blue-300 dark:bg-blue-600 rounded-full px-3 py-1 text-sm font-semibold text-blue-700 dark:text-gray-100 mb-2">#{{ $inscripcion->evento->categoria->nombre }}</span>
                            <p class="text-gray-500 dark:text-gray-400 mb-4">Entradas reservadas: <span class="bg-indigo-500 text-white rounded px-2 py-1">{{ $inscripcion->numEntradas }}</span></p>

                            <!-- Info Modal Button -->
                            <x-modal>
                                <x-slot name="name">{{ 'inscripcion-' . $inscripcion->id }}</x-slot>
                                <div class="w-full p-4 flex flex-col items-center">
                                    <!-- Event Details Sections -->
                                    <div class="bg-gray-100 dark:bg-gray-800 p-3 rounded-lg w-full mb-3">
                                        <h3 class="text-indigo-200 text-lg font-semibold">Cuando</h3>
                                        <p class="text-gray-600 dark:text-gray-400">{{ $inscripcion->evento->fecha }}</p>
                                        <p class="text-gray-600 dark:text-gray-400">{{ $inscripcion->evento->hora }}</p>
                                    </div>
                                    <div class="bg-gray-100 dark:bg-gray-800 p-3 rounded-lg w-full mb-3">
                                        <h3 class="text-indigo-200 text-lg font-semibold">Donde</h3>
                                        <p class="text-gray-600 dark:text-gray-400">{{ $inscripcion->evento->ciudad }}</p>
                                        <p class="text-gray-600 dark:text-gray-400">{{ $inscripcion->evento->direccion }}</p>
                                    </div>
                                    <div class="bg-gray-100 dark:bg-gray-800 p-3 rounded-lg w-full mb-3">
                                        <h3 class="text-indigo-200 text-lg font-semibold">Aforo máximo</h3>
                                        <p class="text-gray-600 dark:text-gray-400">{{ $inscripcion->evento->aforoMax }}</p>
                                    </div>
                                    <span class="bg-blue-200 dark:bg-gray-600 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 dark:text-gray-300">Estado: {{ $inscripcion->evento->estado }}</span>
                                </div>
                            </x-modal>

                            <button class="bg-indigo-500 text-white rounded-full px-4 py-2 text-sm font-semibold hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-400" x-data x-on:click="$dispatch('open-modal', '{{ 'inscripcion-' . $inscripcion->id }}')">
                                Más información
                            </button>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{ $inscripciones->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
