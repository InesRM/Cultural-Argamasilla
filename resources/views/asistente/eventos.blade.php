<x-app-layout>

    <x-slot name="header">
        <div class="flex">
            <!-- Navigation Links -->

            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <x-subnav-link :href="route('asistente.eventos')" :active="request()->routeIs('asistente.eventos')">
                    {{ __('Todos los eventos') }}
                </x-subnav-link>
            </div>
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <x-subnav-link :href="route('asistente.eventos.semana')"
                    :active="request()->routeIs('asistente.eventos.semana')">
                    {{ __('Eventos de la semana') }}
                </x-subnav-link>
            </div>
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <x-subnav-link :href="route('asistente.eventos.mes')"
                    :active="request()->routeIs('asistente.eventos.mes')">
                    {{ __('Eventos del mes') }}
                </x-subnav-link>
            </div>
        </div>
        <div class="flex justify-center">
            <form action="{{route(Route::currentRouteName())}}" method="get" class="mt-4">
                @csrf
                <!-- Token de seguridad para formularios en Laravel -->

                <label for="categoria">Categorias:</label>
                <select name="categoria" class="w-64 rounded">
                    <option selected value="todas">Todas las categorias </option>
                    @foreach($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                    @endforeach
                </select>
                <input type="hidden" name="ruta" value="{{request()->path()}}">
                <button
                    class="inline-block bg-green-200 rounded border-2 border-green-700 px-1 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                    type="submit">Filtrar</button>
            </form>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg bg-opacity-80">
                <div class="grid grid-cols-4 gap-4 p-6 text-gray-900 dark:text-gray-100">
                    @foreach ($eventos as $evento)

                    <div class="flex flex-col justify-between max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full h-48 object-cover" src="{{ asset('/images/' . $evento->imagen) }}"
                            alt="Sunset in the mountains">

                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $evento->nombre }}
                            </div>

                            <p class="text-gray-700 text-base">
                                {{ $evento->descripcion }}
                            </p>
                            @if($evento->estado == 'terminado') <div
                                class="flex items-center bg-blue-500 text-white text-sm font-bold rounded px-4 py-3"
                                role="alert">
                                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                                </svg>
                                <p>Finalizado el {{$evento->fecha}}</p>
                            </div>
                            @elseif($evento->estado == 'cancelado') <div
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
                                Fecha: {{$evento->fecha}}
                            </p>
                            @endif

                        </div>

                        <div class="px-6 pt-4 pb-2 flex flex-row justify-between">
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{ $evento->categoria->nombre }}</span>
                            <x-modal>
                                <x-slot name="name">{{ 'modal-' . $evento->id }}</x-slot>

                                <div class="w-full p-2 flex justify-center">

                                    <form class="w-2/3" method="POST" action="{{ route('inscripcion.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <h1 class="overline decoration-indigo-500 m-3 text-2xl">Formulario de
                                            inscripción</h1>

                                        <!-- Numero de Entradas -->
                                        <div>
                                            <x-input-label for="numEntradas" :value="__('Numero de Entradas')" />
                                            <x-text-input id="numEntradas" class="block mt-1 w-full border-indigo-400"
                                                type="number" name="numEntradas" :value="old('numEntradas')" required
                                                autofocus autocomplete="numEntradas" />
                                            <x-input-error :messages="$errors->get('numEntradas')" class="mt-2" />
                                        </div>
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="evento_id" value="{{ $evento->id }}">
                                        <div class="m-3">
                                            <button
                                                class="inline-block bg-green-200 rounded border-solid border-2 border-green-700 px-1 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                                                type="submit">Confirmar Inscripción</button>
                                        </div>


                                    </form>
                                </div>
                            </x-modal>
                            @if($evento->fecha > now() && $evento->estado == 'creado')
                            <button
                                class="inline-block bg-green-200 rounded border-2 border-green-700 px-1 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                                x-data
                                x-on:click="$dispatch('open-modal', '{{ 'modal-' . $evento->id }}')">Inscribirse</button>
                            @endif
                            <x-modal>
                                <x-slot name="name">{{ 'detalles-' . $evento->id }}</x-slot>

                                <div class="w-full p-2 flex flex-col items-center justify-center">

                                    <!--DETALLES DEL EVENTO-->
                                    <div class="my-3 bg-gray-100 flex flex-col items-center">
                                        <h1 class="overline decoration-indigo-500 m-3 text-2xl">Cuando</h1>

                                        <p>{{$evento->fecha}}</p>
                                        <p>{{$evento->hora}}</p>

                                    </div>
                                    <div class="my-3 bg-gray-100 flex flex-col items-center">
                                        <h1 class="overline decoration-indigo-500 m-3 text-2xl">Donde</h1>

                                        <p>{{$evento->ciudad}}</p>
                                        <p>{{$evento->direccion}}</p>

                                    </div>
                                    <div class="my-3 bg-gray-100 flex flex-col items-center">
                                        <h1 class="overline decoration-indigo-500 m-3 text-2xl">Aforo máximo</h1>

                                        <p>{{$evento->aforoMax}}</p>

                                    </div>
                                    <span
                                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Estado:
                                        {{ $evento->estado }}</span>
                                </div>
                            </x-modal>

                            <button
                                class="inline-block bg-indigo-200 rounded border-2 border-indigo-400 px-1 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                                x-data
                                x-on:click="$dispatch('open-modal', '{{ 'detalles-' . $evento->id }}')">info</button>
                        </div>
                    </div>

                    @endforeach
                </div>
                {{ $eventos->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
