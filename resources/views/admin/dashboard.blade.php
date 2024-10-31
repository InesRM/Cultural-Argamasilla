    <x-layout-admin>

        <!-- Content -->
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
                    <div class="flex justify-between mb-6">
                        <div>
                            <div class="flex items-center mb-1">
                                <div class="text-2xl font-semibold">{{$nUsuarios}}</div>
                            </div>
                            <div class="text-sm font-medium text-gray-400">Usuarios registrados</div>
                        </div>

                    </div>

                    <a href="{{ route('admin.users') }}" class="text-[#f84525] font-medium text-sm hover:text-red-800">View</a>
                </div>
                <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
                    <div class="flex justify-between mb-4">
                        <div>
                            <div class="flex items-center mb-1">
                                <div class="text-2xl font-semibold">{{$nEmpresas}}</div>
                            </div>
                            <div class="text-sm font-medium text-gray-400">Empresas registradas</div>
                        </div>

                    </div>
                    <a href="{{ route('admin.companies') }}" class="text-[#f84525] font-medium text-sm hover:text-red-800">View</a>
                </div>
                <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
                    <div class="flex justify-between mb-6">
                        <div>
                            <div class="text-2xl font-semibold mb-1">{{$nExperiencias}}</div>
                            <div class="text-sm font-medium text-gray-400">Experiencias creadas</div>
                        </div>

                    </div>
                    <a href="{{ route('admin.experiences') }}" class="text-[#f84525] font-medium text-sm hover:text-red-800">View</a>
                </div>


            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
                    <div class="flex justify-between mb-6">
                        <div>
                            <div class="text-2xl font-semibold mb-1">{{$nEventos}}</div>
                            <div class="text-sm font-medium text-gray-400">Eventos creados</div>
                        </div>
                        <div class="flex flex-col justify-between">
                            <div>

                                <div class="text-2xl font-semibold mb-1">{{$eventosActivos}}</div>
                                <div class="text-sm font-medium text-gray-400">Activos
                                </div>
                            </div>
                            <div>

                                <div class="text-2xl font-semibold mb-1">{{$eventosNoActivos}}</div>
                                <div class="text-sm font-medium text-gray-400">No activos</div>
                            </div>
                        </div>

                    </div>
                    <a href="{{ route('admin.events') }}" class="text-[#f84525] font-medium text-sm hover:text-red-800">View</a>
                </div>
                <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
                    <div class="flex justify-between mb-6">
                        <div>
                            <div class="text-2xl font-semibold mb-1">{{$nInscripciones}}</div>
                            <div class="text-sm font-medium text-gray-400">Inscripciones registradas</div>
                        </div>
                        <div class="flex flex-col justify-between">
                            <div>

                                <div class="text-2xl font-semibold mb-1">{{$inscripcionesActivas}}</div>
                                <div class="text-sm font-medium text-gray-400">Activas
                                </div>
                            </div>
                            <div>

                                <div class="text-2xl font-semibold mb-1">{{$inscripcionesNoActivas}}</div>
                                <div class="text-sm font-medium text-gray-400">No activas</div>
                            </div>
                        </div>
                    </div>
                    <!-- FALTAN LOS ENLACES -->
                    <a href="{{ route('inscripciones.index') }}" class="text-[#f84525] font-medium text-sm hover:text-red-800">View</a>
                </div>
            </div>

            <!-- End Content -->
    </x-layout-admin>
