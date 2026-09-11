<nav class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md shadow-sm">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex items-center justify-between h-20">

            <!-- Logo -->
            <a href="#home" class="flex items-center gap-2">

                <div class="w-10 h-10 rounded-full bg-orange-500
                            flex items-center justify-center text-white
                            font-bold shadow-md">
                    CB
                </div>

                <div>
                    <h1 class="text-lg font-bold text-gray-900 leading-tight">
                        Coffee Break
                    </h1>

                    <p class="text-xs text-orange-600">
                        By: Maus Foodhouse atbp.
                    </p>
                </div>

            </a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center gap-6 lg:gap-7">

                <a href="#home" class="text-gray-700 hover:text-orange-600 transition">
                    Home
                </a>

                <a href="#features" class="text-gray-700 hover:text-orange-600 transition">
                    Features
                </a>

                <a href="#menu" class="text-gray-700 hover:text-orange-600 transition">
                    Menu
                </a>

                <a href="#pricing" class="text-gray-700 hover:text-orange-600 transition">
                    Pricing
                </a>

                <a href="#testimonials" class="text-gray-700 hover:text-orange-600 transition">
                    Testimonials
                </a>

                <a href="#contact" class="text-gray-700 hover:text-orange-600 transition">
                    Contact
                </a>

            </div>

            <!-- Desktop Buttons -->
            <div class="hidden md:flex items-center gap-3">

                <a href="#contact"
                   class="px-4 py-2 text-sm font-medium text-gray-700
                          hover:text-orange-600 transition">
                    Sign In
                </a>

                <a href="#menu"
                   class="px-5 py-2.5 bg-orange-500 text-white
                          text-sm font-semibold rounded-full
                          hover:bg-orange-600 transition shadow-md">
                    Get Started
                </a>

            </div>

            <!-- Mobile Menu Button -->
            <button
                id="mobile-menu-button"
                type="button"
                class="md:hidden p-2 rounded-lg text-gray-700
                       hover:bg-gray-100 transition">

                <svg id="menu-open-icon"
                     xmlns="http://www.w3.org/2000/svg"
                     class="w-6 h-6"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16" />

                </svg>

                <svg id="menu-close-icon"
                     xmlns="http://www.w3.org/2000/svg"
                     class="hidden w-6 h-6"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M6 18L18 6M6 6l12 12" />

                </svg>

            </button>

        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu"
             class="hidden md:hidden border-t border-gray-100 py-4">

            <div class="flex flex-col gap-2">

                <a href="#home" class="mobile-link">
                    Home
                </a>

                <a href="#features" class="mobile-link">
                    Features
                </a>

                <a href="#menu" class="mobile-link">
                    Menu
                </a>

                <a href="#pricing" class="mobile-link">
                    Pricing
                </a>

                <a href="#testimonials" class="mobile-link">
                    Testimonials
                </a>

                <a href="#contact" class="mobile-link">
                    Contact
                </a>

                <a href="#menu"
                   class="mt-2 text-center px-5 py-3
                          bg-orange-500 text-white font-semibold
                          rounded-full hover:bg-orange-600 transition">
                    Get Started
                </a>

            </div>

        </div>

    </div>

</nav>