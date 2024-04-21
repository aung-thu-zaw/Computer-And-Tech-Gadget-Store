<x-nav sticky full-width class="!bg-[#191919] border-b-secondaryBackground z-50 px-0 lg:px-10">
    <x-slot:brand class="min-w-[250px]">
        {{-- Drawer toggle for "main-drawer" --}}
        <label for="main-drawer" class="lg:hidden mr-3">
            <x-icon name="o-bars-3" class="cursor-pointer" />
        </label>

        {{-- Brand --}}
        <div class="font-extrabold text-xl text-white">
            <img src="{{ asset('images/logo-color.png') }}" alt="header-logo" class="h-6 object-contain">
        </div>
    </x-slot:brand>

    {{-- Right side actions --}}
    <x-slot:actions class="flex items-center justify-between w-[70%]">
        <div class="hidden lg:inline-block">
            <x-menu activate-by-route class="menu-horizontal font-bold text-sm">
                <x-menu-item title="Home" link="/"
                    class="bg-transparent outline-none border-none hover:bg-transparent hover:text-accent transition-all" />
                <x-menu-item title="Warranty" link="/"
                    class="bg-transparent outline-none border-none hover:bg-transparent hover:text-accent transition-all" />
                <x-menu-item title="Questions & Answers" link="/"
                    class="bg-transparent outline-none border-none hover:bg-transparent hover:text-accent transition-all" />
                <x-menu-item title="Blog" link="/"
                    class="bg-transparent outline-none border-none hover:bg-transparent hover:text-accent transition-all" />
                <x-menu-item title="Contact" link="/"
                    class="bg-transparent outline-none border-none hover:bg-transparent hover:text-accent transition-all" />
            </x-menu>
        </div>

        <div class="space-x-5 flex items-center w-full md:w-auto justify-end  ml-auto">
            <x-button class="btn btn-sm btn-circle bg-transparent hover:bg-accent text-primaryText border-none">
                <span class="text-md">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </span>
            </x-button>

            <x-button class="relative bg-transparent hover:bg-transparent text-primaryText border-none">
                <span class="text-md hover:text-accent transition-all">
                    <i class="fa-solid fa-shopping-cart"></i>
                </span>
                <span
                    class="w-4 h-4 flex items-center justify-center bg-accent rounded-full text-[12px] absolute top-1 right-1">
                    5
                </span>
            </x-button>

            <x-button class="relative hidden md:block bg-transparent hover:bg-transparent text-primaryText border-none">
                <span class="text-md hover:text-accent transition-all">
                    <i class="fa-solid fa-heart"></i>
                </span>
                <span
                    class="w-4 h-4 flex items-center justify-center bg-accent rounded-full text-[12px] absolute top-1 right-1">
                    5
                </span>
            </x-button>

            <x-user-dropdown />
        </div>

    </x-slot:actions>
</x-nav>
