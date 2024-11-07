@props(['active'])

@php
$classes = ($active ?? false)
? 'inline-flex items-center px-1 pt-1 border-b-2 border-white-400 dark:border-white-600 text-sm font-large leading-5
text-blue-700 focus:outline-none focus:border-green-700 transition duration-150 ease-in-out'
: 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-large leading-5 text-blue-700 hover:text-green-700 dark:hover:text-green-900 hover:border-green-300 dark:hover:border-green-700
focus:outline-none focus:text-green-900 dark:focus:text-green-900 focus:border-blue-900 dark:focus:border-green-700
transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
