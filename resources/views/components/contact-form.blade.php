<div class="flex flex-col border border-neutral-700 bg-[#2b2b2b] rounded-xl p-4 sm:p-6 lg:p-8">
    <h2 class="mb-8 text-xl font-semibold">Fill in the form</h2>

    <form class="space-y-4 md:space-y-6">
        <div>
            <x-input placeholder="Enter Your Full Name"
                class="bg-primaryBackground text-white focus:outline-none focus:ring-none focus:border-neutral-500 text-sm outline-none border border-neutral-700 placeholder:text-sm" />

            {{--
            <InputError :message="store.errors?.name" /> --}}
        </div>

        <div class="grid grid-cols-2 gap-5">
            <div>
                <x-input placeholder="Enter Your Email Address"
                    class="bg-primaryBackground text-white focus:outline-none focus:ring-none focus:border-neutral-500 text-sm outline-none border border-neutral-700 placeholder:text-sm" />

                {{--
                <InputError :message="store.errors?.email" /> --}}
            </div>

            <div>
                <x-input placeholder="Enter Your Phone Number"
                    class="bg-primaryBackground text-white focus:outline-none focus:ring-none focus:border-neutral-500 text-sm outline-none border border-neutral-700 placeholder:text-sm" />

                {{--
                <InputError :message="store.errors?.phone" /> --}}
            </div>
        </div>

        <div>
            <x-textarea placeholder="Enter Message ..." rows="7"
                class="bg-primaryBackground text-white focus:outline-none focus:ring-none focus:border-neutral-500 text-sm outline-none border border-neutral-700 placeholder:text-sm" />

            {{--
            <InputError :message="store.errors?.message" /> --}}
        </div>

        <div class="flex items-center justify-end">
            <x-button class="bg-primaryBackground border border-neutral-700 hover:bg-accent text-white">
                <i class="fa-solid fa-paper-plane"></i>
                Send Message
            </x-button>
        </div>
    </form>
</div>
