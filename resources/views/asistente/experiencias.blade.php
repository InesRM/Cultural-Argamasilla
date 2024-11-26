<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="p-8 rounded-lg bg-white">
        <div class="w-full lg:w-1/3 mb-8">
            <p class="text-pink-900 uppercase tracking-loose text-3xl">Qué hacer</p>
            <p class="text-3xl md:text-4xl leading-normal md:leading-relaxed mb-4">EcoTurismo</p>
            <p class="text-sm md:text-base mb-4">
                Ecoturismo en Castilla-La Mancha, es el viaje para disfrutar de lo mejor de su naturaleza con las
                empresas turísticas comprometidas con su conservación.
            </p>
            <div class="flex flex-col md:flex-row items-center">
                <img src="{{ asset('/images/eco2.jpg') }}" alt="Experiencias" class="w-100 h-50">
            </div>
        </div>
        <section>
            <div class="bg-pink-900 py-8 banner2">
                <div class="container mx-auto flex flex-col items-start my-12 md:my-24 px-8">

                    <!-- Grid de tarjetas para las experiencias -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 w-full">
                        @foreach ($experiencias as $experiencia)
                            <div class="bg-blue-100 rounded-lg shadow-md p-6">
                                <p class="text-base text-blue-500 mb-2">{{ $experiencia->fechaInicio }}</p>
                                <h4 class="font-bold text-lg md:text-xl mb-2">{{ $experiencia->nombre }}</h4>
                                <p class="text-sm md:text-base text-gray-700 mb-4">{{ $experiencia->descripcionLarga }}
                                </p>

                                <!-- Botones de acción -->
                                <div class="flex space-x-2">
                                    <!-- Botón "Contactar" en verde -->
                                    <a href="{{ $experiencia->empresa->web }}" target="_blank" rel="noopener noreferrer"
                                        class="bg-green-600 text-white rounded-md shadow p-2 px-4 hover:bg-green-700 transition-colors">
                                        Contactar
                                    </a>

                                    <!-- Botón "Info" en azul -->
                                    <a href="#" x-data
                                        x-on:click="$dispatch('open-modal', '{{ 'modal-' . $experiencia->id }}')"
                                        class="bg-blue-600 text-white rounded-md shadow p-2 px-4 hover:bg-white hover:text-blue-600 border border-blue-600 transition-colors">
                                        Info
                                    </a>
                                </div>
                            </div>

                            <!-- Modal de Información -->
                            <x-modal>
                                <x-slot name="name">{{ 'modal-' . $experiencia->id }}</x-slot>

                                <div class="p-4">
                                    <img src="{{ asset('/images/' . $experiencia->imagen) }}" alt="">
                                </div>
                                <div class="m-4">
                                    <p><strong>Precio: {{ $experiencia->precio }} €</strong></p>
                                    <p>{{ $experiencia->descripcionLarga }}</p>
                                </div>

                                <x-secondary-button class="m-4" x-data
                                    x-on:click="$dispatch('close-modal', '{{ 'modal-' . $experiencia->id }}')">
                                    {{ __('Cerrar') }}
                                </x-secondary-button>
                            </x-modal>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
