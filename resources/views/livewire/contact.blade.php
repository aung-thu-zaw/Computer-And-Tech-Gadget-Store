<section>
    <div class="container mx-auto space-y-10">

        {{-- Breadcrumb --}}
        <div class="text-sm font-bold breadcrumbs my-5">
            <ul>
                <li>
                    <a class="hover:text-accent">Home</a>
                </li>
                <li>
                    Contact Us
                </li>
            </ul>
        </div>

        {{-- Heading --}}
        <h1 class="font-bold text-3xl">
            Hi, Howdy
            <br>
            Let’s Connect us
        </h1>


        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <x-contact-form />

            <x-contact-information />
        </div>

        <x-location-map />

        <x-newsletter-section />
    </div>
</section>
