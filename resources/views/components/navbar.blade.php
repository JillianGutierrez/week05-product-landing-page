<nav
    id="main-navbar"
    class="fixed left-0 right-0 top-0 z-50 w-full border-b border-orange-200 bg-[#fffaf3] shadow-[0_4px_20px_rgba(120,53,15,0.10)]"
>
    <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
        <div class="flex h-20 items-center justify-between">

            {{-- LOGO --}}
            <a
                href="#home"
                class="flex items-center gap-3"
            >
                <div class="flex h-12 w-12 items-center justify-center overflow-hidden rounded-full bg-white shadow-sm ring-1 ring-orange-100">
                    <img
                        src="{{ asset('images/logo.png') }}"
                        alt="Coffee Break By Maus Foodhouse"
                        class="h-full w-full object-cover"
                    >
                </div>

                <div class="hidden sm:block">
                    <p class="text-base font-black leading-tight text-[#5c4033]">
                        Coffee Break
                    </p>

                    <p class="text-xs font-medium text-orange-500">
                        By: Maus Foodhouse atbp.
                    </p>
                </div>
            </a>


            {{-- DESKTOP NAVIGATION --}}
            <div class="hidden items-center gap-1 lg:flex">

                <a
                    href="#home"
                    class="nav-link rounded-full px-4 py-2 text-sm font-semibold"
                >
                    Home
                </a>

                <a
                    href="#features"
                    class="nav-link rounded-full px-4 py-2 text-sm font-semibold"
                >
                    Features
                </a>

                <a
                    href="#pricing"
                    class="nav-link rounded-full px-4 py-2 text-sm font-semibold"
                >
                    Pricing
                </a>

                <a
                    href="#testimonials"
                    class="nav-link rounded-full px-4 py-2 text-sm font-semibold"
                >
                    Testimonials
                </a>

                <a
                    href="#contact"
                    class="nav-link rounded-full px-4 py-2 text-sm font-semibold"
                >
                    Contact
                </a>

            </div>


            {{-- DESKTOP ACTION BUTTONS --}}
            <div class="hidden items-center gap-3 lg:flex">

                <a
                    href="#contact"
                    class="rounded-full border-2 border-orange-500 px-5 py-2.5 text-sm font-bold text-orange-600 transition duration-300 hover:bg-orange-500 hover:text-white"
                >
                    Sign In
                </a>

                <a
                    href="#menu"
                    class="rounded-full bg-orange-500 px-6 py-2.5 text-sm font-bold text-white shadow-md shadow-orange-500/20 transition duration-300 hover:-translate-y-0.5 hover:bg-orange-600 hover:shadow-lg"
                >
                    Get Started
                </a>

            </div>


            {{-- MOBILE MENU BUTTON --}}
            <button
                id="mobile-menu-button"
                type="button"
                aria-label="Toggle navigation menu"
                aria-expanded="false"
                class="flex h-11 w-11 items-center justify-center rounded-full border border-orange-200 bg-white text-[#5c4033] shadow-sm transition duration-200 hover:bg-orange-50 lg:hidden"
            >

                {{-- OPEN ICON --}}
                <svg
                    id="menu-open-icon"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="h-6 w-6"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                    />
                </svg>

                {{-- CLOSE ICON --}}
                <svg
                    id="menu-close-icon"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="hidden h-6 w-6"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18 18 6M6 6l12 12"
                    />
                </svg>

            </button>

        </div>


        {{-- MOBILE NAVIGATION --}}
        <div
            id="mobile-menu"
            class="hidden border-t border-orange-100 py-4 lg:hidden"
        >

            <div class="flex flex-col gap-1">

                <a
                    href="#home"
                    class="mobile-link"
                >
                    Home
                </a>

                <a
                    href="#features"
                    class="mobile-link"
                >
                    Features
                </a>

                <a
                    href="#pricing"
                    class="mobile-link"
                >
                    Pricing
                </a>

                <a
                    href="#testimonials"
                    class="mobile-link"
                >
                    Testimonials
                </a>

                <a
                    href="#contact"
                    class="mobile-link"
                >
                    Contact
                </a>

                <div class="mt-3 grid grid-cols-2 gap-2 border-t border-orange-100 pt-3">

                    <a
                        href="#contact"
                        class="rounded-full border-2 border-orange-500 px-4 py-3 text-center text-sm font-bold text-orange-600 transition duration-300 hover:bg-orange-500 hover:text-white"
                    >
                        Sign In
                    </a>

                    <a
                        href="#menu"
                        class="rounded-full bg-orange-500 px-4 py-3 text-center text-sm font-bold text-white shadow-md transition duration-300 hover:bg-orange-600"
                    >
                        Get Started
                    </a>

                </div>

            </div>

        </div>

    </div>
</nav>