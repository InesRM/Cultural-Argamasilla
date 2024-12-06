@props(['active'])

@php
$classes = ($active ?? false)
    ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-white bg-gradient-to-r from-pink-200 via-pink-400 to-pink-900 focus:outline-none focus:border-transparent focus:bg-gradient-to-r focus:from-pink-200 focus:via-pink-400 focus:to-pink-900 transition duration-150 ease-in-out'
    : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gradient-to-r from-pink-200 via-pink-400 to-pink-900 text-white p-2 dark:hover:bg-gradient-to-r from-pink-200 via-pink-400 to-pink-900 text-white p-2 hover:border-gray-300 dark:hover:border-gray-600 focus:outline-none focus:text-gray-800 dark:focus:text-gray-200 focus:bg-gray-50 dark:focus:bg-gray-700 focus:border-gray-300 dark:focus:border-gray-600 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
