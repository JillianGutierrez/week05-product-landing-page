<section id="pricing" class="py-16 sm:py-20 bg-white">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto mb-12 sm:mb-14">

            <span class="text-orange-500 font-semibold
                         uppercase tracking-wider text-sm">
                Our Prices
            </span>

            <h2 class="mt-3 text-3xl sm:text-4xl
                       font-extrabold text-gray-900">
                Good Food Without the Big Price
            </h2>

            <p class="mt-4 text-gray-600 leading-relaxed">
                Choose from affordable drinks and meals made
                for your everyday coffee and food cravings.
            </p>

        </div>

        <!-- Pricing Cards -->
        <div class="grid md:grid-cols-3 gap-6 lg:gap-8
                    max-w-6xl mx-auto items-stretch">

            <x-pricing-card
                name="Coffee"
                description="For your everyday coffee break"
                price="₱50"
                :featured="false"
                :features="[
                    'Sweetened Black Coffee',
                    'Caramel Macchiato',
                    'Vanilla Macchiato',
                    'Spanish Latte',
                    'Freshly prepared'
                ]"
            />

            <x-pricing-card
                name="Milk Tea"
                description="Refreshing drinks for any mood"
                price="₱29"
                :featured="true"
                :features="[
                    '12 oz, 16 oz & 22 oz',
                    'Multiple flavors',
                    'Chocolate',
                    'Okinawa',
                    'Taro & Matcha'
                ]"
            />

            <x-pricing-card
                name="Rice Meals"
                description="For a more filling break"
                price="₱35"
                :featured="false"
                :features="[
                    'Java Rice with Egg',
                    'Shanghai Java Rice',
                    'Ham Java Rice',
                    'Bacon Java Rice',
                    'Chicken options'
                ]"
            />

        </div>

    </div>

</section>