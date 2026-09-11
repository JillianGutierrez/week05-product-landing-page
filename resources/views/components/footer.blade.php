<footer class="bg-gray-950 text-white">

    <div class="max-w-7xl mx-auto
                px-4 sm:px-6 lg:px-8
                py-16">

        <div class="grid
                    sm:grid-cols-2
                    lg:grid-cols-4
                    gap-10">

            {{-- COMPANY INFORMATION --}}
            <div class="lg:col-span-2">

                <div class="flex items-center gap-3">

                    <div class="w-12 h-12
                                rounded-full
                                overflow-hidden
                                bg-white
                                border border-orange-200">

                        <img src="/images/logo.png"
                             alt="Coffee Break logo"
                             class="w-full h-full object-cover">

                    </div>

                    <div>

                        <h3 class="font-black text-lg">
                            Coffee Break
                        </h3>

                        <p class="text-xs text-orange-400">
                            By: Maus Foodhouse atbp.
                        </p>

                    </div>

                </div>


                <p class="mt-6
                          max-w-md
                          text-sm
                          leading-relaxed
                          text-gray-400">

                    Delicious drinks, satisfying meals,
                    and affordable favorites made for
                    every coffee break and every craving.

                </p>


                {{-- SOCIAL MEDIA --}}
                <div class="flex items-center gap-3 mt-6">

                    <a href="https://www.facebook.com/Coffeebreakbymau"
                       target="_blank"
                       rel="noopener noreferrer"
                       aria-label="Facebook"
                       class="w-10 h-10
                              rounded-full
                              border border-gray-700
                              flex items-center justify-center
                              text-gray-400
                              hover:bg-orange-500
                              hover:border-orange-500
                              hover:text-white
                              transition-all duration-300">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 24 24"
                             fill="currentColor"
                             class="w-5 h-5">

                            <path d="M13.5 22v-8h2.7l.4-3h-3.1V9.1c0-.9.3-1.5 1.6-1.5h1.7V5c-.3 0-1.3-.1-2.4-.1-2.4 0-4 1.5-4 4.1V11H8v3h2.4v8h3.1Z"/>

                        </svg>

                    </a>


                    <a href="https://www.facebook.com/Coffeebreakbymau"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="w-10 h-10
                              rounded-full
                              border border-gray-700
                              flex items-center justify-center
                              text-gray-400
                              hover:bg-orange-500
                              hover:border-orange-500
                              hover:text-white
                              transition-all duration-300">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke-width="1.7"
                             stroke="currentColor"
                             class="w-5 h-5">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M12 16.5a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm0-12.5a8.5 8.5 0 1 0 0 17 8.5 8.5 0 0 0 0-17Zm5.75 2.75h.01"/>

                        </svg>

                    </a>

                </div>

            </div>


            {{-- QUICK LINKS --}}
            <div>

                <h3 class="text-sm
                           font-bold
                           uppercase
                           tracking-[0.18em]
                           text-orange-400">
                    Quick Links
                </h3>

                <ul class="mt-5 space-y-3">

                    <li>
                        <a href="#home"
                           class="text-sm text-gray-400
                                  hover:text-orange-400
                                  transition">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="#features"
                           class="text-sm text-gray-400
                                  hover:text-orange-400
                                  transition">
                            Features
                        </a>
                    </li>

                    <li>
                        <a href="#menu"
                           class="text-sm text-gray-400
                                  hover:text-orange-400
                                  transition">
                            Menu
                        </a>
                    </li>

                    <li>
                        <a href="#pricing"
                           class="text-sm text-gray-400
                                  hover:text-orange-400
                                  transition">
                            Pricing
                        </a>
                    </li>

                    <li>
                        <a href="#testimonials"
                           class="text-sm text-gray-400
                                  hover:text-orange-400
                                  transition">
                            Reviews
                        </a>
                    </li>

                    <li>
                        <a href="#contact"
                           class="text-sm text-gray-400
                                  hover:text-orange-400
                                  transition">
                            Contact
                        </a>
                    </li>

                </ul>

            </div>


            {{-- CONTACT INFORMATION --}}
            <div>

                <h3 class="text-sm
                           font-bold
                           uppercase
                           tracking-[0.18em]
                           text-orange-400">
                    Contact
                </h3>

                <div class="mt-5 space-y-4">

                    <div>

                        <p class="text-xs
                                  uppercase
                                  tracking-wider
                                  text-gray-500">
                            Location
                        </p>

                        <p class="mt-1
                                  text-sm
                                  text-gray-300">
                            Plaza of Magdalena, Laguna
                        </p>

                    </div>


                    <div>

                        <p class="text-xs
                                  uppercase
                                  tracking-wider
                                  text-gray-500">
                            Phone
                        </p>

                        <a href="tel:09398130110"
                           class="mt-1
                                  block
                                  text-sm
                                  text-gray-300
                                  hover:text-orange-400
                                  transition">
                            0939 813 0110
                        </a>

                    </div>


                    <div>

                        <p class="text-xs
                                  uppercase
                                  tracking-wider
                                  text-gray-500">
                            Hours
                        </p>

                        <p class="mt-1
                                  text-sm
                                  text-gray-300">
                            10 AM – 8 PM
                        </p>

                    </div>

                </div>

            </div>

        </div>


        {{-- BOTTOM --}}
        <div class="mt-14
                    pt-6
                    border-t
                    border-gray-800
                    flex flex-col
                    sm:flex-row
                    items-center
                    justify-between
                    gap-4">

            <p class="text-xs text-gray-500">
                © {{ date('Y') }} Coffee Break By: Maus Foodhouse atbp.
                All rights reserved.
            </p>

            <p class="text-xs text-gray-600">
                Plaza of Magdalena, Laguna
            </p>

        </div>

    </div>

</footer>