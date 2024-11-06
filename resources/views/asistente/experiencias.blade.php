<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Experiencias') }}
        </h2>
    </x-slot>

    <div class="p-8 rounded-lg">


        <!-------------------------------------------------->
        <!-- component -->
        <section>
            <div class="bg-white py-8">
                <img src="{{asset('/images/brujula.jpg')}}" alt="Experiencias" class="object-cover">
                <div class="container mx-auto flex flex-col items-start md:flex-row my-12 md:my-24">
                    <div class="flex flex-col w-full sticky md:top-36 lg:w-1/3 mt-2 md:mt-12 px-8">
                        <p class="ml-2 text-blue-500 uppercase tracking-loose">Que hacer</p>
                        <p class="text-3xl md:text-4xl leading-normal md:leading-relaxed mb-2">Experiencias
                        </p>
                        <p class="text-sm md:text-base mb-4">
                            Echa un vistazo a la selección de experiencias que nuestra selección de empresas organizadoras de otras ciudades y localidades te proponen
                        </p>
                        {{-- <a href="#" class="bg-purple-300 mr-auto hover:bg-blue-500 text-white rounded shadow hover:shadow-lg py-2 px-4 border border-blue-500 hover:border-transparent">
                            Explora</a> --}}
                    </div>
                    <div class="ml-0 md:ml-12 lg:w-2/3 sticky">
                        <div class="container mx-auto w-full h-full">
                            <div class="relative wrap overflow-hidden p-10 h-full">
                                <div class="border-2-2 border-yellow-555 absolute h-full border" style="right: 50%; border: 2px solid #00ab41; border-radius: 1%;"></div>
                                <div class="border-2-2 border-yellow-555 absolute h-full border" style="left: 50%; border: 2px solid #00ab41; border-radius: 1%;"></div>
                                @php
                                $contador = 0;

                                @endphp
                                @foreach($experiencias as $experiencia)
                                @php
                                $contador++;
                                @endphp
                                @if($contador%2 == 0)
                                <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                                    <div class="order-1 w-5/12"></div>
                                    <div class="order-1 w-5/12 px-1 py-4 text-right">
                                        <p class="mb-3 text-base text-blue-500">
                                            {{$experiencia->fechaInicio}}
                                        </p>
                                        <h4 class="mb-3 font-bold text-lg md:text-2xl">
                                            {{$experiencia->nombre}}
                                        </h4>
                                        <p class="text-sm md:text-base leading-snug text-black-50 text-opacity-100 mb-4">
                                            {{$experiencia->descripcionLarga}}
                                        </p>
                                        <div class="flex space-x-4">
                                            <!-- Botón "Quiero Contactar" en verde -->
                                            <a href="{{ $experiencia->empresa->web }}"
                                                target="_blank"
                                                rel="noopener noreferrer"
                                                class="bg-green-600 text-white mr-auto rounded-md shadow py-2 px-4 hover:bg-green-700 transition-colors">
                                                Contactar
                                             </a>

                                            <!-- Botón "Info" en blanco con texto verde -->
                                            <a href="#"
                                               x-data
                                               x-on:click="$dispatch('open-modal', '{{ 'modal-' . $experiencia->id }}')"
                                               class="bg-blue-600 text-white border border-blue-600 rounded-md shadow py-2 px-4 hover:bg-white hover:text-blue-600 transition-colors">
                                               Info
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                @else
                                <div class="mb-8 flex justify-between items-center w-full right-timeline">
                                    <div class="order-1 w-5/12"></div>
                                    <div class="order-1  w-5/12 px-1 py-4 text-left">
                                        <p class="mb-3 text-base text-blue-500">
                                            {{$experiencia->fechaInicio}}
                                        </p>
                                        <h4 class="mb-3 font-bold text-lg md:text-2xl">
                                            {{$experiencia->nombre}}
                                        </h4>
                                        <p class="text-sm md:text-base leading-snug text-black-50 text-opacity-100 mb-4">
                                            {{$experiencia->descripcionLarga}}
                                        </p>
                                        <div class="flex space-x-4">
                                            <!-- Botón "Quiero Contactar" en verde -->
                                            <a href="{{ $experiencia->empresa->web }}"
                                                target="_blank"
                                                rel="noopener noreferrer"
                                                class="bg-green-600 text-white mr-auto rounded-md shadow py-2 px-4 hover:bg-green-700 transition-colors">
                                                Contactar
                                             </a>

                                            <!-- Botón "Info" en blanco con texto verde -->
                                            <a href="#"
                                               x-data
                                               x-on:click="$dispatch('open-modal', '{{ 'modal-' . $experiencia->id }}')"
                                               class="bg-blue-600 text-white border border-blue-600 rounded-md shadow py-2 px-4 hover:bg-white hover:text-blue-600 transition-colors">
                                               Info
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endif


                                <!---MODAL-->

                                <x-modal>
                                    <x-slot name="name">{{ 'modal-' . $experiencia->id }}</x-slot>

                                    <div class="p-4">
                                        <img src="{{asset('/images/'. $experiencia->imagen)}}" alt="">
                                    </div>
                                    <div class="m-4">
                                        <p><strong>Precio: {{$experiencia->precio}} €</strong></p>
                                        <p>{{$experiencia->descripcionLarga}}</p>
                                    </div>

                                    <x-secondary-button class="m-4" x-data x-on:click="$dispatch('close-modal', '{{ 'modal-' . $experiencia->id }}')">
                                        {{__('Cerrar')}}
                                    </x-secondary-button>






                                </x-modal>

                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-------------------------------------------------->


    </div>
</x-app-layout>
