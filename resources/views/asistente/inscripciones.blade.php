<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mis inscripciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-4 gap-4 p-6 text-gray-900 dark:text-gray-100">
                    @foreach ($inscripciones as $inscripcion)

                    <div class="flex flex-col justify-between max-w-sm rounded overflow-hidden shadow-lg">

                        <img class="w-full h-48 object-cover"
                            src="{{ asset('/images/' . $inscripcion->evento->imagen) }}" alt="Sunset in the mountains">

                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $inscripcion->evento->nombre }}</div>
                            <p class="text-gray-700 text-base">
                                {{ $inscripcion->evento->descripcion }}
                            </p>
                            @if($inscripcion->evento->estado == 'terminado') <div
                                class="flex items-center bg-blue-500 text-white text-sm font-bold rounded px-4 py-3"
                                role="alert">
                                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                                </svg>
                                <p>Finalizado el {{$inscripcion->evento->fecha}}</p>
                            </div>
                            @elseif($inscripcion->evento->estado == 'cancelado') <div
                                class="flex items-center bg-red-500 text-white text-sm font-bold rounded px-4 py-3"
                                role="alert">
                                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                                </svg>
                                <p>Evento cancelado</p>
                            </div>
                            @else
                            <p>
                                Fecha: {{$inscripcion->evento->fecha}}
                            </p>
                            @endif
                        </div>
                        <div class="px-6 pt-4 pb-2 flex flex-col items-center justify-center">
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{ $inscripcion->evento->categoria->nombre }}</span>
                            <p>Entradas reservadas: <span
                                    class="inline-block bg-indigo-400 rounded px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $inscripcion->numEntradas }}</span>
                            </p>

                            <x-modal>
                                <x-slot name="name">{{ 'inscripcion-' . $inscripcion->id }}</x-slot>

                                <div class="w-full p-2 flex flex-col items-center justify-center">

                                    <!--DETALLES DEL EVENTO-->
                                    <div class="my-3 bg-gray-100 flex flex-col items-center">
                                        <h1 class="overline decoration-indigo-500 m-3 text-2xl">Cuando</h1>

                                        <p>{{$inscripcion->evento->fecha}}</p>
                                        <p>{{$inscripcion->evento->hora}}</p>

                                    </div>
                                    <div class="my-3 bg-gray-100 flex flex-col items-center">
                                        <h1 class="overline decoration-indigo-500 m-3 text-2xl">Donde</h1>

                                        <p>{{$inscripcion->evento->ciudad}}</p>
                                        <p>{{$inscripcion->evento->direccion}}</p>

                                    </div>
                                    <div class="my-3 bg-gray-100 flex flex-col items-center">
                                        <h1 class="overline decoration-indigo-500 m-3 text-2xl">Aforo máximo</h1>

                                        <p>{{$inscripcion->evento->aforoMax}}</p>

                                    </div>
                                    <span
                                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Estado:
                                        {{ $inscripcion->evento->estado }}</span>
                                </div>
                            </x-modal>

                            <button
                                class="inline-block bg-indigo-200 rounded border-2 border-indigo-400 px-1 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                                x-data
                                x-on:click="$dispatch('open-modal', '{{ 'inscripcion-' . $inscripcion->id }}')">info</button>

                        </div>
                    </div>

                    @endforeach
                </div>
                {{ $inscripciones->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
