@props(['active'])

@php
$classes = ($active ?? false)
? 'inline-flex items-center px-1 pt-1 border-b-2 border-white-400 dark:border-white-600 text-sm font-large leading-5
text-gray-900 focus:outline-none focus:border-blue-700 transition duration-150 ease-in-out'
: 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-large leading-5 text-pink-900 hover:text-blue-700 dark:hover:text-blue-900 hover:border-gray-800 dark:hover:border-blue-700
focus:outline-none focus:text-blue-900 dark:focus:text-blue-900 focus:border-blue-900 dark:focus:border-blue-700
transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
