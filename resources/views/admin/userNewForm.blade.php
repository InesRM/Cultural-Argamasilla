<x-layout-admin>
    <!-- Contenido principal -->
    <section class="container px-6 py-8 mx-auto">
        <!-- Título de la sección -->
        <div class="flex justify-between items-center py-6">
            <h1 class="text-2xl font-extrabold text-white">
                Creación de un nuevo usuario
            </h1>

            <button id="enviarFormulario" 
                class="flex items-center justify-center px-5 py-3 bg-blue-500 text-white text-sm font-semibold rounded-lg shadow-md hover:bg-pink-700 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                </svg>
                Guardar
            </button>
        </div>

        <!-- Formulario de creación de usuario -->
        <form id="formulario" method="post" action="{{ route('admin.storeUser') }}" class="bg-white shadow-lg rounded-xl p-8">
            @csrf

            <!-- Nombre y Apellidos -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="nombre" class="block text-sm font-medium text-gray-700 mb-2">Nombre</label>
                    <input type="text" name="nombre" id="nombre" 
                        class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" 
                        placeholder="Nombre" required autofocus>
                </div>

                <div>
                    <label for="apellidos" class="block text-sm font-medium text-gray-700 mb-2">Apellidos</label>
                    <input type="text" name="apellidos" id="apellidos" 
                        class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" 
                        placeholder="Apellidos" required>
                </div>
            </div>

            <!-- Edad, Teléfono y Email -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                <div>
                    <label for="edad" class="block text-sm font-medium text-gray-700 mb-2">Edad</label>
                    <input type="number" name="edad" id="edad" 
                        class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" 
                        placeholder="18" required>
                </div>

                <div>
                    <label for="telefono" class="block text-sm font-medium text-gray-700 mb-2">Teléfono</label>
                    <input type="text" name="telefono" id="telefono" 
                        class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" 
                        placeholder="Teléfono" required>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                    <input type="email" name="email" id="email" 
                        class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" 
                        placeholder="Email" required>
                </div>
            </div>

            <!-- Dirección, Ciudad y Rol -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                <div>
                    <label for="direccion" class="block text-sm font-medium text-gray-700 mb-2">Dirección</label>
                    <input type="text" name="direccion" id="direccion" 
                        class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" 
                        placeholder="Dirección" required>
                </div>

                <div>
                    <label for="ciudad" class="block text-sm font-medium text-gray-700 mb-2">Ciudad</label>
                    <input type="text" name="ciudad" id="ciudad" 
                        class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" 
                        placeholder="Ciudad" required>
                </div>

                <div>
                    <label for="rol" class="block text-sm font-medium text-gray-700 mb-2">Rol</label>
                    <select name="rol" id="rol" 
                        class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" 
                        required>
                        <option value="asistente">Asistente</option>
                        <option value="empresa">Empresa</option>
                        <option value="admin">Administrador</option>
                    </select>
                </div>
            </div>

            <!-- Password -->
            <div class="mt-6">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Contraseña</label>
                <input type="password" name="password" id="password" 
                    class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" 
                    placeholder="********" required>
            </div>

            <!-- Empresa (solo se muestra si el rol es Empresa) -->
            <div id="empresas" class="mt-6 hidden">
                <label for="empresaSeleccionada" class="block text-sm font-medium text-gray-700 mb-2">Empresa</label>
                <select name="empresa_id" id="empresaSeleccionada" 
                    class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    @foreach($empresas as $empresa)
                        @if($empresa->nombre != 'admin' && $empresa->nombre != 'asistente')
                            <option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
                        @endif
                    @endforeach
                </select>
                <p class="mt-2 text-sm text-gray-500">Selecciona la empresa asociada al usuario.</p>
            </div>
        </form>
    </section>
</x-layout-admin>
