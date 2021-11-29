<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Master (Orders)') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="bg-white overflow-hidden sm:rounded-lg">
            {{-- MAIN CONTENT --}}

            <div class="flex justify-center bg-gray-100 font-sans overflow-hidden">
                <div class="w-full lg:w-5/6">
                    <div class="container py-2 px-2">

                    </div>
                    <div class="flex justify-between items-center mb-5">
                        <div class="flex items-center">
                            {{-- Item left --}}
                        </div>
                        <div class="flex justify-center items-end">
                            <div class="pl-3 inline-block no-underline hover:text-black">
                                <input wire:model="search_order_number" type="text" class="form-control" placeholder="Search by order number"
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
                                    <th class="py-3 px-6 text-left">Order Number</th>
                                    <th class="py-3 px-6 text-left">Status</th>
                                    <th class="py-3 px-6 text-center">Total Price</th>
                                    <th class="py-3 px-6 text-center">Payment Upload</th>
                                    <th class="py-3 px-6 text-center">User</th>
                                    <th class="py-3 px-6 text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 text-sm font-light">
                                @foreach ($orders as $order)
                                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                            <div class="flex items-center">
                                                <span class="font-medium">{{ $order->order_number }}</span>
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                            <div class="flex items-center">
                                                @if ($order->status == 1)
                                                    <span
                                                        class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full">
                                                        Menunggu Pembayaran
                                                    </span>
                                                    <i wire:click='passing_value_for_edit({{ $order->id }})'
                                                        class="fas fa-file-upload text-lg"></i>
                                                @elseif ($order->status == 2)
                                                    <span
                                                        class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-yellow-100 bg-yellow-600 rounded-full">
                                                        Pesanan Diproses
                                                    </span>
                                                @elseif ($order->status == 3)
                                                    <span
                                                        class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-green-100 bg-green-600 rounded-full">
                                                        Pesanan Sedang Dikirim
                                                    </span>
                                                @elseif ($order->status == 4)
                                                    <span
                                                        class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-100 bg-gray-600 rounded-full">
                                                        Pesanan Telah Selesai
                                                    </span>
                                                @else
                                                @endif
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-center">
                                            <div class="flex items-center justify-center">
                                                <span class="font-medium">Rp.
                                                    {{ number_format($order->price_total + $order->unique_code) }}</span>
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-center">
                                            <div class="flex items-center justify-center">
                                                @if ($order->image_payment)
                                                <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                                    src="{{ asset('storage/' . $order->image_payment) }}" />
                                                @else
                                                <p>Haven't upload image</p>
                                                @endif
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-center">
                                            <div class="flex items-center justify-center">
                                                <span class="font-medium">
                                                    {{ $order->user->name }}
                                                </span>
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-center">
                                            <div class="flex item-center justify-center">
                                                <a href="{{ route('master.orders.detail', $order->id) }}"
                                                    class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $orders->links() }}
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
