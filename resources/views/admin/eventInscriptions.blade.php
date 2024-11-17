<x-layout-admin>

    <!-- Content -->
    <section class="container px-4 mx-auto">

        <!-- Título de la sección -->
        <div class="flex justify-between items-center py-6">
            <h2 class="text-2xl font-bold text-pink-800 dark:text-pink-900">
                Inscripciones del evento "{{ $evento->nombre ?? 'Evento no especificado' }}"
            </h2>
        </div>

        <!-- Formulario de inscripciones -->
        @if(isset($inscripciones) && count($inscripciones) > 0)
            <form action="{{ route('admin.inscriptionsDelete') }}" method="post">
                @csrf
                <!-- Campo oculto para el ID del evento -->
                <input type="hidden" name="evento_id" value="{{ $evento->id }}">

                <div class="bg-pink-100 shadow rounded-lg overflow-hidden">
                    <table class="min-w-full bg-pink-100">
                        <thead>
                            <tr>
                                <th class="py-3 px-4 text-left text-sm font-medium text-gray-500 uppercase">
                                    Seleccionar
                                </th>
                                <th class="py-3 px-4 text-left text-sm font-medium text-gray-500 uppercase">
                                    Usuario inscrito
                                </th>
                                <th class="py-3 px-4 text-left text-sm font-medium text-gray-500 uppercase">
                                    Número de entradas
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($inscripciones as $inscripcion)
                                <tr class="border-b">
                                    <td class="py-4 px-4">
                                        <input type="checkbox" value="{{ $inscripcion->id }}" name="eliminarInscripcion[]" class="w-4 h-4">
                                    </td>
                                    <td class="py-4 px-4 text-gray-700">
                                        {{ $inscripcion->user->nombre }}
                                    </td>
                                    <td class="py-4 px-4 text-gray-700">
                                        {{ $inscripcion->numEntradas }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Botón para eliminar inscripciones -->
                <div class="flex justify-end mt-4">
                    <button type="submit" class="bg-red-500 text-white py-2 px-6 rounded-lg shadow hover:bg-red-600 transition">
                        Eliminar Selección
                    </button>
                </div>
            </form>
        @else
            <!-- Mensaje cuando no hay inscripciones -->
            <div class="bg-pink-100 text-pink-800 p-4 rounded-lg mt-6">
                <p>No existen inscripciones para este evento.</p>
            </div>
        @endif
    </section>
    <!-- End Content -->

</x-layout-admin>
