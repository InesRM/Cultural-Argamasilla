<x-layout-admin>

    <!-- Content -->

    <!-- component -->
    <section class="container px-4 mx-auto bg-blue-300">
        <div class="sm:flex sm:items-center sm:justify-between">
            <div>
                <div class="flex items-center gap-x-3">
                    <h2 class="text-lg font-medium text-gray-800 dark:text-black">Total Usuarios:</h2>

                    <span
                        class="px-3 py-1 text-xs text-blue-600 bg-blue-100 rounded-full dark:bg-gray-800 dark:text-blue-400">{{$totalUsers}}
                        registrados</span>
                </div>

            </div>

            <div class="flex items-center mt-4 gap-x-3">


                <button
                    class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                    <a class="flex items-center justify-center" href=" {{ route('admin.userCreateForm') }}"><svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>



                        <span class="ms-2">Nuevo Usuario</span></a>
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
                            <thead class="bg-gray-50 dark:bg-gray-500">

                                <tr>
                                    <th scope="col"
                                        class="py-3.5 px-3 text-sm font-normal text-left rtl:text-right text-white">
                                        Usuario
                                    </th>

                                    <th scope="col"
                                        class="px-3 py-3.5 text-sm font-normal text-left rtl:text-right text-white">
                                        Rol
                                    </th>

                                    <th scope="col"
                                        class="px-3 py-3.5 text-sm font-normal text-left rtl:text-right text-white">
                                        Empresa a la que pertenece
                                    </th>

                                    <th scope="col"
                                        class="px-3 py-3.5 text-sm font-normal text-left rtl:text-right text-white">
                                        Direccion
                                    </th>

                                    <th scope="col"
                                        class="px-3 py-3.5 text-sm font-normal text-left rtl:text-right text-white">
                                        Eventos en los que está inscrito</th>

                                    <th scope="col"
                                        class="px-3 py-3.5 text-sm font-normal text-left rtl:text-right text-white">
                                        Contacto</th>

                                    <th scope="col"
                                        class="px-3 py-3.5 text-sm font-normal text-left rtl:text-right text-white">
                                        Opciones</th>

                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">

                                @foreach($users as $user)

                                <tr>
                                    <td class="px-3 py-4 text-sm font-medium whitespace-nowrap">
                                        <div>
                                            <h2 class="font-medium text-gray-800 dark:text-white ">{{$user->nombre}}
                                            </h2>
                                            <p class="text-sm font-normal text-white">
                                                {{ $user->apellidos}}
                                            </p>
                                        </div>
                                    </td>
                                    <td class="px-3 py-4 text-sm font-medium whitespace-nowrap">
                                        <p class="text-white">{{$user->rol}}</p>
                                    </td>
                                    <td class="px-3 py-4 text-sm font-medium whitespace-nowrap">
                                        <div
                                            class="inline px-3 py-1 text-sm font-normal text-blue-600 rounded-full gap-x-2 dark:bg-gray-800">
                                            @if(strcmp($user->empresa->nombre, 'asistente')==0)
                                            No pertenece a ninguna
                                            @else
                                            {{$user->empresa->nombre}}
                                            @endif
                                        </div>
                                    </td>
                                    <td class="px-3 py-4 text-sm whitespace-nowrap">
                                        <div>
                                            <h4 class="text-white">{{$user->direccion}}</h4>
                                            <p class="text-white">{{$user->ciudad}}
                                            </p>
                                        </div>
                                    </td>
                                    <td class="px-3 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center">
                                            @php
                                            $contador = 0;
                                            @endphp
                                            @if(optional($user->inscripcions)->count() > 0)
                                            @foreach($user->inscripcions as $inscripcion)
                                            @if($contador
                                            < 4 && $inscripcion->evento)
                                                <img class="object-cover w-6 h-6 -mx-1 border-2 border-white rounded-full dark:border-gray-700 shrink-0" src="{{ asset('/images/' . $inscripcion->evento->imagen) }}" alt="">
                                                @endif
                                                @php
                                                $contador++;
                                                @endphp
                                                @endforeach
                                                @if($contador > 4)
                                                <p class="flex items-center justify-center w-6 h-6 -mx-1 text-xs text-blue-600 bg-blue-100 border-2 border-white rounded-full">
                                                    +{{$contador-4}}
                                                </p>
                                                @endif
                                                @else
                                                <p class="text-white">No tiene inscripciones</p>
                                                @endif
                                        </div>

                                    </td>

                                    <td class="px-3 py-4 text-sm whitespace-nowrap">
                                        <div>
                                            <p class="text-white">Teléfono: <a class="text-white">{{$user->telefono}}</a></p>
                                            <p class="text-white">Email: <a class="text-white">{{$user->email}}</a></p>
                                        </div>
                                    </td>

                                    <td class="px-3 py-4 text-sm whitespace-nowrap">
                                        <ul class="dropdown ml-3">
                                            <button type="button" class="dropdown-toggle px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg dark:text-gray-300 hover:bg-gray-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                                </svg>
                                            </button>
                                            <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-blue-600 border border-gray-100 w-full max-w-[140px]">
                                                @if(strcmp($user->empresa->nombre, 'asistente') !== 0)
                                                <li>
                                                    <a href="{{route('admin.companyDetails', ['id' => $user->empresa_id])}}" class="flex items-center text-[13px] py-1.5 px-4 text-white hover:text-[#f84525] hover:bg-gray-50">Ver
                                                        empresa</a>
                                                </li>
                                                @endif
                                                <li>
                                                    <a href="{{ route('admin.userDelete', ['id' => $user]) }}" class="flex items-center text-[13px] py-1.5 px-4 text-white hover:text-[#f84525] hover:bg-gray-50">Eliminar</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('admin.userUpdateForm', ['id' => $user])}}" class="flex items-center text-[13px] py-1.5 px-4 text-white hover:text-[#f84525] hover:bg-gray-50">Modificar</a>
                                                </li>
                                            </ul>
                                        </ul>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{-- {{$users->links()}} --}}
                        <div class="bg-black text-white py-2 rounded-lg">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <!-- End Content -->
</x-layout-admin>
