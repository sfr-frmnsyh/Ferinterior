<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Master (About Us)') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid min-h-screen place-items-center">
                <div class="w-5/6 p-12 bg-white ">
                    <form wire:submit.prevent='store()'>
                        <label for="name" class="mt-2 block text-xs font-semibold text-gray-600 uppercase">Name</label>
                        <input wire:model='name' id="name" type="text" name="name" placeholder="Input company name" autocomplete="given-name"
                            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner @error('name') border-red-500 @enderror"
                            required />
                        @error('name')
                            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                {{ $message }}
                            </span>
                        @enderror
                        <label for="address" class="mt-2 block text-xs font-semibold text-gray-600 uppercase">Address</label>
                        <input wire:model='address' id="address" type="text" name="address" placeholder="Input company address"
                            autocomplete="family-name"
                            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner @error('address') border-red-500 @enderror"
                            required />
                        @error('address')
                            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                {{ $message }}
                            </span>
                        @enderror
                        <label for="phone_number" class="mt-2 block text-xs font-semibold text-gray-600 uppercase">Phone Number</label>
                        <input wire:model='phone_number' id="phone_number" type="text" name="phone_number" placeholder="Input company phone number"
                            autocomplete="family-name"
                            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner @error('phone_number') border-red-500 @enderror"
                            required />
                        @error('phone_number')
                            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                {{ $message }}
                            </span>
                        @enderror
                        <label for="link_facebook" class="mt-2 block text-xs font-semibold text-gray-600 uppercase">Link Facebook</label>
                        <input wire:model='link_facebook' id="link_facebook" type="text" name="link_facebook" placeholder="Input company link facebook"
                            autocomplete="family-name"
                            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner @error('link_facebook') border-red-500 @enderror"
                            required />
                        @error('link_facebook')
                            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                {{ $message }}
                            </span>
                        @enderror
                        <label for="link_twitter" class="mt-2 block text-xs font-semibold text-gray-600 uppercase">Link Twitter</label>
                        <input wire:model='link_twitter' id="link_twitter" type="text" name="link_twitter" placeholder="Input company link twitter"
                            autocomplete="family-name"
                            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner @error('link_twitter') border-red-500 @enderror"
                            required />
                        @error('link_twitter')
                            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                {{ $message }}
                            </span>
                        @enderror
                        <label for="link_instagram" class="mt-2 block text-xs font-semibold text-gray-600 uppercase">Link Instagram</label>
                        <input wire:model='link_instagram' id="link_instagram" type="text" name="link_instagram" placeholder="Input company link instagram"
                            autocomplete="family-name"
                            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner @error('link_instagram') border-red-500 @enderror"
                            required />
                        @error('link_instagram')
                            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                {{ $message }}
                            </span>
                        @enderror
                        <label for="about" class="mt-2 block text-xs font-semibold text-gray-600 uppercase">About Company</label>
                        <textarea wire:model='about' id="about" type="text" name="about" placeholder="Input about"
                            autocomplete="family-name"
                            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner @error('about') border-red-500 @enderror"
                            required></textarea>
                        @error('about')
                            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                {{ $message }}
                            </span>
                        @enderror
                        <textarea wire:model='about2' id="about2" type="text" name="about2" placeholder="Input about2"
                            autocomplete="family-name"
                            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner @error('about2') border-red-500 @enderror"
                            required></textarea>
                        @error('about2')
                            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                {{ $message }}
                            </span>
                        @enderror
                        <button type="submit"
                            class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                            Save
                        </button>
                    </form>
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
