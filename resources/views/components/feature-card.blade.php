@props(['icon' => '', 'image' => '', 'title', 'description'])

<div class="group bg-white rounded-2xl overflow-hidden
            shadow-md hover:shadow-xl
            transition duration-300
            border border-gray-100">

    @if($image)
        {{-- Image version --}}
        <div class="relative h-44 overflow-hidden">
            <img src="{{ $image }}"
                 alt="{{ $title }}"
                 class="w-full h-full object-cover
                        group-hover:scale-105 transition duration-500">
            {{-- Gradient overlay at the bottom --}}
            <div class="absolute inset-x-0 bottom-0 h-16
                        bg-gradient-to-t from-black/40 to-transparent">
            </div>
        </div>
    @else
        {{-- Icon version --}}
        <div class="h-44 bg-gradient-to-br from-orange-50 to-orange-100
                    flex items-center justify-center">
            <span class="text-6xl group-hover:scale-110 transition duration-300">
                {{ $icon }}
            </span>
        </div>
    @endif

    <div class="p-5 sm:p-6">

        <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-3">
            {{ $title }}
        </h3>

        <p class="text-gray-600 leading-relaxed text-sm sm:text-base">
            {{ $description }}
        </p>

    </div>

</div>
