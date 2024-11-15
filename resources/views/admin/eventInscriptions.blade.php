<x-layout-admin>

    <!-- Content -->
    <section class="container px-4 mx-auto">
        <div class="sm:flex sm:items-center sm:justify-between">
            <div class="flex items-center gap-x-3">
                <h2 class="text-lg font-medium text-gray-800 dark:text-white">
                    Inscripciones del evento "{{ $evento->nombre ?? 'Evento no especificado' }}"
                </h2>
            </div>
        </div>

        <div class="sm:flex sm:items-center sm:justify-between">
            @if(isset($inscripciones) && count($inscripciones) > 0)
                <form action="{{ route('admin.inscriptionsDelete') }}" method="post">
                    @csrf
                    <!-- Campo oculto para el ID del evento -->
                    <input type="hidden" name="evento_id" value="{{ $evento->id }}">

                    <div class="flex flex-row flex-wrap">
                        @foreach($inscripciones as $inscripcion)
                            <div class="p-5 m-3 bg-slate-100 mt-10 rounded-xl">
                                <ul>
                                    <li>
                                        <!-- Checkbox para seleccionar la inscripción -->
                                        <input type="checkbox" value="{{ $inscripcion->id }}" name="eliminarInscripcion[]">
                                        <p>Usuario inscrito: {{ $inscripcion->user->nombre }}</p>
                                        <p>Número de entradas reservadas: {{ $inscripcion->numEntradas }}</p>
                                    </li>
                                </ul>
                            </div>
                        @endforeach
                    </div>

                    <!-- Botón para eliminar inscripciones seleccionadas -->
                    <button type="submit"
                        class="border-black rounded-xl flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-[#f84525] hover:bg-gray-50">
                        Eliminar inscripciones marcadas
                    </button>
                </form>
            @else
                <p>No existen inscripciones para este evento.</p>
            @endif
        </div>
    </section>
    <!-- End Content -->

</x-layout-admin>
