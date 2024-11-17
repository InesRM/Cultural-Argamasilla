<x-layout-admin>

    <!-- Content -->
    <section class="container px-4 mx-auto">
        <div class="flex flex-col lg:flex-row items-center lg:items-start gap-6 bg-pink-100 p-6 mt-10 rounded-xl">

            <!-- Imagen del evento -->
            <div class="flex-shrink-0">
                <img
                    class="w-full lg:w-[400px] h-auto rounded-xl object-cover"
                    src="{{ asset('/images/' . $evento->imagen) }}"
                    alt="Imagen del evento {{ $evento->nombre }}">
            </div>

            <!-- Detalles del evento -->
            <div class="flex-grow">
                <h1 class="text-2xl font-bold text-gray-800 mb-4">{{ $evento->nombre }}</h1>

                <div class="mb-4">
                    <h2 class="text-lg font-semibold text-gray-600">Descripción:</h2>
                    <p class="text-gray-700 mt-1">{{ $evento->descripcion }}</p>
                </div>

                <!-- Fecha-->
                <div>
                    <h2 class="text-lg font-semibold text-gray-600">Fecha:</h2>
                    <p class="text-gray-700 mt-1">{{ $evento->fecha }}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Content -->

</x-layout-admin>
