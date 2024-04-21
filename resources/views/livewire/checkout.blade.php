<section>
    <div class="container mx-auto">
        <div class=" space-y-10 mb-10">

            {{-- Breadcrumb --}}
            <div class="text-sm font-bold breadcrumbs my-5">
                <ul>
                    <li>
                        <a class="hover:text-accent">Home</a>
                    </li>
                    <li>
                        <a class="hover:text-accent">
                            Shopping Cart
                        </a>
                    </li>
                    <li>
                        Checkout
                    </li>
                </ul>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div class="space-y-10 col-span-2">
                    <div>
                        <h1 class="font-bold text-xl mb-5">
                            Billing Address
                        </h1>

                        <x-billing-form />
                    </div>

                    <x-checkbox label="Ship To Different Address" class="border-neutral-700" />

                    {{-- <div>
                        <h1 class="font-bold text-2xl mb-5">
                            Shipping Address
                        </h1>

                        <x-shipping-form />
                    </div> --}}
                </div>

                <div class="col-span-1 md:mt-12 space-y-5">
                    <x-total-shipping-price />
                    <x-payment-methods />
                </div>
            </div>
        </div>
    </div>

</section>