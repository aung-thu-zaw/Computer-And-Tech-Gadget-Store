<div class="border border-neutral-700 rounded-md p-5 bg-primaryBackground">
    <h2 class="text-center mb-6 font-bold text-xl ">
        Total Shipping Price
    </h2>
    <ul class="space-y-5 text-sm font-semibold mb-5">
        <li class="flex justify-between">
            <span class="font-bold text-lg border-b pb-3"> Product Items</span>
            <span class="font-bold text-lg border-b pb-3">Total Price</span>
        </li>


        <li class="flex justify-between">
            <span>Samsome Notebook Pro 5 x 01</span>
            <span>$ 295.00</span>
        </li>


        <li class="flex justify-between">
            <span>Aquet Drone D 420 x 02</span>
            <span>$ 550.00</span>
        </li>

        <li class="flex justify-between">
            <span>Play Station X 22 x 01</span>
            <span>$ 295.00</span>
        </li>

        <li class="flex justify-between">
            <span>Roxxe Headphone Z 75 x 01</span>
            <span>$ 110.00</span>
        </li>

        <li class="flex justify-between border-t border-t-neutral-700  mt-3 pt-5">
            <span>Sub Item(s) Total :</span>
            <span>$ 3400.00</span>
        </li>


        <li class="flex justify-between border-t border-t-neutral-700  mt-3 pt-5">
            <span>Shipping Fee :</span>
            <span>$ 30.00</span>
        </li>

        <li class="flex justify-between  border-t border-t-neutral-700  mt-3 pt-5">
            <span> Coupon Code :</span>
            <span class="text-sky-600 text-sm font-bold">
                SUMMER PROMO
                <button class="cursor-pointer hover:text-red-600">
                    <i class="fas fa-xmark"></i>
                </button>
            </span>
        </li>

        <li v-show="coupon" class="flex justify-between">
            <span> Coupon Discount :</span>
            <span class="text-sm font-bold">
                - $ 200
            </span>

            {{-- <span v-if="coupon?.type === 'fixed'" class="text-sm font-bold">
                - $ {{ formatAmount(coupon.value) }}
            </span>
            <span v-else-if="coupon?.type === 'percentage'" class="text-sm font-bold">
                - % {{ coupon.value }}
            </span> --}}
        </li>

        <li class="text-lg font-bold border-t border-t-neutral-700 flex justify-between mt-3 pt-5">
            <span> Grand Total Price :</span>
            <span> $ 4298.90 </span>
        </li>
    </ul>

    {{-- <div class="space-x-3 flex items-center justify-between">
        <a href="{{ route('home') }}"
            class="px-4 py-3.5 inline-block text-sm w-full text-center font-semibold  bg-transparent border border-neutral-700 shadow-sm  rounded-md duration-200">
            <i class="fa-solid fa-home"></i>
            Home
        </a>
        <a href="{{ route('checkout') }}"
            class="px-4 py-3.5 inline-block text-sm w-full text-center font-semibold text-white bg-accent shadow-sm  rounded-md duration-200 space-x-1.5">
            <i class="fa-solid fa-shopping-cart"></i>
            <span>
                Checkout
            </span>
            <i class="fa-solid fa-arrow-right"></i>
        </a>
    </div> --}}
</div>
