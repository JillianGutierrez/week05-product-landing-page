<section id="testimonials" class="relative bg-orange-50 py-24 sm:py-28 overflow-hidden">

    <!-- Decorative Background -->
    <div class="absolute -top-32 -left-32 h-80 w-80 rounded-full bg-orange-200/30 blur-3xl"></div>

    <div class="absolute -bottom-32 -right-32 h-80 w-80 rounded-full bg-orange-300/20 blur-3xl"></div>


    <div class="relative mx-auto max-w-6xl px-6 lg:px-8">

        <!-- Heading -->
        <div class="mb-14 max-w-2xl">

            <p class="text-sm font-bold uppercase tracking-[0.25em] text-orange-500">
                Customer Reviews
            </p>

            <h2 class="mt-3 text-4xl font-black tracking-tight text-gray-900 sm:text-5xl">
                Loved by our
                <span class="text-orange-500">customers.</span>
            </h2>

            <p class="mt-5 text-lg leading-8 text-gray-600">
                Good food, good coffee, and good moments worth coming back for.
            </p>

        </div>


        <!-- PHOTO + SEPARATE REVIEWS -->
        <div class="grid items-stretch gap-8 lg:grid-cols-2">


            <!-- ONE CUSTOMER PHOTO BOX -->
            <div
                class="group relative min-h-[500px] overflow-hidden rounded-[2rem] bg-white shadow-xl shadow-orange-900/10 ring-1 ring-orange-100 lg:min-h-[650px]"
            >

                <img
                    src="{{ asset('images/customer-photo.png') }}"
                    alt="Coffee Break customer"
                    class="absolute inset-0 h-full w-full object-cover transition duration-700 group-hover:scale-105"
                >

                <!-- Subtle Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/45 via-transparent to-transparent"></div>


                <!-- Photo Label -->
                <div class="absolute bottom-7 left-7">

                    <p class="text-xs font-bold uppercase tracking-[0.25em] text-white/80">
                        Coffee Break
                    </p>

                    <p class="mt-1 text-2xl font-bold text-white">
                        Good food. Good mood.
                    </p>

                </div>

            </div>



            <!-- THREE SEPARATE REVIEW BOXES -->
            <div class="flex flex-col gap-6">


                <!-- REVIEW 1 -->
                <article
                    class="flex flex-1 flex-col justify-center rounded-[1.5rem] bg-white p-7 shadow-lg shadow-orange-900/10 ring-1 ring-orange-100 transition duration-300 hover:-translate-y-1 hover:shadow-xl sm:p-8"
                >

                    <div class="mb-4 text-sm tracking-[0.18em] text-orange-500">
                        ★★★★★
                    </div>

                    <blockquote class="text-lg font-medium leading-8 text-gray-800">
                        “The coffee tastes great and the food is worth the price.
                        Definitely a nice place to grab a quick break.”
                    </blockquote>

                    <p class="mt-5 text-sm font-bold text-gray-900">
                        — Lian
                    </p>

                </article>



                <!-- REVIEW 2 -->
                <article
                    class="flex flex-1 flex-col justify-center rounded-[1.5rem] bg-white p-7 shadow-lg shadow-orange-900/10 ring-1 ring-orange-100 transition duration-300 hover:-translate-y-1 hover:shadow-xl sm:p-8"
                >

                    <div class="mb-4 text-sm tracking-[0.18em] text-orange-500">
                        ★★★★★
                    </div>

                    <blockquote class="text-lg font-medium leading-8 text-gray-800">
                        “I love the variety of drinks and meals.
                        Everything is affordable, filling, and perfect for a quick food trip.”
                    </blockquote>

                    <p class="mt-5 text-sm font-bold text-gray-900">
                        — Jil
                    </p>

                </article>



                <!-- REVIEW 3 -->
                <article
                    class="flex flex-1 flex-col justify-center rounded-[1.5rem] bg-white p-7 shadow-lg shadow-orange-900/10 ring-1 ring-orange-100 transition duration-300 hover:-translate-y-1 hover:shadow-xl sm:p-8"
                >

                    <div class="mb-4 text-sm tracking-[0.18em] text-orange-500">
                        ★★★★★
                    </div>

                    <blockquote class="text-lg font-medium leading-8 text-gray-800">
                        “A simple and relaxing place to enjoy coffee and good food.
                        The prices are friendly and the servings are satisfying.”
                    </blockquote>

                    <p class="mt-5 text-sm font-bold text-gray-900">
                        — Jel
                    </p>

                </article>


            </div>

        </div>

    </div>

</section>