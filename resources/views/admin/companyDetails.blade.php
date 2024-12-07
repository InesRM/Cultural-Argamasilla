<x-layout-admin>
    <!-- Contenido principal -->
    <div class="p-8 bg-white shadow-lg rounded-lg">
        <h1 class="mb-8 text-center text-4xl font-bold text-indigo-900">Datos de la Empresa</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Razón Social -->
            <div class="flex items-center">
                <div class="w-1/3 text-lg font-semibold text-indigo-700">📄 Razón Social:</div>
                <div class="w-2/3 text-base text-gray-800">{{$empresa->nombre}}</div>
            </div>

            <!-- Domicilio Social -->
            <div class="flex items-center">
                <div class="w-1/3 text-lg font-semibold text-indigo-700">🏠 Domicilio Social:</div>
                <div class="w-2/3 text-base text-gray-800">{{$empresa->direccion}}</div>
            </div>

            <!-- Teléfono -->
            <div class="flex items-center">
                <div class="w-1/3 text-lg font-semibold text-indigo-700">📞 Teléfono:</div>
                <div class="w-2/3 text-base text-gray-800">{{$empresa->telefono}}</div>
            </div>

            <!-- Email -->
            <div class="flex items-center">
                <div class="w-1/3 text-lg font-semibold text-indigo-700">✉️ Email:</div>
                <div class="w-2/3 text-base text-gray-800">{{$empresa->email}}</div>
            </div>

            <!-- Sitio Web -->
            <div class="flex items-center">
                <div class="w-1/3 text-lg font-semibold text-indigo-700">🌐 Sitio Web:</div>
                <div class="w-2/3">
                    <a href="{{$empresa->web}}" target="_blank" class="text-blue-600 underline hover:text-blue-800">
                        {{$empresa->web}}
                    </a>
                </div>
            </div>

            <!-- Información Adicional -->
            <div class="flex items-center">
                <div class="w-1/3 text-lg font-semibold text-indigo-700">📘 Más Información:</div>
                <div class="w-2/3 text-base text-gray-800">{{$empresa->informacionExtra}}</div>
            </div>
        </div>

        <div class="mt-8 flex justify-center">
            <button 
                class="px-6 py-3 text-white bg-indigo-600 hover:bg-indigo-700 rounded-lg shadow-md transition-all"
                onclick="window.history.back();">
                Volver
            </button>
        </div>
    </div>
</x-layout-admin>