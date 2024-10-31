<x-layout-admin>
    <!-- Content -->

    <!-- component -->
    <section class="container px-4 mx-auto">
        <div class="sm:flex sm:items-center sm:justify-between">
            <div>
                <div class="flex items-center gap-x-3">
                    <h2 class="text-lg font-medium text-gray-800 dark:text-white">Empresas</h2>

                    <span class="px-3 py-1 text-xs text-blue-600 bg-blue-100 rounded-full dark:bg-gray-800 dark:text-blue-400">{{$totalCompanies}}
                        registradas</span>
                </div>

            </div>

            <div class="flex items-center mt-4 gap-x-3">


                <button class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                    <a class="flex items-center justify-center" href=" {{ route('admin.companyNewForm') }}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>



                        <span class="ms-2">Crear empresa</span></a>
                </button>
            </div>
        </div>

        <div class="mt-6 md:flex md:items-center md:justify-between">



        </div>

        <div class="flex flex-col mt-6">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-800">

                                <tr>
                                    <th scope="col" class="py-3.5 px-3 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Nombre
                                    </th>
                                    <th scope="col" class="py-3.5 px-3 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Direccion
                                    </th>

                                    <th scope="col" class="px-3 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Telefono
                                    </th>

                                    <th scope="col" class="px-3 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Email
                                    </th>

                                    <th scope="col" class="px-3 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Web
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Acerca de la empresa
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Opciones</th>

                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">

                                @foreach($empresas as $empresa)

                                <tr>
                                    <td class="px-3 py-4 text-sm font-medium whitespace-nowrap">
                                        <div>
                                            <h2>{{$empresa->nombre}}</h2>

                                        </div>
                                    </td>
                                    <td class="px-3 py-4 text-sm font-medium whitespace-nowrap">
                                        <div>
                                            <p class="font-medium text-gray-800 dark:text-white ">
                                                {{$empresa->direccion}}
                                            </p>

                                        </div>
                                    </td>
                                    <td class="px-3 py-4 text-sm font-medium whitespace-nowrap">
                                        <div>
                                            <p>{{$empresa->telefono}}</p>

                                        </div>
                                    </td>
                                    <td class="px-3 py-4 text-sm font-medium whitespace-nowrap">
                                        <div>
                                            <p class="text-gray-500 dark:text-gray-400">
                                                {{$empresa->email}}
                                            </p>
                                        </div>
                                    </td>
                                    <td class="px-3 py-4 text-sm whitespace-nowrap">
                                        <div>
                                            <p>{{$empresa->web}}</p>
                                        </div>
                                    </td>
                                    <td class="px-3 py-4 text-sm whitespace-nowrap">
                                        <ul class="dropdown ml-3">
                                            <button type="button" class="dropdown-toggle px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg dark:text-gray-300 hover:bg-gray-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                                                </svg>

                                            </button>
                                            <ul class="bg-slate-200 dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md border border-gray-100 w-full max-w-[140px]">
                                                <li class="text-wrap text-center">{{$empresa->informacionExtra}}</li>
                                            </ul>
                                        </ul>
                                    </td>

                                    <td class="px-3 py-4 text-sm whitespace-nowrap">
                                        <div>
                                            <a href="{{ route('admin.companyDelete', ['id' => $empresa]) }}" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-[#f84525] hover:bg-gray-50">Eliminar
                                                Empresa</a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{$empresas->links()}}
                    </div>
                </div>
            </div>
        </div>


    </section>

    <!-- End Content -->
</x-layout-admin>