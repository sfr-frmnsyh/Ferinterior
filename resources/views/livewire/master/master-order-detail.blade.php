<div class="py-12">

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="grid place-items-center">
            <div class="w-5/6 p-12 bg-white ">

                <div class="col-span-2 p-5">
                    <div class="col-start-2 col-end-11 pl-8 border-l-2 border-solid border-gray">
                        <h3 class="text-gray-900 font-medium text-md">Number : {{ $order->order_number }}</h3>
                        <p class="text-gray-600 mt-1 font-regular text-sm">
                            Detail order from user : {{ $order->user->name }}
                        </p>
                    </div>
                    @forelse ($orderDetails as $orderDetail)
                        <div class="flex justify-between items-center mt-6 pt-6 border-t">
                            <div class="flex items-center">
                                <a href="{{ route('products.detail', $orderDetail->product->id) }}">
                                    <img src="{{ asset('storage') . '/' . $orderDetail->product->image }}" width="60"
                                        class="rounded">
                                </a>
                                <div class="flex flex-col ml-3 "> <span
                                        class="text-md font-medium">{{ $orderDetail->product->name }} (Qty :
                                        {{ $orderDetail->qty }})</span>
                                    <span class="text-xs text-gray-400">@ Rp.
                                        {{ number_format($orderDetail->price / $orderDetail->qty) }}</span>
                                </div>
                            </div>
                            <div class="flex justify-center items-center">
                                <div class="pr-8">
                                    <span class="text-md font-medium">Rp.
                                        {{ number_format($orderDetail->price) }}</span>
                                </div>
                                <div>
                                    <i class="fas fa-trash text-red-600 cursor-pointer"
                                        wire:click="destroy_ask({{ $orderDetail->id }})"></i>
                                </div>
                            </div>
                        </div>

                    @empty
                        <div class="flex justify-between items-center mt-6 pt-6 border-t">
                            <div class="flex items-center"> <i class="fas fa-low-vision"></i>
                                <div class="flex flex-col ml-3 "> <span class="text-md font-medium">No Data</span>
                                    <span class="text-xs font-light text-gray-400">@ Rp. -</span>
                                </div>
                            </div>
                            <div class="flex justify-center items-center">
                                <div class="pr-8">
                                    <span class="text-md font-medium">Rp. -</span>
                                </div>
                                <div>
                                    <i class="fas fa-trash"></i>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>

                <div class="col-span-2 p-5">
                    @if (!empty($order))
                        <div class="flex justify-between items-center border-t">
                            <div class="flex items-center">
                                <span class="text-md font-medium text-gray-400 mr-1">Unique Code :</span>
                            </div>
                            <div class="flex justify-center items-end">
                                <span class="text-lg text-gray-800 ">Rp.
                                    {{ number_format($order->unique_code) }}</span>
                            </div>
                        </div>

                        <div class="flex justify-between items-center border-t">
                            <div class="flex items-center">
                                <span class="text-md font-medium text-gray-400 mr-1">Grand Total :</span>
                            </div>
                            <div class="flex justify-center items-end">
                                <span class="text-lg font-bold text-gray-800 ">Rp.
                                    {{ number_format($order->price_total + $order->unique_code) }}</span>
                            </div>
                        </div>
                        <div class="flex pt-6 justify-around">
                            <div class="flextext-gray-700">
                            <form wire:submit.prevent='store()'>
                                    <select wire:model="status"
                                        class="w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline"
                                        placeholder="Regular input">
                                        <option>--Choose status--</option>
                                        <option value=1>Menunggu Pembayaran</option>
                                        <option value=2>Pesanan Diproses</option>
                                        <option value=3>Pesanan Sedang Dikirim</option>
                                        <option value=4>Pesanan Selesai</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                    </div>
                                </form>
                            </div>
                            <div class="flex text-gray-700">
                                <button wire:click='store_ask({{ $order->id }}, {{ $status }})'
                                    class="mb-2 md:mb-0 bg-blue-500 border border-blue-500 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-blue-600">Update
                                    Status</button>
                            </div>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>

    {{-- INLINE SCRIPT --}}
    <script>
        document.addEventListener('livewire:load', function() {
            // Execute on livewire:load (first load)
        });
    </script>
</div>
