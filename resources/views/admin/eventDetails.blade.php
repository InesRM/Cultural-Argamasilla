<x-layout-admin>
    <!-- Contenido principal -->
    <section class="container px-6 py-8 mx-auto">
        <div class="flex flex-col lg:flex-row items-center lg:items-start gap-8 bg-white shadow-lg rounded-xl p-8">
            
            <!-- Imagen del evento -->
            <div class="flex-shrink-0">
                <img 
                    class="w-full lg:w-[400px] h-auto rounded-xl object-cover shadow-md" 
                    src="{{ asset('/images/' . $evento->imagen) }}" 
                    alt="Imagen del evento {{ $evento->nombre }}">
            </div>

            <!-- Detalles del evento -->
            <div class="flex-grow">
                <!-- Título del evento -->
                <h1 class="text-4xl font-extrabold text-indigo-800 mb-6">{{ $evento->nombre }}</h1>

                <!-- Descripción -->
                <div class="mb-6">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2">📄 Descripción</h2>
                    <p class="text-gray-700 text-base leading-relaxed">{{ $evento->descripcion }}</p>
                </div>

                <!-- Fecha -->
                <div class="mb-6">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2">📅 Fecha</h2>
                    <p class="text-gray-700 text-base">{{ \Carbon\Carbon::parse($evento->fecha)->format('d/m/Y') }}</p> 
                </div>

                <!-- Boton de acción -->
                <div class="mt-8 flex gap-4">
                    <a href="{{ url()->previous() }}" 
                        class="px-6 py-3 bg-gray-600 text-white font-semibold rounded-lg hover:bg-gray-700 transition-all">
                        Volver
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layout-admin>
