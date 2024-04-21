@props(["title"])

<div class="w-full flex items-center justify-between mb-10">
    <div class="w-10 border border-secondaryBackground"></div>

    <h3 class="mx-5 md:text-lg lg:text-xl font-extrabold uppercase">{{ $title }}</h3>

    <div class="w-[61%] border border-secondaryBackground"></div>

    <h1 class="ml-5 md:text-2xl lg:text-4xl font-extrabold uppercase text-secondaryText">{{ $title }}</h1>
</div>
