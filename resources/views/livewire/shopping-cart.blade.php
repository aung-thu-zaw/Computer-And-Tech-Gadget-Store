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
                        Shopping Cart
                    </li>
                </ul>
            </div>

            {{-- Heading --}}
            <h1 class="font-bold text-3xl">
                My Cart ( 10 )
            </h1>

            <div class="overflow-x-auto  rounded-md">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="bg-secondaryBackground text-primaryText uppercase font-extrabold">
                        <tr>
                            <th scope="col" class="px-6 py-4">Image</th>
                            <th scope="col" class="px-6 py-4">Product</th>
                            <th scope="col" class="px-6 py-4">Price</th>
                            <th scope="col" class="px-6 py-4">Qty</th>
                            <th scope="col" class="px-6 py-4">Total</th>
                            <th scope="col" class="px-6 py-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Row One --}}
                        <tr class="border-b border-b-neutral-600 text-primaryText font-semibold">
                            <td class="px-6 py-2">
                                <img src="https://my-store.msi.com/cdn/shop/files/GE78HX14VI_1_1200x1200.png?v=1705046544"
                                    alt="product-image" class="w-32">
                            </td>
                            <td class="px-6 py-2">
                                <div class="space-y-1.5">
                                    <p>MSI 2020 Laptop 36 Inches</p>
                                    <p class="text-xs font-medium text-neutral-500">CPU core i5, Ram 8 GB, Storage 1 Tb
                                    </p>
                                    <p class="text-xs text-green-600">3 Item(s) left</p>
                                </div>
                            </td>
                            <td class="px-6 py-2">
                                <div>
                                    <p>$ 1200</p>
                                    <div class="flex items-center  space-x-3  text-xs text-accent">

                                        <span class="line-through">
                                            $ 1500
                                        </span>


                                        <x-badge value="53 % OFF" class="badge-error badge-outline text-[10px]" />
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-2">
                                <x-quantity-input />
                            </td>
                            <td class="px-6 py-2">$ 2400</td>
                            <td class="px-6 py-2">
                                <div class="flex items-center justify-start space-x-3">

                                    <div class="tooltip  tooltip-top" data-tip="Add To Wishlist">
                                        <button
                                            class="flex items-center justify-center rounded-md px-5 py-3 bg-transparent text-white border border-neutral-600">
                                            <i class="fa-solid fa-heart"></i>
                                        </button>
                                    </div>

                                    <div class="tooltip  tooltip-top" data-tip="Remove From Cart">
                                        <button
                                            class="flex items-center justify-center rounded-md px-5 py-3 bg-accent text-white border border-accent">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        {{-- Row Two --}}
                        <tr class="border-b border-b-neutral-600 text-primaryText font-semibold">
                            <td class="px-6 py-2">
                                <img src="https://my-store.msi.com/cdn/shop/files/GE78HX14VI_1_1200x1200.png?v=1705046544"
                                    alt="product-image" class="w-32">
                            </td>
                            <td class="px-6 py-2">
                                <div class="space-y-1.5">
                                    <p>MSI 2020 Laptop 36 Inches</p>
                                    <p class="text-xs font-medium text-neutral-500">CPU core i5, Ram 8 GB, Storage 1 Tb
                                    </p>
                                    <p class="text-xs text-green-600">3 Item(s) left</p>
                                </div>
                            </td>
                            <td class="px-6 py-2">
                                <div>
                                    <p>$ 1200</p>
                                    <div class="flex items-center  space-x-3  text-xs text-accent">

                                        <span class="line-through">
                                            $ 1500
                                        </span>


                                        <x-badge value="53 % OFF" class="badge-error badge-outline text-[10px]" />
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-2">
                                <x-quantity-input />
                            </td>
                            <td class="px-6 py-2">$ 2400</td>
                            <td class="px-6 py-2">
                                <div class="flex items-center justify-start space-x-3">

                                    <div class="tooltip  tooltip-top" data-tip="Add To Wishlist">
                                        <button
                                            class="flex items-center justify-center rounded-md px-5 py-3 bg-transparent text-white border border-neutral-600">
                                            <i class="fa-solid fa-heart"></i>
                                        </button>
                                    </div>

                                    <div class="tooltip  tooltip-top" data-tip="Remove From Cart">
                                        <button
                                            class="flex items-center justify-center rounded-md px-5 py-3 bg-accent text-white border border-accent">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        {{-- Row Three --}}
                        <tr class="border-b border-b-neutral-600 text-primaryText font-semibold">
                            <td class="px-6 py-2">
                                <img src="https://my-store.msi.com/cdn/shop/files/GE78HX14VI_1_1200x1200.png?v=1705046544"
                                    alt="product-image" class="w-32">
                            </td>
                            <td class="px-6 py-2">
                                <div class="space-y-1.5">
                                    <p>MSI 2020 Laptop 36 Inches</p>
                                    <p class="text-xs font-medium text-neutral-500">CPU core i5, Ram 8 GB, Storage 1 Tb
                                    </p>
                                    <p class="text-xs text-green-600">3 Item(s) left</p>
                                </div>
                            </td>
                            <td class="px-6 py-2">
                                <div>
                                    <p>$ 1200</p>
                                    <div class="flex items-center  space-x-3  text-xs text-accent">

                                        <span class="line-through">
                                            $ 1500
                                        </span>


                                        <x-badge value="53 % OFF" class="badge-error badge-outline text-[10px]" />
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-2">
                                <x-quantity-input />
                            </td>
                            <td class="px-6 py-2">$ 2400</td>
                            <td class="px-6 py-2">
                                <div class="flex items-center justify-start space-x-3">

                                    <div class="tooltip  tooltip-top" data-tip="Add To Wishlist">
                                        <button
                                            class="flex items-center justify-center rounded-md px-5 py-3 bg-transparent text-white border border-neutral-600">
                                            <i class="fa-solid fa-heart"></i>
                                        </button>
                                    </div>

                                    <div class="tooltip  tooltip-top" data-tip="Remove From Cart">
                                        <button
                                            class="flex items-center justify-center rounded-md px-5 py-3 bg-accent text-white border border-accent">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        {{-- Row Four --}}
                        <tr class=" text-primaryText font-semibold">
                            <td class="px-6 py-2">
                                <img src="https://my-store.msi.com/cdn/shop/files/GE78HX14VI_1_1200x1200.png?v=1705046544"
                                    alt="product-image" class="w-32">
                            </td>
                            <td class="px-6 py-2">
                                <div class="space-y-1.5">
                                    <p>MSI 2020 Laptop 36 Inches</p>
                                    <p class="text-xs font-medium text-neutral-500">CPU core i5, Ram 8 GB, Storage 1 Tb
                                    </p>
                                    <p class="text-xs text-green-600">3 Item(s) left</p>
                                </div>
                            </td>
                            <td class="px-6 py-2">
                                <div>
                                    <p>$ 1200</p>
                                    <div class="flex items-center  space-x-3  text-xs text-accent">

                                        <span class="line-through">
                                            $ 1500
                                        </span>


                                        <x-badge value="53 % OFF" class="badge-error badge-outline text-[10px]" />
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-2">
                                <x-quantity-input />
                            </td>
                            <td class="px-6 py-2">$ 2400</td>
                            <td class="px-6 py-2">
                                <div class="flex items-center justify-start space-x-3">

                                    <div class="tooltip  tooltip-top" data-tip="Add To Wishlist">
                                        <button
                                            class="flex items-center justify-center rounded-md px-5 py-3 bg-transparent text-white border border-neutral-600">
                                            <i class="fa-solid fa-heart"></i>
                                        </button>
                                    </div>

                                    <div class="tooltip  tooltip-top" data-tip="Remove From Cart">
                                        <button
                                            class="flex items-center justify-center rounded-md px-5 py-3 bg-accent text-white border border-accent">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-10">
            <div>
            </div>
            <div class="space-y-5">
                <x-order-summary />
                <x-coupon-apply-form />
            </div>
        </div>
    </div>

</section>
