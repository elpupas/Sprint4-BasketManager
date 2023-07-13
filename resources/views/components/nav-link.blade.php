@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center bg-purple-800 px-3 pt-1 border-b-2 border-yellow-500 dark:border-black text-sm font-medium leading-5 text-white hover:text-yellow-300 dark:text-gray-100 focus:outline-none focus:border-indigo-700 transition duration-120 ease-in-out'
            : 'inline-flex items-center px-4 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-black-500 dark:text-gray-400 hover:text-blue-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-700 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
