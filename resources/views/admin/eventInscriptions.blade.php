<x-layout-admin>

    <!-- Content -->
    <section class="container px-4 mx-auto">
        <div class="sm:flex sm:items-center sm:justify-between">

            <div class="flex items-center gap-x-3">
                <h2 class="text-lg font-medium text-gray-800 dark:text-white">Inscripciones del evento
                    "{{$evento->nombre}}"</h2>

            </div>


        </div>


        <div class="sm:flex sm:items-center sm:justify-between">

            <form action="{{ route('admin.inscriptionsDelete') }}" method="post">
                @csrf
                <div class="flex flex-row flex-wrap">

                    @if(count($inscripciones) > 0)
                    @foreach($inscripciones as $inscripcion)

                    <div class="p-5 m-3 bg-slate-100 mt-10 rounded-xl">
                        <ul>
                            <li>
                                <input type="checkbox" value="{{ $inscripcion->id }}" name="eliminarInscripcion[]">
                                <p>Usuario inscrito: {{ $inscripcion->user->nombre }}</p>
                                <p>Numero de entradas reservadas: {{ $inscripcion->numEntradas }}</p>
                            </li>
                        </ul>
                    </div>
                    @endforeach
                </div>
                <button type="submit"
                    class="border-black rounded-xl flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-[#f84525] hover:bg-gray-50">Eliminar
                    inscripciones marcadas</button>
                @else
                <p>No existen inscipciones para este evento</p>
                @endif
            </form>


        </div>
    </section>

    <!-- End Content -->
</x-layout-admin>