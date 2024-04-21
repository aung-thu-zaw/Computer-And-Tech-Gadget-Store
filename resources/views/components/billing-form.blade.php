<div class="flex flex-col border border-neutral-700 bg-primaryBackground rounded-md p-4 sm:p-6 lg:p-8">

    <form class="space-y-4 md:space-y-6">
        <div class="space-y-3">
            <label for="name" class="text-sm font-semibold">
                Full Name
                <span class="text-accent">*</span>
            </label>

            <x-input placeholder="Enter Your Name"
                class="bg-primaryBackground text-white focus:outline-none focus:ring-none focus:border-neutral-500 text-sm outline-none border border-neutral-700 placeholder:text-sm" />

            {{--
            <InputError :message="store.errors?.name" /> --}}
        </div>

        <div class="grid grid-cols-2 gap-5">
            <div class="space-y-3">
                <label for="email-address" class="text-sm font-semibold">
                    Email Address
                    <span class="text-accent">*</span>
                </label>

                <x-input placeholder="Enter Your Email Address"
                    class="bg-primaryBackground text-white focus:outline-none focus:ring-none focus:border-neutral-500 text-sm outline-none border border-neutral-700 placeholder:text-sm" />

                {{--
                <InputError :message="store.errors?.email" /> --}}
            </div>

            <div class="space-y-3">
                <label for="phone-number" class="text-sm font-semibold">
                    Phone Number
                    <span class="text-accent">*</span>
                </label>

                <x-input placeholder="Enter Your Phone Number"
                    class="bg-primaryBackground text-white focus:outline-none focus:ring-none focus:border-neutral-500 text-sm outline-none border border-neutral-700 placeholder:text-sm" />

                {{--
                <InputError :message="store.errors?.phone" /> --}}
            </div>
        </div>

        <div class="space-y-3">
            <label for="company-name" class="text-sm font-semibold">Company Name</label>

            <x-input placeholder="Enter Company Name"
                class="bg-primaryBackground text-white focus:outline-none focus:ring-none focus:border-neutral-500 text-sm outline-none border border-neutral-700 placeholder:text-sm" />

            {{--
            <InputError :message="store.errors?.phone" /> --}}
        </div>

        <div class="space-y-3">
            <label for="address-one" class="text-sm font-semibold">
                Address
                <span class="text-accent">*</span>
            </label>

            <x-input placeholder="Enter Address 1"
                class="bg-primaryBackground text-white focus:outline-none focus:ring-none focus:border-neutral-500 text-sm outline-none border border-neutral-700 placeholder:text-sm" />

            {{--
            <InputError :message="store.errors?.phone" /> --}}
        </div>

        <div class="grid grid-cols-3 gap-5">
            <div class="space-y-3">
                <label for="state" class="text-sm font-semibold">
                    State
                    <span class="text-accent">*</span>
                </label>

                <x-select placeholder="Select an option"
                    class="bg-primaryBackground text-white focus:outline-none focus:ring-none focus:border-neutral-500 text-sm outline-none border border-neutral-700 placeholder:text-sm" />

                {{--
                <InputError :message="store.errors?.email" /> --}}
            </div>

            <div class="space-y-3">
                <label for="city" class="text-sm font-semibold">
                    City
                    <span class="text-accent">*</span>
                </label>

                <x-select placeholder="Select an option"
                    class="bg-primaryBackground text-white focus:outline-none focus:ring-none focus:border-neutral-500 text-sm outline-none border border-neutral-700 placeholder:text-sm" />

                {{--
                <InputError :message="store.errors?.email" /> --}}
            </div>

            <div class="space-y-3">
                <label for="postal-code" class="text-sm font-semibold">
                    Postal Code
                    <span class="text-accent">*</span>
                </label>

                <x-input placeholder="Enter Postal Code"
                    class="bg-primaryBackground text-white focus:outline-none focus:ring-none focus:border-neutral-500 text-sm outline-none border border-neutral-700 placeholder:text-sm" />

                {{--
                <InputError :message="store.errors?.phone" /> --}}
            </div>
        </div>

        <div class="space-y-3">
            <label for="address-one" class="text-sm font-semibold">Additional Information</label>

            <x-textarea placeholder="Enter Message ..." rows="7"
                class="bg-primaryBackground text-white focus:outline-none focus:ring-none focus:border-neutral-500 text-sm outline-none border border-neutral-700 placeholder:text-sm" />

            {{--
            <InputError :message="store.errors?.message" /> --}}
        </div>

        <div class="flex items-center justify-end">
            <x-button class="bg-primaryBackground border border-neutral-700 hover:bg-accent text-white">
                <i class="fa-solid fa-save"></i>
                Submit
            </x-button>
        </div>
    </form>
</div>
