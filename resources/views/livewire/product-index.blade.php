<div class="w-full container">
    <nav id="store" class="w-full z-30 top-0 px-6 py-1">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">

            <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="#">
                Latest Product
            </a>

            <div class="flex items-center" id="store-nav-content">

                <div class="pl-3 inline-block no-underline hover:text-black">
                    <input wire:model="search" type="text" class="form-control" placeholder="Search..."
                        aria-label="Search" aria-describedby="basic-addon1">
                </div>

                <div class="pl-3 inline-block no-underline hover:text-black">

                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                    </div>
                </div>

            </div>
        </div>
    </nav>

    {{-- PRODUCT --}}
    <div class="w-full container mx-auto flex flex-wrap items-center mt-0 px-2 py-3">
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

    <nav class="w-full z-30 top-0 px-6 py-1">
        <div class="w-full container items-center">
            {{ $products->links() }}
        </div>
    </nav>

</div>
