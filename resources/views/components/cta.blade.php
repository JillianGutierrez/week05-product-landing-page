<section
    id="contact"
    class="relative overflow-hidden bg-[#fffaf3] px-4 py-20 sm:px-6 sm:py-24 lg:px-8"
>

    <div class="relative mx-auto max-w-6xl">

        {{-- Animated Glass CTA Card --}}
        <div
            class="cta-glass-card relative overflow-hidden rounded-[2rem] p-[1px]"
        >

            {{-- Animated Border --}}
            <div class="cta-border absolute inset-[-100%]"></div>

            {{-- Main Glass Card --}}
            <div
                class="relative overflow-hidden rounded-[2rem]
                       bg-[#3b2418]
                       px-6 py-12
                       sm:px-10 sm:py-16
                       lg:px-16 lg:py-20"
            >

                {{-- Decorative Glow --}}
                <div
                    class="absolute -right-24 -top-24
                           h-72 w-72
                           rounded-full
                           bg-orange-500/20
                           blur-3xl"
                ></div>

                <div
                    class="absolute -bottom-24 -left-24
                           h-72 w-72
                           rounded-full
                           bg-amber-300/10
                           blur-3xl"
                ></div>


                {{-- Content --}}
                <div class="relative mx-auto max-w-3xl text-center">

                    <span
                        class="inline-flex rounded-full
                               border border-orange-300/30
                               bg-orange-500/10
                               px-4 py-2
                               text-xs font-bold uppercase
                               tracking-[0.2em]
                               text-orange-300"
                    >
                        Your Next Coffee Break
                    </span>

                    <h2
                        class="mt-5 text-3xl font-extrabold
                               leading-tight text-white
                               sm:text-4xl lg:text-5xl"
                    >
                        GOOD FOOD,
                        <span class="text-orange-400">
                            GOOD MOOD!
                        </span>
                    </h2>

                    <p
                        class="mx-auto mt-5 max-w-2xl
                               text-sm leading-relaxed
                               text-orange-100/75
                               sm:text-base"
                    >
                        Take a break and enjoy freshly prepared drinks,
                        affordable meals, and delicious food at
                        Coffee Break By: Maus Foodhouse atbp.
                    </p>


                    {{-- CTA Buttons --}}
                    <div
                        class="mt-8 flex flex-col
                               justify-center gap-3
                               sm:flex-row"
                    >

                        {{-- Main CTA --}}
                        <a
                            href="#menu"
                            class="rounded-full
                                   bg-orange-500
                                   px-7 py-3.5
                                   text-sm font-bold
                                   text-white
                                   shadow-lg
                                   shadow-orange-500/20
                                   transition duration-300
                                   hover:-translate-y-1
                                   hover:bg-orange-600
                                   hover:shadow-xl"
                        >
                            Explore Menu
                        </a>


                        {{-- Secondary CTA --}}
                        <a
                            href="https://www.facebook.com/Coffeebreakbymau"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="rounded-full
                                   border border-orange-300/50
                                   bg-white/5
                                   px-7 py-3.5
                                   text-sm font-bold
                                   text-orange-100
                                   backdrop-blur-sm
                                   transition duration-300
                                   hover:-translate-y-1
                                   hover:bg-white/10
                                   hover:text-white"
                        >
                            Contact Us
                        </a>

                    </div>


                    {{-- Business Information --}}
                    <div
                        class="mt-10
                               grid gap-4
                               border-t border-white/10
                               pt-8
                               sm:grid-cols-3"
                    >

                        <div>
                            <p class="text-xs uppercase tracking-wider text-orange-300/60">
                                Location
                            </p>

                            <p class="mt-1 text-sm font-semibold text-white">
                                Plaza of Magdalena, Laguna
                            </p>
                        </div>


                        <div>
                            <p class="text-xs uppercase tracking-wider text-orange-300/60">
                                Open
                            </p>

                            <p class="mt-1 text-sm font-semibold text-white">
                                10 AM – 8 PM
                            </p>
                        </div>


                        <div>
                            <p class="text-xs uppercase tracking-wider text-orange-300/60">
                                Contact
                            </p>

                            <p class="mt-1 text-sm font-semibold text-white">
                                09398130110
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<style>
    .cta-glass-card {
        isolation: isolate;
    }

    .cta-border {
        background: conic-gradient(
            from 0deg,
            transparent 0deg,
            transparent 35deg,
            rgba(249, 115, 22, 0.9) 70deg,
            rgba(255, 237, 213, 0.9) 105deg,
            transparent 145deg,
            transparent 360deg
        );

        animation: ctaBorderSpin 7s linear infinite;
    }

    @keyframes ctaBorderSpin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }
</style>