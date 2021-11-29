<div class="container">

    <div class="container">
        <div class="mx-auto flex flex-wrap">

            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">

                <h4>Payment Information</h4>
                <hr>
                <h4 class="mt-3"><strong>Total pembayaran : Rp. {{ number_format($price_total) }}</strong>
                </h4>


                <div class="col-span-12 sm:col-span-12 md:col-span-5 lg:col-span-5 xxl:col-span-5">
                    <!-- Start Card List -->
                    <div class="bg-white p-3 rounded-xl shadow-xl flex items-center justify-between mt-4">
                        <div class="flex space-x-6 items-center">
                            <img class="mr-3" src="{{ url('assets/bank/bri.png') }}" alt="BRI" width="75">
                            <div>
                                <p class="font-semibold text-base">Bank BRI</p>
                                <p class="font-semibold text-xs text-gray-400">No. Rekening 123-456-789 atas nama:
                                <p class="font-extrabold text-xs">Bernard Mahfoudz</p>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card List -->
                </div>

                <div class="col-span-12 sm:col-span-12 md:col-span-5 lg:col-span-5 xxl:col-span-5">
                    <!-- Start Card List -->
                    <div class="bg-white p-3 rounded-xl shadow-xl flex items-center justify-between mt-4">
                        <div class="flex space-x-6 items-center">
                            <img class="mr-3" src="{{ url('assets/bank/bni.png') }}" alt="BRI" width="75">
                            <div>
                                <p class="font-semibold text-base">Bank BNI</p>
                                <p class="font-semibold text-xs text-gray-400">No. Rekening 521-666-129 atas nama:
                                <p class="font-bold text-xs">Bernard Mahfoudz</p>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card List -->
                </div>
            </div>

            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                <h4>Shipping Information</h4>
                <hr>
                <form wire:submit.prevent='checkout'>
                    <div class="w-full mt-6">
                        <div class="flex flex-col mb-4">
                            <label for="name" class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">
                                Name
                            </label>

                            <div class="relative">
                                <div class="absolute flex border border-transparent left-0 top-0 h-full w-10">
                                    <div
                                        class="flex items-center justify-center rounded-tl rounded-bl z-10 bg-gray-100 text-gray-600 text-lg h-full w-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                    </div>
                                </div>

                                <input wire:model="name" id="name" type="text" placeholder="Name"
                                    value="{{ old('name') }}"
                                    class="text-sm sm:text-base relative w-full border rounded placeholder-gray-400 focus:border-indigo-400 focus:outline-none py-2 pr-2 pl-12 @error('name') border-red-500 @enderror">
                            </div>
                            @error('name')
                                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-4">
                            <label for="name" class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">
                                Address
                            </label>

                            <div class="relative">
                                <div class="absolute flex border border-transparent left-0 top-0 h-full w-10">
                                    <div
                                        class="flex items-center justify-center rounded-tl rounded-bl z-10 bg-gray-100 text-gray-600 text-lg h-full w-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 9v11a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9" />
                                            <path d="M9 22V12h6v10M2 10.6L12 2l10 8.6" />
                                        </svg>
                                    </div>
                                </div>

                                <input wire:model="address" id="address" type="text" placeholder="Address"
                                    value="{{ old('address') }}"
                                    class="text-sm sm:text-base relative w-full border rounded placeholder-gray-400 focus:border-indigo-400 focus:outline-none py-2 pr-2 pl-12 @error('address') border-red-500 @enderror">
                            </div>
                            @error('address')
                                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-4">
                            <label for="name" class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">
                                Phone Number
                            </label>

                            <div class="relative">
                                <div class="absolute flex border border-transparent left-0 top-0 h-full w-10">
                                    <div
                                        class="flex items-center justify-center rounded-tl rounded-bl z-10 bg-gray-100 text-gray-600 text-lg h-full w-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path
                                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>

                                <input wire:model="phone_number" id="phone_number" type="text" placeholder="+628xxx"
                                    value="{{ old('phone_number') }}"
                                    class="text-sm sm:text-base relative w-full border rounded placeholder-gray-400 focus:border-indigo-400 focus:outline-none py-2 pr-2 pl-12 @error('phone_number') border-red-500 @enderror">
                            </div>
                            @error('phone_number')
                                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="flex">
                            <span class="title-font font-medium text-2xl text-gray-900"></span>
                            <button type="submit"
                                class="flex ml-auto text-white bg-gray-500 border-0 py-2 px-6 focus:outline-none hover:bg-gray-600 rounded disabled:opacity-50s">
                                Checkout
                            </button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
