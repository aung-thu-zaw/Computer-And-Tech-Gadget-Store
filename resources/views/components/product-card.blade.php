@props(['product'])

<div class="relative border border-neutral-700 overflow-hidden rounded-md group">

    <div class="absolute top-3 -left-7 z-30 bg-accent text-xs font-bold px-8 py-1 border border-red-900 -rotate-45">
        <span>5 % OFF</span>
    </div>

    <div class="relative w-full h-72 overflow-hidden bg-secondaryBackground">
        <img src="https://wallpapers.com/images/featured/motherboard-png-ts9e2un7f2n76tx1.jpg" alt="product"
            class="w-full h-full object-contain">

        <div
            class="absolute top-0 left-0 bottom-0 right-0 bg-black  bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-200">
        </div>
        <div
            class="absolute z-10 invisible top-3 right-0  w-full   group-hover:visible group-hover:opacity-100 group-hover:right-3.5 duration-200 transition-all flex flex-col items-end justify-center space-y-3">

            <div class="tooltip  tooltip-left" data-tip="Add To Wishlist">
                <x-add-to-wishlist-button />
            </div>

            <div class="tooltip  tooltip-left" data-tip="Compare Product">
                <x-compare-product-button />
            </div>
        </div>

        <div
            class="absolute z-10 invisible -bottom-2 opacity-0 w-full  group-hover:visible group-hover:opacity-100 group-hover:bottom-3.5 duration-200 transition-all flex items-center justify-center">
            <x-add-to-cart-button />
        </div>
    </div>
    <div class=" bg-[#2b2b2b]">
        <div class="space-y-1.5 border-b border-b-neutral-600 px-5 py-3.5">

            <p class="text-sm font-semibold">Laptop</p>

            <a href="#" wire:navigate class="text-md font-extrabold line-clamp-2 hover:text-accent transition-all">MSI
                365
                Gaming
                Laptop 32 Inches</a>
        </div>

        <div class=" text-sm font-semibold  px-5 py-5">
            <div class="flex items-center justify-between ">

                <div class="flex items-center space-x-3">
                    <p class="line-through">$ 250.00</p>
                    <p>$ 200.00</p>
                </div>

                <div class="text-xs">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
            </div>

            <x-time-counter />
        </div>
    </div>
</div>