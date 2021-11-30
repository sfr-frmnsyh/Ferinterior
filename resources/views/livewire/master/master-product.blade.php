<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Master (Products)') }}
        </h2>
    </x-slot>

    @if ($modal)
        <div
            class="min-w-screen h-screen animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover">
            <div class="absolute bg-black opacity-80 inset-0 z-0"></div>
            <div class="w-full max-w-4xl p-5 relative mx-auto my-auto rounded-xl shadow-lg bg-white ">
                <!--content-->
                <div class="">
                    <!--body-->
                    <div class="text-center p-5 flex-auto justify-center">
                        <div class="flex flex-col mb-4">
                            <div class="relative flex justify-center ">
                                <div class="flex border border-transparent w-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polygon points="14 2 18 6 7 17 3 17 3 13 14 2"></polygon>
                                        <line x1="3" y1="22" x2="21" y2="22"></line>
                                    </svg>
                                </div>
                                <div class="flex">
                                    Form Product (Insert & Update)
                                </div>
                            </div>

                        </div>

                        <form wire:submit.prevent='store()'>
                            <div class="w-full mt-6">
                                <div class="overflow-auto max-h-80 ...">
                                    <div class="flex flex-col mb-4">
                                        <div class="relative">
                                            <div
                                                class="absolute flex border border-transparent left-0 top-0 h-full w-10">
                                                <div
                                                    class="flex items-center justify-center rounded-tl rounded-bl z-10 bg-gray-100 text-gray-600 text-lg h-full w-full">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-info-square"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                                        <path
                                                            d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                                    </svg>
                                                </div>
                                            </div>

                                            <input wire:model="name" id="name" type="text" placeholder="Name"
                                                value="{{ old('name') }}"
                                                class="text-sm sm:text-base relative w-full border rounded placeholder-gray-400 focus:border-indigo-400 focus:outline-none py-2 pr-2 pl-12 @error('name') border-red-500 @enderror">
                                        </div>
                                        @error('name')
                                            <span
                                                class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="flex flex-col mb-4">
                                        <div class="relative">
                                            <div
                                                class="absolute flex border border-transparent left-0 top-0 h-full w-10">
                                                <div
                                                    class="flex items-center justify-center rounded-tl rounded-bl z-10 bg-gray-100 text-gray-600 text-lg h-full w-full">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-currency-dollar"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
                                                    </svg>
                                                </div>
                                            </div>

                                            <input wire:model="price" id="price" type="text" placeholder="Price"
                                                value="{{ old('price') }}"
                                                class="text-sm sm:text-base relative w-full border rounded placeholder-gray-400 focus:border-indigo-400 focus:outline-none py-2 pr-2 pl-12 @error('price') border-red-500 @enderror">
                                        </div>
                                        @error('price')
                                            <span
                                                class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="flex flex-col mb-4">
                                        <div class="relative">
                                            <div class="relative inline-block w-full text-gray-700">
                                                <select wire:model="is_ready"
                                                    class="w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline"
                                                    placeholder="Regular input">
                                                    <option>--Choose stock status--</option>
                                                    <option value=1>Ready</option>
                                                    <option value=0>Not Ready</option>
                                                </select>
                                                <div
                                                    class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                                </div>
                                            </div>
                                        </div>
                                        @error('is_ready')
                                            <span
                                                class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="flex flex-col mb-4">
                                        <div class="relative">
                                            <div
                                                class="absolute flex border border-transparent left-0 top-0 h-full w-10">
                                                <div
                                                    class="flex items-center justify-center rounded-tl rounded-bl z-10 bg-gray-100 text-gray-600 text-lg h-full w-full">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-paint-bucket"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M6.192 2.78c-.458-.677-.927-1.248-1.35-1.643a2.972 2.972 0 0 0-.71-.515c-.217-.104-.56-.205-.882-.02-.367.213-.427.63-.43.896-.003.304.064.664.173 1.044.196.687.556 1.528 1.035 2.402L.752 8.22c-.277.277-.269.656-.218.918.055.283.187.593.36.903.348.627.92 1.361 1.626 2.068.707.707 1.441 1.278 2.068 1.626.31.173.62.305.903.36.262.05.64.059.918-.218l5.615-5.615c.118.257.092.512.05.939-.03.292-.068.665-.073 1.176v.123h.003a1 1 0 0 0 1.993 0H14v-.057a1.01 1.01 0 0 0-.004-.117c-.055-1.25-.7-2.738-1.86-3.494a4.322 4.322 0 0 0-.211-.434c-.349-.626-.92-1.36-1.627-2.067-.707-.707-1.441-1.279-2.068-1.627-.31-.172-.62-.304-.903-.36-.262-.05-.64-.058-.918.219l-.217.216zM4.16 1.867c.381.356.844.922 1.311 1.632l-.704.705c-.382-.727-.66-1.402-.813-1.938a3.283 3.283 0 0 1-.131-.673c.091.061.204.15.337.274zm.394 3.965c.54.852 1.107 1.567 1.607 2.033a.5.5 0 1 0 .682-.732c-.453-.422-1.017-1.136-1.564-2.027l1.088-1.088c.054.12.115.243.183.365.349.627.92 1.361 1.627 2.068.706.707 1.44 1.278 2.068 1.626.122.068.244.13.365.183l-4.861 4.862a.571.571 0 0 1-.068-.01c-.137-.027-.342-.104-.608-.252-.524-.292-1.186-.8-1.846-1.46-.66-.66-1.168-1.32-1.46-1.846-.147-.265-.225-.47-.251-.607a.573.573 0 0 1-.01-.068l3.048-3.047zm2.87-1.935a2.44 2.44 0 0 1-.241-.561c.135.033.324.11.562.241.524.292 1.186.8 1.846 1.46.45.45.83.901 1.118 1.31a3.497 3.497 0 0 0-1.066.091 11.27 11.27 0 0 1-.76-.694c-.66-.66-1.167-1.322-1.458-1.847z" />
                                                    </svg>
                                                </div>
                                            </div>

                                            <input wire:model="colour" id="colour" type="text" placeholder="Colour"
                                                value="{{ old('colour') }}"
                                                class="text-sm sm:text-base relative w-full border rounded placeholder-gray-400 focus:border-indigo-400 focus:outline-none py-2 pr-2 pl-12 @error('colour') border-red-500 @enderror">
                                        </div>
                                        @error('colour')
                                            <span
                                                class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="flex flex-col mb-4">
                                        <div class="relative">
                                            <div class="relative inline-block w-full text-gray-700">
                                                <select wire:model="id_category"
                                                    class="w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline"
                                                    placeholder="Regular input">
                                                    @php
                                                        $categories = \App\Models\Category::all();
                                                    @endphp
                                                    <option>--Choose category--</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <div
                                                    class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                                </div>
                                            </div>
                                        </div>
                                        @error('id_category')
                                            <span
                                                class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="flex flex-col mb-4">
                                        <div class="relative">
                                            <div
                                                class="absolute flex border border-transparent left-0 top-0 h-full w-10">
                                                <div
                                                    class="flex items-center justify-center rounded-tl rounded-bl z-10 bg-gray-100 text-gray-600 text-lg h-full w-full">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-aspect-ratio"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M0 3.5A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5v-9zM1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z" />
                                                        <path
                                                            d="M2 4.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H3v2.5a.5.5 0 0 1-1 0v-3zm12 7a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H13V8.5a.5.5 0 0 1 1 0v3z" />
                                                    </svg>
                                                </div>
                                            </div>

                                            <input wire:model="size" id="size" type="text" placeholder="Size"
                                                value="{{ old('size') }}"
                                                class="text-sm sm:text-base relative w-full border rounded placeholder-gray-400 focus:border-indigo-400 focus:outline-none py-2 pr-2 pl-12 @error('size') border-red-500 @enderror">
                                        </div>
                                        @error('size')
                                            <span
                                                class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="flex flex-col mb-4">
                                        <div class="relative">
                                            <div
                                                class="absolute flex border border-transparent left-0 top-0 h-full w-10">
                                                <div
                                                    class="flex items-center justify-center rounded-tl rounded-bl z-10 bg-gray-100 text-gray-600 text-lg h-full w-full">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-speedometer2"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                                                        <path fill-rule="evenodd"
                                                            d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
                                                    </svg>
                                                </div>
                                            </div>

                                            <input wire:model="weight" id="weight" type="number" step="0.1"
                                                placeholder="Weight (Float)" value="{{ old('weight') }}"
                                                class="text-sm sm:text-base relative w-full border rounded placeholder-gray-400 focus:border-indigo-400 focus:outline-none py-2 pr-2 pl-12 @error('weight') border-red-500 @enderror">
                                        </div>
                                        @error('weight')
                                            <span
                                                class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="flex flex-col mb-4">
                                        <div class="relative">
                                            <div
                                                class="absolute flex border border-transparent left-0 top-0 h-full w-10">
                                                <div
                                                    class="flex items-center justify-center rounded-tl rounded-bl z-10 bg-gray-100 text-gray-600 text-lg h-full w-full">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-body-text" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M0 .5A.5.5 0 0 1 .5 0h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 0 .5Zm0 2A.5.5 0 0 1 .5 2h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm9 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm-9 2A.5.5 0 0 1 .5 4h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Zm5 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm7 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Zm-12 2A.5.5 0 0 1 .5 6h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5Zm8 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm-8 2A.5.5 0 0 1 .5 8h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm7 0a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm-7 2a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Z" />
                                                    </svg>
                                                </div>
                                            </div>

                                            <input wire:model="description" id="description" type="text"
                                                placeholder="Description" value="{{ old('description') }}"
                                                class="text-sm sm:text-base relative w-full border rounded placeholder-gray-400 focus:border-indigo-400 focus:outline-none py-2 pr-2 pl-12 @error('description') border-red-500 @enderror">
                                        </div>
                                        @error('description')
                                            <span
                                                class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="relative flex w-full flex-wrap items-stretch mb-3">
                                        <label class="text-sm font-medium text-gray-900 block mb-2"
                                            for="user_avatar">File image (recommended ratio image = 1:1)</label>
                                        <input id="image" wire:model="image"
                                            class="text-sm sm:text-base relative w-full border rounded placeholder-gray-400 focus:border-indigo-400 focus:outline-none py-2 pr-2 pl-12"
                                            aria-describedby="user_avatar_help" type="file">
                                        @error('image')
                                            <span
                                                class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    @php
                                        $array = explode('.', $old_image);
                                    @endphp
                                    @if ($array[count($array) - 1] == 'png' || $array[count($array) - 1] == 'jpg' || $array[count($array) - 1] == 'jpeg')
                                        <div>
                                            <img class="w-80 h-80 mx-auto" src="{{ asset('storage/' . $old_image) }}"
                                                alt="old image">
                                        </div>
                                        <div>
                                            <div class="text-center text-gray-400 text-xs font-semibold">
                                                <p>Old Image</p>
                                            </div>
                                        </div>
                                    @endif

                                </div>
                            </div>

                        </form>
                    </div>
                    <!--footer-->
                    <div class="p-3  mt-2 text-center space-x-4 md:block">
                        <button wire:click='closeModal()'
                            class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">
                            Cancel
                        </button>
                        <button wire:click='store()'
                            class="mb-2 md:mb-0 bg-blue-500 border border-blue-500 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-blue-600">{{ $string_form_status }}</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="py-12">
        <div class="bg-white overflow-hidden sm:rounded-lg">
            {{-- MAIN CONTENT --}}

            <div class="flex justify-center bg-gray-100 font-sans overflow-hidden">
                <div class="w-full lg:w-5/6">
                    <div class="container py-2 px-2">

                    </div>
                    <div class="flex justify-between items-center mb-5">
                        <div class="flex items-center">
                            <button wire:click="passing_value_for_insert()"
                                class="bg-blue-500 hover:bg-blue-700 text-white text-sm py-2 px-4 rounded">
                                Add product
                            </button>
                        </div>
                        <div class="flex justify-center items-end">
                            <div class="pl-3 inline-block no-underline hover:text-black">
                                <input wire:model="search" type="text" class="form-control" placeholder="Search..."
                                    aria-label="Search" aria-describedby="basic-addon1">
                            </div>

                            <div class="pl-3 inline-block no-underline hover:text-black">

                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fas fa-search"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white shadow-md rounded">
                        <table class="min-w-max w-full table-auto">
                            <thead>
                                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                    <th class="py-3 px-6 text-left">Name</th>
                                    <th class="py-3 px-6 text-left">Price</th>
                                    <th class="py-3 px-6 text-center">Status</th>
                                    <th class="py-3 px-6 text-center">Colour</th>
                                    <th class="py-3 px-6 text-center">Image</th>
                                    <th class="py-3 px-6 text-center">Category</th>
                                    <th class="py-3 px-6 text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 text-sm font-light">
                                @foreach ($products as $product)
                                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                            <div class="flex items-center">
                                                <span class="font-medium">{{ $product->name }}</span>
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                            <div class="flex items-center">
                                                <span class="font-medium">{{ $product->price }}</span>
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-center">
                                            <div class="flex items-center justify-center">
                                                <span class="font-medium">
                                                    @if ($product->is_ready)
                                                        <span
                                                            class="inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-green-100 bg-green-600 rounded-full">
                                                            Ready stock
                                                        </span>
                                                    @else
                                                        <span
                                                            class="inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full">
                                                            Out of stock
                                                        </span>
                                                    @endif
                                                </span>
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-center">
                                            <div class="flex items-center justify-center">
                                                <span class="font-medium">{{ $product->colour }}</span>
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-center">
                                            <div class="flex items-center justify-center">
                                                <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                                    src="{{ asset('storage/' . $product->image) }}" />
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-center">
                                            <div class="flex items-center justify-center">
                                                <span class="font-medium">
                                                    {{ $product->category->name }}
                                                </span>
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-center">
                                            <div class="flex item-center justify-center">
                                                <div wire:click="passing_value_for_edit({{ $product->id }})"
                                                    class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                </div>
                                                <div wire:click="destroy_ask({{ $product->id }})"
                                                    class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $products->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        document.addEventListener('livewire:load', function() {
            // Execute on livewire:load (first load)
        })
    </script>

</div>
