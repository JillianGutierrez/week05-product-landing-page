@props(['name', 'description', 'price', 'features', 'featured' => false, 'image' => ''])

<div class="group bg-white rounded-2xl overflow-hidden shadow-md border border-gray-100
            hover:shadow-2xl hover:-translate-y-2 transition-all duration-300
            {{ $featured ? 'ring-2 ring-orange-500 scale-105' : '' }}">

    @if($image)
        <div class="h-44 overflow-hidden">
            <img src="{{ $image }}"
                 alt="{{ $name }}"
                 class="w-full h-full object-cover
                        group-hover:scale-105 transition duration-300">
        </div>
    @endif

    <div class="p-7">

        @if($featured)
            <div class="inline-block px-3 py-1 mb-4 text-xs font-bold
                        text-white bg-orange-500 rounded-full">
                MOST POPULAR
            </div>
        @endif

        <h3 class="text-2xl font-bold text-gray-900">
            {{ $name }}
        </h3>

        <p class="mt-2 text-gray-500 text-sm">
            {{ $description }}
        </p>

        <div class="mt-6">
            <span class="text-4xl font-extrabold text-gray-900">
                {{ $price }}
            </span>
            <span class="text-gray-500 text-sm">
                starting
            </span>
        </div>

        <ul class="mt-6 space-y-3">
            @foreach($features as $feature)
                <li class="flex items-center gap-3 text-gray-600">
                    <span class="text-orange-500 font-bold">✓</span>
                    {{ $feature }}
                </li>
            @endforeach
        </ul>

        <a href="#contact"
           class="block text-center mt-8 px-5 py-3 rounded-full
                  font-semibold transition duration-300
                  {{ $featured
                      ? 'bg-orange-500 text-white hover:bg-orange-600'
                      : 'border-2 border-orange-500 text-orange-600 hover:bg-orange-500 hover:text-white'
                  }}">
            Choose This
        </a>

    </div>

</div>
