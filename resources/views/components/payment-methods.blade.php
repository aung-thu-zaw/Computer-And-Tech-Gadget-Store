<div class="border border-neutral-700 rounded-md p-5 bg-primaryBackground">
    <h2 class="text-center font-bold text-xl mb-6">
        Select Payment Methods
    </h2>

    <div class="mb-5">
        <div class="grid sm:grid-cols-1 gap-2">
            <label for="hs-radio-paypal"
                class="flex p-3 w-full bg-transparent border border-neutral-700 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                <input id="radio-paypal" type="radio" name="radio-paypal" class="radio border-neutral-700 radio-sm"
                    value="paypal" />
                <div class="flex items-center justify-center">
                    <div class="ms-3">
                        <img src="{{ asset('images/paypal.png') }}" alt="paypal" class="h-6" />
                    </div>
                    <div class="text-sm ml-3 space-y-1.5">
                        <p class="font-semibold">Pay with Paypal</p>
                    </div>
                </div>
            </label>

            <label for="radio-card"
                class="flex p-3 w-full bg-transparent  border border-neutral-700 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                <input id="radio-card" type="radio" name="radio-card" class="radio border-neutral-700 radio-sm"
                    value="card" />
                <div class="flex items-center justify-center">
                    <div class="ms-3">
                        <img src="{{ asset('images/credit-card.png') }}" alt="credit-card" class="h-6" />
                    </div>
                    <div class="text-sm ml-3 space-y-1.5">
                        <p class="font-semibold">Credit Card / Debit Card</p>
                    </div>
                </div>
            </label>

            <label for="radio-cash"
                class="flex p-3 w-full bg-transparent  border border-neutral-700 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                <input id="radio-cash" type="radio" name="radio-cash" class="radio border-neutral-700 radio-sm"
                    value="card" />
                <div class="flex items-center justify-center">
                    <div class="ms-3">
                        <img src="{{ asset('images/cash-on-delivery.png') }}" alt="credit-card" class="h-6" />
                    </div>
                    <div class="text-sm ml-3 space-y-1.5">
                        <p class="font-semibold">Cash On Delivery</p>
                    </div>
                </div>
            </label>

            <label for="radio-bank"
                class="flex p-3 w-full bg-transparent  border border-neutral-700 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                <input id="radio-bank" type="radio" name="radio-bank" class="radio border-neutral-700 radio-sm"
                    value="card" />
                <div class="flex items-center justify-center">
                    <div class="ms-3">
                        <img src="{{ asset('images/credit-card.png') }}" alt="credit-card" class="h-6" />
                    </div>
                    <div class="text-sm ml-3 space-y-1.5">
                        <p class="font-semibold">Direct Bank Transfer</p>
                    </div>
                </div>
            </label>
        </div>

    </div>

    <div class="space-x-3 flex items-center justify-between">
        <a href="{{ route('home') }}" wire:navigate
            class="px-4 py-3.5 inline-block text-sm w-full text-center font-semibold  bg-transparent border border-neutral-700 shadow-sm  rounded-md duration-200 space-x-1.5">
            <i class="fa-solid fa-home"></i>
            <span>
                Home
            </span>
        </a>
        <a href="{{ route('checkout') }}" wire:navigate
            class="px-4 py-3.5 inline-block text-sm w-full text-center font-semibold text-white bg-accent shadow-sm  rounded-md duration-200 space-x-1.5">
            <i class="fa-solid fa-boxes-packing"></i>
            <span>
                Place Order
            </span>
        </a>
    </div>
</div>