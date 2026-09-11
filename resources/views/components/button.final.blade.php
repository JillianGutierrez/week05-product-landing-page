@props([
    'href' => '#',
    'variant' => 'primary',
])

@php
    $baseClasses = 'inline-block px-7 py-3.5 font-semibold rounded-full transition duration-300 text-center';

    $variantClasses = match ($variant) {
        'secondary' => 'border-2 border-orange-500 text-orange-600 hover:bg-orange-500 hover:text-white',
        'white' => 'bg-white text-orange-600 hover:bg-orange-50 shadow-lg',
        default => 'bg-orange-500 text-white hover:bg-orange-600 shadow-lg',
    };
@endphp

<a href="{{ $href }}"
   {{ $attributes->merge([
       'class' => $baseClasses . ' ' . $variantClasses
   ]) }}>
    {{ $slot }}
</a>