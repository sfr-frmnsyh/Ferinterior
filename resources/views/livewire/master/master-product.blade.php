<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="#000000"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path
                                                            d="M6 2L3 6v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6l-3-4H6zM3.8 6h16.4M16 10a4 4 0 1 1-8 0" />
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="#000000"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path
                                                            d="M6 2L3 6v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6l-3-4H6zM3.8 6h16.4M16 10a4 4 0 1 1-8 0" />
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="#000000"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path
                                                            d="M6 2L3 6v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6l-3-4H6zM3.8 6h16.4M16 10a4 4 0 1 1-8 0" />
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="#000000"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path
                                                            d="M6 2L3 6v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6l-3-4H6zM3.8 6h16.4M16 10a4 4 0 1 1-8 0" />
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="#000000"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path
                                                            d="M6 2L3 6v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6l-3-4H6zM3.8 6h16.4M16 10a4 4 0 1 1-8 0" />
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="#000000"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path
                                                            d="M6 2L3 6v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6l-3-4H6zM3.8 6h16.4M16 10a4 4 0 1 1-8 0" />
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
                                            for="user_avatar">File image</label>
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
                                        <div class="rounded-xl flex justify-between mt-4 content-center">
                                            <div class="flex space-x-6 items-center">
                                                <img class="mr-3"
                                                    src="{{ asset('storage/' . $old_image) }}" alt="BRI" width="250">
                                                <div>
                                                    <p class="font-semibold text-base">Old Image</p>
                                                    </p>
                                                </div>
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
                                                    src="{{ asset('assets/product') . '/' . $product->image }}" />
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
