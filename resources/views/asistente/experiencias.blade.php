<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Experiencias') }}
        </h2>
    </x-slot>

    <div class="p-8 rounded-lg">


        <!-------------------------------------------------->
        <!-- component -->
        <section>
            <div class=" dark:bg-gray-800 py-8">
                <div class="container mx-auto flex flex-col items-start md:flex-row my-12 md:my-24">
                    <div class="flex flex-col w-full sticky md:top-36 lg:w-1/3 mt-2 md:mt-12 px-8">
                        <p class="ml-2 text-green-500 uppercase tracking-loose">Cronología</p>
                        <p class="text-3xl md:text-4xl leading-normal md:leading-relaxed mb-2">Agenda de experiencias
                        </p>
                        <p class="text-sm md:text-base mb-4">
                            Echa un vistazo a la selección de experiencias agendadas para las proximas semanas.
                        </p>
                        <a href="#" class="bg-transparent mr-auto hover:bg-green-500 text-green-500 rounded shadow hover:shadow-lg py-2 px-4 border border-green-500 hover:border-transparent">
                            Explore Now</a>
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
                                        <p class="mb-3 text-base text-green-500">
                                            {{$experiencia->fechaInicio}}
                                        </p>
                                        <h4 class="mb-3 font-bold text-lg md:text-2xl">
                                            {{$experiencia->nombre}}
                                        </h4>
                                        <p class="text-sm md:text-base leading-snug text-black-50 text-opacity-100 mb-4">
                                            {{$experiencia->descripcionLarga}}
                                        </p>
                                        <div class="flex"><a href="{{$experiencia->empresa->web}}" class="bg-transparent mr-auto hover:bg-green-500 rounded shadow hover:shadow-lg py-2 px-4 border border-green-500 hover:border-transparent">
                                                Inscribete</a>
                                            <a href="#" x-data x-on:click="$dispatch('open-modal', '{{ 'modal-' . $experiencia->id }}')" class="bg-transparent mr-auto hover:bg-green-500 rounded shadow hover:shadow-lg py-2 px-4 border border-green-500 hover:border-transparent">
                                                Info</a>
                                        </div>

                                    </div>
                                </div>
                                @else
                                <div class="mb-8 flex justify-between items-center w-full right-timeline">
                                    <div class="order-1 w-5/12"></div>
                                    <div class="order-1  w-5/12 px-1 py-4 text-left">
                                        <p class="mb-3 text-base text-green-500">
                                            {{$experiencia->fechaInicio}}
                                        </p>
                                        <h4 class="mb-3 font-bold text-lg md:text-2xl">
                                            {{$experiencia->nombre}}
                                        </h4>
                                        <p class="text-sm md:text-base leading-snug text-black-50 text-opacity-100 mb-4">
                                            {{$experiencia->descripcionLarga}}
                                        </p>
                                        <div class="flex"><a href="{{$experiencia->empresa->web}}" class="bg-transparent mr-auto hover:bg-green-500 rounded shadow hover:shadow-lg py-2 px-4 border border-green-500 hover:border-transparent">
                                                Inscribete</a>
                                            <a href="#" x-data x-on:click="$dispatch('open-modal', '{{ 'modal-' . $experiencia->id }}')" class="bg-transparent mr-auto hover:bg-green-500 rounded shadow hover:shadow-lg py-2 px-4 border border-green-500 hover:border-transparent">
                                                Info</a>
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
                            <img class="mx-auto -mt-36 md:-mt-36" src="{{asset('/images/celebracion.jpg')}}" />
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-------------------------------------------------->


    </div>
</x-app-layout>
