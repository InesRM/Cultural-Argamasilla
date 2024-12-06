@props(['active'])

@php
$classes = ($active ?? false)
    ? 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-large leading-5 text-white bg-gradient-to-r from-pink-200 via-pink-400 to-pink-900 focus:outline-none transition duration-150 ease-in-out'
    : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-large leading-5 text-pink-100 hover:text-pink-500 dark:hover:text-gray-900 hover:border-pink-600 dark:hover:border-gray-900 focus:outline-none focus:text-gray-900 dark:focus:text-gray-300 focus:border-pink-500 dark:focus:border-pink-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

