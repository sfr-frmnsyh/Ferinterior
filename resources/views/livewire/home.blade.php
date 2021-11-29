<div>

    <nav id="store" class="w-full z-30 top-0 px-6 py-1">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">

            <p class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl ">
                Latest Product
            </p>

            <div class="flex items-center" id="store-nav-content">
                {{-- Right Space fot item --}}
            </div>
        </div>
    </nav>

    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
        @foreach ($products as $product)
            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <img class="rounded border border-gray-250 hover:grow hover:shadow-lg"
                    src="{{ url('assets/product') }}/{{ $product->image }}" alt="product img"
                    class="img-fluid">
                <div class="pt-3 flex items-center justify-between">
                    <p class="">{{ $product->name }}</p>
                    <a href="{{ route('products.detail', $product->id) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </a>
                </div>
                <p class="pt-1 text-gray-900">Rp. {{ number_format($product->price) }}</p>
            </div>
        @endforeach
    </div>

</div>
