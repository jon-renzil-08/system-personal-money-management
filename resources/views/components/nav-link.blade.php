@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center p-2 rounded-md bg-sky-400 text-white font-medium transition duration-150 ease-in-out'
            : 'flex items-center p-2 rounded-md text-gray-700 hover:bg-gray-200 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
