<div class="border border-neutral-700 bg-primaryBackground rounded-md p-5">


    <form class="space-y-3">

        <span class="font-bold text-sky-600 text-sm mb-10">
            Coupon code is applied
        </span>

        <div>
            <x-input placeholder="Enter Discount Code"
                class="bg-primaryBackground text-white focus:outline-none focus:ring-none focus:border-neutral-500 text-sm outline-none border border-neutral-700 placeholder:text-sm" />

            {{--
            <InputError :message="store.errors?.name" /> --}}
        </div>

        <div class="flex items-center justify-end">

            <button type="submit"
                class="px-6 py-3 inline-block text-sm w-auto text-center font-semibold  bg-accent border border-neutral-700 shadow-sm  rounded-md duration-200">
                Apply
            </button>
        </div>
    </form>
</div>