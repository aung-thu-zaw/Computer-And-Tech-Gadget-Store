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
                        Products
                    </li>
                    <li>
                        MSI 2020 Laptop I5 Generation
                    </li>
                </ul>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div class="">
                    <img src="https://storage-asset.msi.com/event/2023/NB/windows11-upgrade/images/msi-Product/Desktop/Desktop-Aegis.png"
                        alt="">
                </div>
                <div class="space-y-7">
                    <h1 class="font-bold text-2xl">
                        MSI 2020 Laptop I5 Generation
                    </h1>

                    <div class="flex items-center space-x-3">
                        <div class="text-xs">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>

                        <p class="text-sm font-medium">3.5 out of 5</p>
                    </div>

                    <p class="text-sm font-medium">
                        Brand : MSI Brand
                    </p>

                    <p class="text-sm font-medium">
                        Stock : Total 5 Item(s) Avaliable
                    </p>

                    <div class="space-y-5 capitalize">
                        <div class="flex items-center space-x-1">
                            <p class="text-sm font-medium">Color :</p>
                            <div class="flex items-center space-x-3">
                                <button
                                    class="px-3.5 py-1.5 flex items-center justify-center text-xs font-semibold rounded-md border border-neutral-600 hover:border-accent duration-100">
                                    <span> Midnight </span>
                                </button>
                                <button
                                    class="px-3.5 py-1.5 flex items-center justify-center text-xs font-semibold rounded-md border border-neutral-600 hover:border-accent duration-100">
                                    <span> Black </span>
                                </button>
                                <button
                                    class="px-3.5 py-1.5 flex items-center justify-center text-xs font-semibold rounded-md border border-neutral-600 hover:border-accent duration-100">
                                    <span> Gray </span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-5 capitalize">
                        <div class="flex items-center space-x-1">
                            <p class="text-sm font-medium">Ram :</p>
                            <div class="flex items-center space-x-3">
                                <button
                                    class="px-3.5 py-1.5 flex items-center justify-center text-xs font-semibold rounded-md border border-neutral-600 hover:border-accent duration-100">
                                    <span> 4 GB </span>
                                </button>
                                <button
                                    class="px-3.5 py-1.5 flex items-center justify-center text-xs font-semibold rounded-md border border-neutral-600 hover:border-accent duration-100">
                                    <span> 8 GB </span>
                                </button>
                                <button
                                    class="px-3.5 py-1.5 flex items-center justify-center text-xs font-semibold rounded-md border border-neutral-600 hover:border-accent duration-100">
                                    <span> 16 GB </span>
                                </button>
                                <button
                                    class="px-3.5 py-1.5 flex items-center justify-center text-xs font-semibold rounded-md border border-neutral-600 hover:border-accent duration-100">
                                    <span> 32 GB </span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-5 capitalize">
                        <div class="flex items-center space-x-1">
                            <p class="text-sm font-medium">Storage :</p>
                            <div class="flex items-center space-x-3">
                                <button
                                    class="px-3.5 py-1.5 flex items-center justify-center text-xs font-semibold rounded-md border border-neutral-600 hover:border-accent duration-100">
                                    <span> 256 GB </span>
                                </button>
                                <button
                                    class="px-3.5 py-1.5 flex items-center justify-center text-xs font-semibold rounded-md border border-neutral-600 hover:border-accent duration-100">
                                    <span> 500 GB </span>
                                </button>
                                <button
                                    class="px-3.5 py-1.5 flex items-center justify-center text-xs font-semibold rounded-md border border-neutral-600 hover:border-accent duration-100">
                                    <span> 1 TB </span>
                                </button>
                                <button
                                    class="px-3.5 py-1.5 flex items-center justify-center text-xs font-semibold rounded-md border border-neutral-600 hover:border-accent duration-100">
                                    <span> 2 TB </span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center space-x-1">
                        <p class="text-sm font-medium">
                            Price :
                        </p>
                        <div class="flex items-center space-x-5">
                            <p class="font-bold text-lg">
                                $ 138.87
                            </p>
                            <div class="space-x-1.5">
                                <span class="line-through text-sm text-accent font-bold">$ 150</span>
                                <x-badge value="53 % OFF" class="badge-error badge-outline text-[10px]" />
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center space-x-1">
                        <p class="text-sm font-medium">
                            Qty :
                        </p>
                        <x-quantity-input />
                    </div>

                    <div class="flex items-center space-x-5">
                        <x-add-to-cart-button />
                        <x-buy-now-button />

                        <div class="tooltip  tooltip-top" data-tip="Add To Wishlist">
                            <x-add-to-wishlist-button />
                        </div>
                    </div>

                    <x-social-share />
                </div>
            </div>
        </div>
    </div>
</section>
