<section id="features"
         class="relative overflow-hidden
                bg-orange-50
                py-20 sm:py-24">

    <div class="max-w-7xl mx-auto
                px-4 sm:px-6 lg:px-8">

        {{-- SECTION INTRO --}}
        <div class="grid lg:grid-cols-2
                    gap-12 lg:gap-20
                    items-end
                    mb-14">

            <div>

                <div class="flex items-center gap-3 mb-4">

                    <span class="w-10 h-px bg-orange-500"></span>

                    <span class="text-sm
                                 font-semibold
                                 uppercase
                                 tracking-[0.2em]
                                 text-orange-500">
                        Why Choose Us
                    </span>

                </div>

                <h2 class="text-4xl
                           sm:text-5xl
                           lg:text-6xl
                           font-black
                           tracking-tight
                           leading-[0.95]
                           text-gray-900">

                    MADE FOR YOUR

                    <span class="block text-orange-500">
                        PERFECT BREAK.
                    </span>

                </h2>

            </div>


            <p class="text-gray-600
                      leading-relaxed
                      max-w-xl
                      lg:ml-auto">

                Good food, great drinks, and affordable choices
                come together to make every visit worth the break.
                Whether you need a quick refreshment or a filling meal,
                Coffee Break has something ready for you.

            </p>

        </div>


        {{-- FEATURE IMAGE --}}
        <div class="relative
                    h-[280px]
                    sm:h-[360px]
                    lg:h-[430px]
                    rounded-[2rem]
                    overflow-hidden
                    mb-10
                    shadow-xl">

            <img src="/images/customer-photo.jpg"
                 alt="Coffee Break café experience"
                 class="w-full h-full object-cover
                        transition-transform
                        duration-700
                        hover:scale-105">

            <div class="absolute inset-0
                        bg-gradient-to-t
                        from-black/60
                        via-black/10
                        to-transparent">
            </div>

            <div class="absolute
                        left-6
                        bottom-6
                        sm:left-10
                        sm:bottom-10
                        max-w-lg">

                <p class="text-orange-300
                          text-xs
                          uppercase
                          tracking-[0.25em]
                          font-bold
                          mb-2">
                    Coffee • Food • Good Moments
                </p>

                <h3 class="text-2xl
                           sm:text-3xl
                           font-black
                           text-white">
                    Your everyday break,
                    made better.
                </h3>

            </div>

        </div>


        {{-- FEATURES --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">

            @php

                $features = [

                    [
                        'number' => '01',
                        'title' => 'Freshly Prepared Drinks',
                        'description' =>
                            'Enjoy coffee, milk tea, fruit tea, milk series, and refreshing drinks prepared for every craving.',
                    ],

                    [
                        'number' => '02',
                        'title' => 'Delicious Food',
                        'description' =>
                            'From burgers and fries to satisfying meals, there is always something good to enjoy.',
                    ],

                    [
                        'number' => '03',
                        'title' => 'Affordable Prices',
                        'description' =>
                            'Enjoy delicious food and drinks without spending too much.',
                    ],

                    [
                        'number' => '04',
                        'title' => 'Filling Rice Meals',
                        'description' =>
                            'Choose from a variety of Java Rice meals made for a satisfying and filling break.',
                    ],

                    [
                        'number' => '05',
                        'title' => 'Variety of Drinks',
                        'description' =>
                            'Explore different flavors and drink choices made for different tastes.',
                    ],

                    [
                        'number' => '06',
                        'title' => 'Made for Every Craving',
                        'description' =>
                            'Whether you want something sweet, savory, refreshing, or filling, Coffee Break has something for you.',
                    ],

                ];

            @endphp


            @foreach ($features as $feature)

                <div class="group
                            relative
                            overflow-hidden
                            rounded-[1.75rem]
                            bg-white
                            border
                            border-gray-200
                            p-7
                            min-h-[250px]
                            shadow-sm
                            transition-all
                            duration-500
                            hover:-translate-y-2
                            hover:border-orange-300
                            hover:shadow-xl
                            hover:shadow-orange-500/10">

                    <div class="absolute
                                -top-16
                                -right-16
                                w-32 h-32
                                rounded-full
                                bg-orange-500/0
                                blur-3xl
                                group-hover:bg-orange-500/20
                                transition-all
                                duration-500">
                    </div>


                    {{-- NUMBER --}}
                    <div class="relative
                                w-12 h-12
                                rounded-xl
                                border
                                border-gray-200
                                bg-gray-50
                                flex items-center
                                justify-center
                                transition-all
                                duration-500
                                group-hover:bg-orange-500
                                group-hover:border-orange-500">

                        <span class="text-sm
                                     font-black
                                     text-gray-400
                                     group-hover:text-white
                                     transition-colors">

                            {{ $feature['number'] }}

                        </span>

                    </div>


                    {{-- TEXT --}}
                    <div class="relative mt-8">

                        <h3 class="text-xl
                                   font-black
                                   text-gray-900
                                   group-hover:text-orange-500
                                   transition-colors
                                   duration-300">

                            {{ $feature['title'] }}

                        </h3>

                        <p class="mt-3
                                  text-sm
                                  leading-relaxed
                                  text-gray-500">

                            {{ $feature['description'] }}

                        </p>

                    </div>


                    {{-- BOTTOM LINE --}}
                    <div class="absolute
                                bottom-0
                                left-7
                                right-7
                                h-px
                                bg-gray-100
                                group-hover:bg-orange-400
                                transition-colors
                                duration-500">
                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>