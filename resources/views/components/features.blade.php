<section
    id="features"
    class="relative overflow-hidden bg-gradient-to-br from-orange-100 via-orange-50 to-amber-100 py-16 sm:py-20"
>

    {{-- =========================================
        BACKGROUND GLASS LIGHTS
    ========================================== --}}

    <div
        class="absolute -left-20 -top-20 h-64 w-64 rounded-full bg-orange-300/30 blur-3xl"
    ></div>

    <div
        class="absolute -right-20 top-1/3 h-72 w-72 rounded-full bg-yellow-300/25 blur-3xl"
    ></div>

    <div
        class="absolute -bottom-24 left-1/3 h-80 w-80 rounded-full bg-white/40 blur-3xl"
    ></div>


    {{-- =========================================
        MAIN CONTAINER
    ========================================== --}}

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">


        {{-- =========================================
            SECTION HEADER
        ========================================== --}}

        <div class="mx-auto mb-12 max-w-2xl text-center sm:mb-14">

            <span class="text-sm font-semibold uppercase tracking-wider text-orange-500">
                Why Choose Us
            </span>

            <h2 class="mt-3 text-3xl font-extrabold text-gray-900 sm:text-4xl">
                Something Good for Every Break
            </h2>

            <p class="mt-4 leading-relaxed text-gray-600">
                From refreshing drinks to satisfying meals,
                Coffee Break has something to make your day
                a little better.
            </p>

        </div>


        {{-- =========================================
            FEATURES GRID
        ========================================== --}}

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">


            {{-- =========================================
                FEATURE 01
            ========================================== --}}

            <div
                class="group relative overflow-hidden rounded-3xl
                       border border-white/70
                       bg-white/30
                       shadow-[0_8px_32px_rgba(31,38,135,0.12)]
                       backdrop-blur-2xl
                       transition-all duration-500
                       hover:-translate-y-1
                       hover:border-white/90
                       hover:bg-white/40
                       hover:shadow-[0_18px_45px_rgba(31,38,135,0.18)]"
            >

                {{-- Photo --}}
                <div class="relative h-52 overflow-hidden">

                    <img
                        src="{{ asset('images/Freshly-Prepared-Drinks.png') }}"
                        alt="Freshly Prepared Drinks"
                        class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105"
                    >

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent"
                    ></div>

                </div>


                {{-- Glass Reflection --}}
                <div
                    class="absolute inset-x-0 top-0 h-px
                           bg-gradient-to-r from-transparent via-white to-transparent"
                ></div>


                {{-- Soft Glow --}}
                <div
                    class="absolute -right-12 -top-12 h-32 w-32
                           rounded-full bg-orange-300/20 blur-2xl
                           transition group-hover:bg-orange-400/30"
                ></div>


                {{-- Content --}}
                <div class="relative p-6 sm:p-7">

                    <div class="mb-6 flex items-center">

                        <span class="text-sm font-bold text-orange-500">
                            01
                        </span>

                        <div
                            class="mx-4 h-px flex-1
                                   bg-gradient-to-r from-orange-200/80 to-transparent"
                        ></div>

                    </div>

                    <h3 class="mb-3 text-xl font-bold text-gray-900">
                        Freshly Prepared Drinks
                    </h3>

                    <p class="text-sm leading-relaxed text-gray-600 sm:text-base">
                        Enjoy delicious coffee and refreshing drinks
                        prepared fresh for every order.
                    </p>

                </div>


                {{-- Bottom Line --}}
                <div
                    class="absolute bottom-0 left-7 right-7 h-px
                           bg-white/50
                           transition-colors duration-500
                           group-hover:bg-orange-400/60"
                ></div>

            </div>



            {{-- =========================================
                FEATURE 02
            ========================================== --}}

            <div
                class="group relative overflow-hidden rounded-3xl
                       border border-white/70
                       bg-white/30
                       shadow-[0_8px_32px_rgba(31,38,135,0.12)]
                       backdrop-blur-2xl
                       transition-all duration-500
                       hover:-translate-y-1
                       hover:border-white/90
                       hover:bg-white/40
                       hover:shadow-[0_18px_45px_rgba(31,38,135,0.18)]"
            >

                <div class="relative h-52 overflow-hidden">

                    <img
                        src="{{ asset('images/Delicious-Food.png') }}"
                        alt="Delicious Food"
                        class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105"
                    >

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent"
                    ></div>

                </div>

                <div
                    class="absolute inset-x-0 top-0 h-px
                           bg-gradient-to-r from-transparent via-white to-transparent"
                ></div>

                <div
                    class="absolute -bottom-12 -left-12 h-32 w-32
                           rounded-full bg-orange-300/20 blur-2xl
                           transition group-hover:bg-orange-400/30"
                ></div>

                <div class="relative p-6 sm:p-7">

                    <div class="mb-6 flex items-center">

                        <span class="text-sm font-bold text-gray-700">
                            02
                        </span>

                        <div
                            class="mx-4 h-px flex-1
                                   bg-gradient-to-r from-orange-200/80 to-transparent"
                        ></div>

                    </div>

                    <h3 class="mb-3 text-xl font-bold text-gray-900">
                        Delicious Food
                    </h3>

                    <p class="text-sm leading-relaxed text-gray-600 sm:text-base">
                        Satisfy your cravings with burgers, fries,
                        hotdogs, and other tasty food choices.
                    </p>

                </div>

                <div
                    class="absolute bottom-0 left-7 right-7 h-px
                           bg-white/50
                           transition-colors duration-500
                           group-hover:bg-orange-400/60"
                ></div>

            </div>



            {{-- =========================================
                FEATURE 03
            ========================================== --}}

            <div
                class="group relative overflow-hidden rounded-3xl
                       border border-white/70
                       bg-white/30
                       shadow-[0_8px_32px_rgba(31,38,135,0.12)]
                       backdrop-blur-2xl
                       transition-all duration-500
                       hover:-translate-y-1
                       hover:border-white/90
                       hover:bg-white/40
                       hover:shadow-[0_18px_45px_rgba(31,38,135,0.18)]"
            >

                <div class="relative h-52 overflow-hidden">

                    <img
                        src="{{ asset('images/Affordable-Prices.png') }}"
                        alt="Affordable Prices"
                        class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105"
                    >

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent"
                    ></div>

                </div>

                <div
                    class="absolute inset-x-0 top-0 h-px
                           bg-gradient-to-r from-transparent via-white to-transparent"
                ></div>

                <div
                    class="absolute -left-12 -top-12 h-32 w-32
                           rounded-full bg-yellow-300/25 blur-2xl
                           transition group-hover:bg-yellow-400/30"
                ></div>

                <div class="relative p-6 sm:p-7">

                    <div class="mb-6 flex items-center">

                        <span class="text-sm font-bold text-orange-500">
                            03
                        </span>

                        <div
                            class="mx-4 h-px flex-1
                                   bg-gradient-to-r from-orange-200/80 to-transparent"
                        ></div>

                    </div>

                    <h3 class="mb-3 text-xl font-bold text-gray-900">
                        Affordable Prices
                    </h3>

                    <p class="text-sm leading-relaxed text-gray-600 sm:text-base">
                        Enjoy flavorful food and drinks without spending
                        too much — starting at ₱20.
                    </p>

                </div>

                <div
                    class="absolute bottom-0 left-7 right-7 h-px
                           bg-white/50
                           transition-colors duration-500
                           group-hover:bg-orange-400/60"
                ></div>

            </div>



            {{-- =========================================
                FEATURE 04
            ========================================== --}}

            <div
                class="group relative overflow-hidden rounded-3xl
                       border border-white/70
                       bg-white/30
                       shadow-[0_8px_32px_rgba(31,38,135,0.12)]
                       backdrop-blur-2xl
                       transition-all duration-500
                       hover:-translate-y-1
                       hover:border-white/90
                       hover:bg-white/40
                       hover:shadow-[0_18px_45px_rgba(31,38,135,0.18)]"
            >

                <div class="relative h-52 overflow-hidden">

                    <img
                        src="{{ asset('images/Filling-Rice-Meals.png') }}"
                        alt="Filling Rice Meals"
                        class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105"
                    >

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent"
                    ></div>

                </div>

                <div
                    class="absolute inset-x-0 top-0 h-px
                           bg-gradient-to-r from-transparent via-white to-transparent"
                ></div>

                <div
                    class="absolute -bottom-12 -right-12 h-32 w-32
                           rounded-full bg-orange-300/20 blur-2xl
                           transition group-hover:bg-orange-400/30"
                ></div>

                <div class="relative p-6 sm:p-7">

                    <div class="mb-6 flex items-center">

                        <span class="text-sm font-bold text-gray-700">
                            04
                        </span>

                        <div
                            class="mx-4 h-px flex-1
                                   bg-gradient-to-r from-orange-200/80 to-transparent"
                        ></div>

                    </div>

                    <h3 class="mb-3 text-xl font-bold text-gray-900">
                        Filling Rice Meals
                    </h3>

                    <p class="text-sm leading-relaxed text-gray-600 sm:text-base">
                        Choose from a variety of Java Rice meals
                        perfect for a satisfying break.
                    </p>

                </div>

                <div
                    class="absolute bottom-0 left-7 right-7 h-px
                           bg-white/50
                           transition-colors duration-500
                           group-hover:bg-orange-400/60"
                ></div>

            </div>



            {{-- =========================================
                FEATURE 05
            ========================================== --}}

            <div
                class="group relative overflow-hidden rounded-3xl
                       border border-white/70
                       bg-white/30
                       shadow-[0_8px_32px_rgba(31,38,135,0.12)]
                       backdrop-blur-2xl
                       transition-all duration-500
                       hover:-translate-y-1
                       hover:border-white/90
                       hover:bg-white/40
                       hover:shadow-[0_18px_45px_rgba(31,38,135,0.18)]"
            >

                <div class="relative h-52 overflow-hidden">

                    <img
                        src="{{ asset('images/Variety-of-Drinks.jpg') }}"
                        alt="Variety of Drinks"
                        class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105"
                    >

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent"
                    ></div>

                </div>

                <div
                    class="absolute inset-x-0 top-0 h-px
                           bg-gradient-to-r from-transparent via-white to-transparent"
                ></div>

                <div
                    class="absolute -right-12 -top-12 h-32 w-32
                           rounded-full bg-orange-300/20 blur-2xl
                           transition group-hover:bg-orange-400/30"
                ></div>

                <div class="relative p-6 sm:p-7">

                    <div class="mb-6 flex items-center">

                        <span class="text-sm font-bold text-orange-500">
                            05
                        </span>

                        <div
                            class="mx-4 h-px flex-1
                                   bg-gradient-to-r from-orange-200/80 to-transparent"
                        ></div>

                    </div>

                    <h3 class="mb-3 text-xl font-bold text-gray-900">
                        Variety of Drinks
                    </h3>

                    <p class="text-sm leading-relaxed text-gray-600 sm:text-base">
                        Choose from coffee, milk tea, FruiTea, milk series,
                        milkshakes, and more.
                    </p>

                </div>

                <div
                    class="absolute bottom-0 left-7 right-7 h-px
                           bg-white/50
                           transition-colors duration-500
                           group-hover:bg-orange-400/60"
                ></div>

            </div>



            {{-- =========================================
                FEATURE 06
            ========================================== --}}

            <div
                class="group relative overflow-hidden rounded-3xl
                       border border-white/70
                       bg-white/30
                       shadow-[0_8px_32px_rgba(31,38,135,0.12)]
                       backdrop-blur-2xl
                       transition-all duration-500
                       hover:-translate-y-1
                       hover:border-white/90
                       hover:bg-white/40
                       hover:shadow-[0_18px_45px_rgba(31,38,135,0.18)]"
            >

                <div class="relative h-52 overflow-hidden">

                    <img
                        src="{{ asset('images/Made-for-Every-Craving.jpg') }}"
                        alt="Made for Every Craving"
                        class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105"
                    >

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent"
                    ></div>

                </div>

                <div
                    class="absolute inset-x-0 top-0 h-px
                           bg-gradient-to-r from-transparent via-white to-transparent"
                ></div>

                <div
                    class="absolute -bottom-12 -left-12 h-32 w-32
                           rounded-full bg-yellow-300/20 blur-2xl
                           transition group-hover:bg-yellow-400/30"
                ></div>

                <div class="relative p-6 sm:p-7">

                    <div class="mb-6 flex items-center">

                        <span class="text-sm font-bold text-gray-700">
                            06
                        </span>

                        <div
                            class="mx-4 h-px flex-1
                                   bg-gradient-to-r from-orange-200/80 to-transparent"
                        ></div>

                    </div>

                    <h3 class="mb-3 text-xl font-bold text-gray-900">
                        Made for Every Craving
                    </h3>

                    <p class="text-sm leading-relaxed text-gray-600 sm:text-base">
                        Whether you want something sweet, savory,
                        refreshing, or filling, we've got you covered.
                    </p>

                </div>

                <div
                    class="absolute bottom-0 left-7 right-7 h-px
                           bg-white/50
                           transition-colors duration-500
                           group-hover:bg-orange-400/60"
                ></div>

            </div>


        </div>

    </div>

</section>