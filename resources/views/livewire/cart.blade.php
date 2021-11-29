<div class="w-full container">
    <div class="col-span-2 p-5">
        <h1 class="text-xl font-medium ">Shopping Cart</h1>
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
                        <span class="text-md font-medium">Rp. {{ number_format($orderDetail->price) }}</span>
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
            <div class="flex pt-6">
                <span class="title-font font-medium text-2xl text-gray-900"></span>
                <a href="{{ route('checkout') }}"
                    class="flex ml-auto text-white bg-gray-500 border-0 py-2 px-6 focus:outline-none hover:bg-gray-600 rounded disabled:opacity-50">
                    Checkout
                </a>
            </div>
        @endif
    </div>

    {{-- INLINE SCRIPT --}}
    <script>
        document.addEventListener('livewire:load', function() {
            // Execute on livewire:load (first load)
        });
    </script>
</div>
