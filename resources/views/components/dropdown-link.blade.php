<a {{ $attributes->merge([
    'class' =>
        'block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 dark:text-gray-300
        hover:bg-gradient-to-r hover:from-pink-200 hover:via-pink-400 hover:to-pink-900 hover:text-white
        focus:outline-none focus:bg-gradient-to-r focus:from-pink-200 focus:via-pink-400 focus:to-pink-900 focus:text-white
        transition duration-150 ease-in-out'
]) }}>
    {{ $slot }}
</a>
