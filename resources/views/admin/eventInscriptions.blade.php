<x-layout-admin>
    <!-- Contenido principal -->
    <section class="container px-6 py-8 mx-auto">
        <!-- Título de la sección -->
        <div class="flex justify-between items-center py-6">
            <h1 class="text-2xl font-extrabold text-white">
                Inscripciones para el evento "{{ $evento->nombre ?? 'Evento no especificado' }}"
            </h1>
        </div>

        <!-- Formulario de inscripciones -->
        @if(isset($inscripciones) && count($inscripciones) > 0)
            <form action="{{ route('admin.inscriptionsDelete') }}" method="post">
                @csrf
                <!-- Campo oculto para el ID del evento -->
                <input type="hidden" name="evento_id" value="{{ $evento->id }}">

                <div class="bg-white shadow-lg rounded-xl overflow-hidden">
                    <table class="min-w-full bg-white">
                        <thead class="bg-pink-900 text-white">
                            <tr>
                                <th class="py-4 px-6 text-left text-sm font-semibold uppercase tracking-wider">
                                    Seleccionar
                                </th>
                                <th class="py-4 px-6 text-left text-sm font-semibold uppercase tracking-wider">
                                    Usuario Inscrito
                                </th>
                                <th class="py-4 px-6 text-left text-sm font-semibold uppercase tracking-wider">
                                    Número de Entradas
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach($inscripciones as $inscripcion)
                                <tr class="hover:bg-indigo-50 transition-colors">
                                    <!-- Checkbox de selección -->
                                    <td class="py-4 px-6">
                                        <input type="checkbox" value="{{ $inscripcion->id }}" name="eliminarInscripcion[]" class="w-4 h-4 text-indigo-600 border-gray-300 rounded">
                                    </td>

                                    <!-- Nombre del usuario -->
                                    <td class="py-4 px-6 text-gray-800">
                                        {{ $inscripcion->user->nombre }}
                                    </td>

                                    <!-- Número de entradas -->
                                    <td class="py-4 px-6 text-gray-800">
                                        {{ $inscripcion->numEntradas }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Botón para eliminar inscripciones -->
                <div class="flex justify-end mt-6">
                    <button type="submit" 
                        class="px-6 py-3 bg-red-600 text-white font-semibold rounded-lg shadow-md hover:bg-red-700 transition-all">
                        Eliminar Selección
                    </button>
                </div>
            </form>
        @else
            <!-- Mensaje de no hay inscripciones -->
            <div class="flex justify-center items-center bg-yellow-100 text-yellow-800 p-6 rounded-lg mt-10">
                <p class="text-lg font-semibold">No existen inscripciones para este evento.</p>
            </div>
        @endif
    </section>
</x-layout-admin>

