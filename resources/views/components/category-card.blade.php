@props(["icon","name"])

<a href="#" class="bg-secondaryBackground hover:scale-105 text-sm p-5 text-center rounded-md space-x-3 transition-all">
    <span class="text-lg">
        <i class="{{ $icon }}"></i>
    </span>

    <h5 class="text-md font-semibold inline-block">
        {{ $name }}
    </h5>
</a>