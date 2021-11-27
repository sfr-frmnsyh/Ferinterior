<div class="container px-6 mx-auto">
    <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl mb-8" href="#">
        Detail Product
    </a>
</div>

<section class="text-gray-700 body-font overflow-hidden bg-white">
    <div class="container">
        <div class="p-6 mx-auto flex flex-wrap">
            <img alt="ecommerce"
                class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-250 hover:grow hover:shadow-lg"
                src="{{ url('assets/product') }}/{{ $product->image }}" alt="product img">
            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                <h2 class="text-sm title-font text-gray-500 tracking-widest">PRODUCT NAME</h2>
                <h1 class="text-gray-900 text-3xl title-font font-medium mb-1 border-b-2 pb-5">The Catcher in the Rye
                </h1>

                <p class="leading-relaxed mt-6">
                    {{ $product->description }}
                </p>
                <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
                    <div class="flex">
                        <span class="mr-3">Color</span>
                        <a
                            class="border-2 border-gray-300 ml-1 bg-blue-700 rounded-full w-6 h-6 focus:outline-none"></a>
                        <a
                            class="border-2 border-gray-300 ml-1 bg-gray-700 rounded-full w-6 h-6 focus:outline-none"></a>
                        <a class="border-2 border-gray-300 ml-1 bg-red-500 rounded-full w-6 h-6 focus:outline-none"></a>
                    </div>
                </div>
                <div class="flex">
                    <span class="title-font font-medium text-2xl text-gray-900">Rp.
                        {{ number_format($product->price) }}</span>
                    <button
                        class="flex ml-auto text-white bg-gray-500 border-0 py-2 px-6 focus:outline-none hover:bg-gray-600 rounded">Add
                        to Cart</button>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <div class="w-full md:w-1/2 xl:w-1/2 p-6 flex flex-col max-w-lg">
    <img class="hover:grow hover:shadow-lg" src="{{ url('assets/product') }}/{{ $product->image }}" alt="product img"
        class="img-fluid">
    <div class="pt-3 flex items-center justify-between">
        <p class="">Color : </p>

    </div>
</div>
<div class="w-full md:w-1/2 xl:w-1/2 p-6 flex flex-col align-top">
    <div class="p-6">
        <h2 class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1">CATEGORY</h2>
        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>
        <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings
            jianbing microdosing tousled waistcoat.</p>
        <div class="flex items-center flex-wrap ">
            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                </svg>
            </a>
            <span
                class="text-gray-600 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-300">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                </svg>1.2K
            </span>
            <span class="text-gray-600 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" viewBox="0 0 24 24">
                    <path
                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                    </path>
                </svg>6
            </span>
        </div>
    </div>

    <a href="{{ route('products.detail', $product->id) }}">
        <img class="hover:grow hover:shadow-lg" src="{{ url('assets/product') }}/{{ $product->image }}"
            alt="product img" class="img-fluid">
        <div class="pt-3 flex items-center justify-between">
            <p class="">{{ $product->name }}</p>
            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24">
                <path
                    d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
            </svg>
        </div>
        <p class="pt-1 text-gray-900">Rp. {{ number_format($product->price) }}</p>
    </a>
</div> --}}
