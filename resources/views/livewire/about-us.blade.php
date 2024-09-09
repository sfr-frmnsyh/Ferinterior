<section class="bg-white py-8">
    <div class="container py-8 px-6 mx-auto">

        @php
            $aboutus = \App\Models\AboutUs::where('index', '1')->first();
        @endphp

        <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl mb-8" href="#">
            About
        </a>

        <p class="mt-8 mb-8">
            {{ @$aboutus->about }}
        </p>

        <p class="mb-8">
            {{ @$aboutus->about2 }}
        </p>

    </div>
</section>
