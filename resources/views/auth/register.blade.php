<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
            <!-- Nombre -->
            <div>
                <x-input-label for="nombre" :value="__('Nombre')" />
                <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')"
                    required autofocus autocomplete="nombre" />
                <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
            </div>

            <!-- Apellidos -->
            <div>
                <x-input-label for="apellidos" :value="__('Apellidos')" />
                <x-text-input id="apellidos" class="block mt-1 w-full" type="text" name="apellidos"
                    :value="old('apellidos')" required autofocus autocomplete="apellidos" />
                <x-input-error :messages="$errors->get('apellidos')" class="mt-2" />
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
            <!-- Edad -->
            <div>
                <x-input-label for="edad" :value="__('Edad')" />
                <x-text-input id="edad" class="block mt-1 w-full" type="text" name="edad" :value="old('edad')" required
                    autofocus autocomplete="edad" />
                <x-input-error :messages="$errors->get('edad')" class="mt-2" />
            </div>

            <!-- Teléfono -->
            <div>
                <x-input-label for="telefono" :value="__('Teléfono')" />
                <x-text-input id="telefono" class="block mt-1 w-full" type="text" name="telefono" :value="old('telefono')"
                    required autofocus autocomplete="telefono" />
                <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
            <!-- Dirección -->
            <div>
                <x-input-label for="direccion" :value="__('Dirección')" />
                <x-text-input id="direccion" class="block mt-1 w-full" type="text" name="direccion"
                    :value="old('direccion')" required autofocus autocomplete="direccion" />
                <x-input-error :messages="$errors->get('direccion')" class="mt-2" />
            </div>

            <!-- Ciudad -->
            <div>
                <x-input-label for="ciudad" :value="__('Ciudad')" />
                <x-text-input id="ciudad" class="block mt-1 w-full" type="text" name="ciudad" :value="old('ciudad')"
                    required autofocus autocomplete="ciudad" />
                <x-input-error :messages="$errors->get('ciudad')" class="mt-2" />
            </div>
        </div>

        <!-- Email Address -->
        <div class="mb-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mb-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mb-6">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between">
            <a class="underline text-sm text-gray-100 dark:text-gray-100 hover:text-gray-900 dark:hover:text-gray-900 rounded-md"
                href="{{ route('welcome') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
