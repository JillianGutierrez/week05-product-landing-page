@props([
    'name',
    'role',
    'message',
    'avatarColor' => 'bg-orange-100 text-orange-600',
])

<div class="h-full bg-white rounded-2xl p-6 sm:p-7
            shadow-md border border-gray-100
            hover:shadow-xl transition duration-300">

    <!-- Rating -->
    <div class="flex gap-1 text-yellow-400 text-lg">
        ★ ★ ★ ★ ★
    </div>

    <!-- Message -->
    <p class="mt-5 text-gray-600 leading-relaxed text-sm sm:text-base">
        "{{ $message }}"
    </p>

    <!-- Customer -->
    <div class="mt-6 flex items-center gap-4">

        <div class="w-12 h-12 flex-shrink-0 rounded-full
                    {{ $avatarColor }}
                    flex items-center justify-center
                    font-bold text-lg">
            {{ strtoupper(substr($name, 0, 1)) }}
        </div>

        <div>

            <h4 class="font-bold text-gray-900">
                {{ $name }}
            </h4>

            <p class="text-sm text-gray-500">
                {{ $role }}
            </p>

        </div>

    </div>

</div>
