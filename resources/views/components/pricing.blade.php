<section
    id="pricing"
    class="relative overflow-hidden bg-[#fffaf3] py-20 sm:py-24"
>
    {{-- Soft Background Glow --}}
    <div class="absolute -top-24 left-1/4 h-72 w-72 rounded-full bg-orange-200/30 blur-3xl"></div>
    <div class="absolute -bottom-24 right-1/4 h-72 w-72 rounded-full bg-amber-200/30 blur-3xl"></div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="mx-auto mb-12 max-w-2xl text-center sm:mb-14">

            <span class="text-sm font-semibold uppercase tracking-wider text-orange-500">
                Pricing
            </span>

            <h2 class="mt-3 text-3xl font-extrabold text-gray-900 sm:text-4xl">
                Choose Your Coffee Break
            </h2>

            <p class="mt-4 leading-relaxed text-gray-600">
                Whether you're looking for a quick snack or a complete meal,
                we have affordable options for every kind of break.
            </p>

        </div>


        {{-- Pricing Cards --}}
        <div class="grid gap-6 md:grid-cols-3 lg:gap-8">


            {{-- STARTER --}}
            <div
                class="group relative flex h-full flex-col overflow-hidden rounded-3xl
                       border border-white/80
                       bg-white/40
                       p-7
                       shadow-[0_8px_32px_rgba(31,38,135,0.10)]
                       backdrop-blur-2xl
                       transition-all duration-500
                       hover:-translate-y-2
                       hover:bg-white/60
                       hover:shadow-[0_20px_45px_rgba(31,38,135,0.16)]
                       sm:p-8"
            >

                {{-- Glass Highlight --}}
                <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-white to-transparent"></div>

                <span class="text-sm font-bold uppercase tracking-wider text-orange-500">
                    Starter
                </span>

                <h3 class="mt-3 text-2xl font-extrabold text-gray-900">
                    Quick Break
                </h3>

                <p class="mt-2 text-sm text-gray-600">
                    A simple and affordable choice for a short break.
                </p>

                <div class="mt-6">
                    <span class="text-4xl font-extrabold text-gray-900">
                        ₱20+
                    </span>
                </div>

                <div class="my-6 h-px bg-orange-100"></div>

                <ul class="space-y-4 text-sm text-gray-600">

                    <li class="flex gap-3">
                        <span class="font-bold text-orange-500">✓</span>
                        Affordable drink or snack
                    </li>

                    <li class="flex gap-3">
                        <span class="font-bold text-orange-500">✓</span>
                        Perfect for a quick break
                    </li>

                    <li class="flex gap-3">
                        <span class="font-bold text-orange-500">✓</span>
                        Budget-friendly choices
                    </li>

                    <li class="flex gap-3">
                        <span class="font-bold text-orange-500">✓</span>
                        Freshly prepared options
                    </li>

                </ul>

                <div class="mt-auto pt-8">

                    <x-button
                        href="#menu"
                        variant="secondary"
                        class="w-full"
                    >
                        Choose Starter
                    </x-button>

                </div>

            </div>


            {{-- BEST SELLER --}}
            <div
                class="group relative flex h-full flex-col overflow-hidden rounded-3xl
                       border-2 border-orange-400/70
                       bg-white/50
                       p-7
                       shadow-[0_12px_40px_rgba(234,88,12,0.15)]
                       backdrop-blur-2xl
                       transition-all duration-500
                       hover:-translate-y-2
                       hover:bg-white/70
                       hover:shadow-[0_22px_50px_rgba(234,88,12,0.22)]
                       sm:p-8"
            >

                {{-- Popular Badge --}}
                <div class="absolute right-5 top-5 rounded-full bg-orange-500 px-4 py-1.5 text-xs font-bold text-white shadow-md">
                    BEST SELLER
                </div>

                <span class="text-sm font-bold uppercase tracking-wider text-orange-500">
                    Best Seller
                </span>

                <h3 class="mt-3 text-2xl font-extrabold text-gray-900">
                    Coffee + Meal
                </h3>

                <p class="mt-2 max-w-xs text-sm text-gray-600">
                    A satisfying combination for your everyday food trip.
                </p>

                <div class="mt-6">
                    <span class="text-4xl font-extrabold text-gray-900">
                        ₱49+
                    </span>
                </div>

                <div class="my-6 h-px bg-orange-100"></div>

                <ul class="space-y-4 text-sm text-gray-600">

                    <li class="flex gap-3">
                        <span class="font-bold text-orange-500">✓</span>
                        Coffee or milk tea
                    </li>

                    <li class="flex gap-3">
                        <span class="font-bold text-orange-500">✓</span>
                        Java rice or food meal
                    </li>

                    <li class="flex gap-3">
                        <span class="font-bold text-orange-500">✓</span>
                        Great value for a meal
                    </li>

                    <li class="flex gap-3">
                        <span class="font-bold text-orange-500">✓</span>
                        Perfect for lunch or merienda
                    </li>

                </ul>

                <div class="mt-auto pt-8">

                    <x-button
                        href="#menu"
                        class="w-full"
                    >
                        Choose Best Seller
                    </x-button>

                </div>

            </div>


            {{-- PREMIUM --}}
            <div
                class="group relative flex h-full flex-col overflow-hidden rounded-3xl
                       border border-white/80
                       bg-white/40
                       p-7
                       shadow-[0_8px_32px_rgba(31,38,135,0.10)]
                       backdrop-blur-2xl
                       transition-all duration-500
                       hover:-translate-y-2
                       hover:bg-white/60
                       hover:shadow-[0_20px_45px_rgba(31,38,135,0.16)]
                       sm:p-8"
            >

                <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-white to-transparent"></div>

                <span class="text-sm font-bold uppercase tracking-wider text-orange-500">
                    Premium
                </span>

                <h3 class="mt-3 text-2xl font-extrabold text-gray-900">
                    Full Craving
                </h3>

                <p class="mt-2 text-sm text-gray-600">
                    A complete option when you want something more filling.
                </p>

                <div class="mt-6">
                    <span class="text-4xl font-extrabold text-gray-900">
                        ₱79+
                    </span>
                </div>

                <div class="my-6 h-px bg-orange-100"></div>

                <ul class="space-y-4 text-sm text-gray-600">

                    <li class="flex gap-3">
                        <span class="font-bold text-orange-500">✓</span>
                        Premium drink
                    </li>

                    <li class="flex gap-3">
                        <span class="font-bold text-orange-500">✓</span>
                        Filling meal
                    </li>

                    <li class="flex gap-3">
                        <span class="font-bold text-orange-500">✓</span>
                        More food choices
                    </li>

                    <li class="flex gap-3">
                        <span class="font-bold text-orange-500">✓</span>
                        Complete food experience
                    </li>

                </ul>

                <div class="mt-auto pt-8">

                    <x-button
                        href="#menu"
                        variant="secondary"
                        class="w-full"
                    >
                        Choose Premium
                    </x-button>

                </div>

            </div>

        </div>

    </div>
</section>