<x-layout-admin>
    <!-- Content -->

    <div class="p-4 text-gray-600">
        <h1 class="mb-8 text-center text-3xl font-bold text-indigo-900">Datos de la empresa</h1>

        <ul class="grid place-content-center sm:grid-cols-2 gap-8">
            <li class="sm:flex items-center">
                <div class="px-4 text-xl font-extralight text-indigo-700">01. Razón Social</div>

                <p class="max-w-xs py-2 text-sm text-indigo-900">{{$empresa->nombre}}</p>

            </li>
            <li class="sm:flex items-center">
                <div class="px-4 text-xl font-extralight text-indigo-700">02. Domicilio Social</div>


                <p class="max-w-xs py-2 text-sm text-indigo-900">{{$empresa->direccion}}
                </p>

            </li>
            <li class="sm:flex items-center">
                <div class="px-4 text-xl font-extralight text-indigo-700">03. Teléfono</div>

                <p class="max-w-xs py-2 text-sm text-indigo-900">We design the right solution for your business.
                    {{$empresa->telefono}}
                </p>

            </li>
            <li class="sm:flex items-center">
                <div class="px-4 text-xl font-extralight text-indigo-700">04. Email</div>


                <p class="max-w-xs py-2 text-sm text-indigo-900">{{$empresa->email}}
                </p>

            </li>
            <li class="sm:flex items-center">
                <div class="px-4 text-xl font-extralight text-indigo-700">05. web</div>


                <a href="{{$empresa->web}}" class="max-w-xs py-2 text-sm text-indigo-900">Web de la empresa
                </a>

            </li>
            <li class="sm:flex items-center">
                <div class="px-4 text-xl font-extralight text-indigo-700">06. Mas info</div>


                <p class="max-w-xs py-2 text-sm text-indigo-900">{{$empresa->informacionExtra}}
                </p>

            </li>
        </ul>
    </div>

    <!-- End Content -->
</x-layout-admin>