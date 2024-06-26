@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block font-semibold py-2.5 px-4 rounded hover:bg-blue-600 hover:text-white transition duration-300 ease-in-out'
            : 'block font-semibold py-2.5 px-4 rounded hover:bg-blue-600 hover:text-white transition duration-300 ease-in-out';
@endphp

<a {{ $attributes->class(['block py-2.5 px-4 rounded'])->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
