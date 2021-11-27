<div>
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
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
        @foreach ($products as $product)
            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="{{ route('products.detail', $product->id) }}">
                    <img class="hover:grow hover:shadow-lg" src="{{ url('assets/product') }}/{{ $product->image }}"
                        alt="product img" class="img-fluid">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">{{ $product->name }}</p>
                    </div>
                    <p class="pt-1 text-gray-900">Rp. {{ number_format($product->price) }}</p>
                </a>
            </div>
        @endforeach
    </div>

    <nav class="w-full z-30 top-0 px-6 py-1">
        <div class="w-full container items-center">
            {{ $products->links() }}
        </div>
    </nav>

</div>
