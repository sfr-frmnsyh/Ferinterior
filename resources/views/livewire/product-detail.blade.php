<div class="w-full container">
    <div class="container px-6 mx-auto">
        <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl mb-8" href="#">
            Detail Product
        </a>
    </div>

    <section class="text-gray-700 body-font overflow-hidden bg-white">
        <div class="container">
            <form wire:submit.prevent="addToCart">
                <div class="p-6 mx-auto flex flex-wrap">
                    <img alt="ecommerce"
                        class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-250 hover:grow hover:shadow-lg"
                        src="{{ url('assets/product') }}/{{ $product->image }}" alt="product img">
                    <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                        <h2 class="text-sm title-font text-gray-500 tracking-widest">
                            PRODUCT NAME
                            @if ($product->is_ready)
                                <span
                                    class="inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-green-100 bg-green-600 rounded-full">Ready
                                    Stock</span>
                            @else
                                <span
                                    class="inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full">Out
                                    of Stock</span>
                            @endif
                        </h2>
                        <h1 class="text-gray-900 text-3xl title-font font-medium mb-1 border-b-2 pb-5">
                            {{ $product->name }}
                        </h1>

                        <p class="leading-relaxed mt-6 border-b-2 pb-5">
                            {{ $product->description }}
                        </p>
                        <div class="mt-6 pb-5 border-b-2 border-gray-200 mb-5">
                            <div class="sm:flex sm:items-center">
                                <div class="flex flex-col mb-4">
                                    <label for="name" class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">
                                        Quantity
                                    </label>

                                    <div class="relative">
                                        <div class="absolute flex border border-transparent left-0 top-0 h-full w-10">
                                            <div
                                                class="flex items-center justify-center rounded-tl rounded-bl z-10 bg-gray-100 text-gray-600 text-lg h-full w-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6l-3-4H6zM3.8 6h16.4M16 10a4 4 0 1 1-8 0"/></svg>
                                            </div>
                                        </div>

                                        <input wire:model="qty" id="qty" type="number" placeholder="input quantity" value="{{ old('qty') }}"
                                            class="text-sm sm:text-base relative w-full border rounded placeholder-gray-400 focus:border-indigo-400 focus:outline-none py-2 pr-2 pl-12 @error('qty') border-red-500 @enderror" min="1">
                                    </div>
                                    @error('qty')
                                        <span
                                            class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex mt-6">
                                <span class="mr-3">Color</span>
                                <a class="border-2 border-gray-300 ml-1 rounded-full w-6 h-6 focus:outline-none"
                                    style="background-color: {{ $product->colour }}"></a>
                            </div>
                        </div>
                        <div class="flex">
                            <span class="title-font font-medium text-2xl text-gray-900">Rp.
                                {{ number_format($product->price) }}</span>
                            <button type="submit"
                                class="flex ml-auto text-white bg-gray-500 border-0 py-2 px-6 focus:outline-none hover:bg-gray-600 rounded disabled:opacity-50 @if (!$product->is_ready) opacity-50 cursor-not-allowed @endif "
                                @if (!$product->is_ready) disabled @endif>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>


<script>
    document.addEventListener('livewire:load', function() {
        // Execute on livewire:load (first load)
    })

    document.addEventListener('swal:success', function(e) {
        Swal.fire({
            title: e.detail.title,
            text: e.detail.message,
            icon: e.detail.icon,
            confirmButtonText: 'Cool'
        });

    })
</script>
