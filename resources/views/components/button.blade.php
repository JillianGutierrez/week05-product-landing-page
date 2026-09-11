@props(['href' => '#', 'variant' => 'primary'])

@php
    $base = 'relative inline-block px-7 py-3.5 font-semibold rounded-full transition-all duration-300 text-center overflow-hidden';

    $variants = match($variant) {
        'secondary' => 'border-2 border-orange-500 text-orange-600 hover:bg-orange-500 hover:text-white',
        'white'     => 'bg-white text-orange-600 hover:bg-orange-50 shadow-lg',
        default     => 'btn-glow bg-orange-500 text-white hover:bg-orange-600 shadow-lg shadow-orange-500/40',
    };
@endphp

<a href="{{ $href }}"
   {{ $attributes->merge(['class' => "$base $variants"]) }}>
    {{-- Shimmer layer (only on primary) --}}
    @if($variant === 'primary')
        <span class="btn-shimmer" aria-hidden="true"></span>
    @endif
    <span class="relative z-10">{{ $slot }}</span>
</a>
