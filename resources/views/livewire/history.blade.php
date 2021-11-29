<div class="container">

    <h1 class="text-xl font-medium pb-10">Order History</h1>

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
                                    Input Payment Image
                                </div>
                            </div>

                        </div>

                        <form wire:submit.prevent='store()'>
                            <div class="w-full mt-6">
                                <div class="overflow-auto max-h-80 ...">
                                    <div class="relative flex w-full flex-wrap items-stretch mb-3">
                                        <label class="text-sm font-medium text-gray-900 block mb-2"
                                            for="user_avatar">File image payment</label>
                                        <input id="image_payment" wire:model="image_payment"
                                            class="text-sm sm:text-base relative w-full border rounded placeholder-gray-400 focus:border-indigo-400 focus:outline-none py-2 pr-2 pl-12"
                                            aria-describedby="user_avatar_help" type="file">
                                        @error('image_payment')
                                            <span
                                                class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    @php
                                        $array = explode('.', $old_image_payment);
                                    @endphp
                                    @if ($array[count($array) - 1] == 'png' || $array[count($array) - 1] == 'jpg' || $array[count($array) - 1] == 'jpeg')
                                        <div>
                                            <img class="w-80 h-80 mx-auto" src="{{ asset('storage/' . $old_image_payment) }}" alt="PaymentImg">
                                        </div>
                                        <div>
                                            <div class="text-center text-gray-400 text-xs font-semibold">
                                                <p>Old Payment Image</p>
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
                            class="mb-2 md:mb-0 bg-blue-500 border border-blue-500 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-blue-600">Update Image</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="block w-full overflow-x-auto pb-10">
        <table class="items-center bg-transparent w-full border-collapse ">
            <thead>
                <tr>
                    <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Order Number
                    </th>
                    <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Order Date
                    </th>
                    <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Order Item
                    </th>
                    <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Status
                    </th>
                    <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Total
                    </th>
                </tr>
            </thead>

            <tbody>
                @forelse ($orders as $order)
                    <tr>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                            {{ $order->order_number }}
                        </td>
                        <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                            {{ $order->created_at }}
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                            @php
                                $items = \App\Models\OrderDetail::where('id_order', $order->id)->get();
                            @endphp
                            @foreach ($items as $item)
                                {{ $item->product->name }} (Amount : {{ $item->qty }})
                                <br>
                            @endforeach
                        </td>
                        <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                            @if ($order->status == 1)
                                <span
                                    class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full">
                                    Menunggu Pembayaran
                                </span>
                                <i wire:click='passing_value_for_edit({{ $order->id }})' class="fas fa-file-upload text-lg cursor-pointer"></i>
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
                                Error
                            @endif
                        </td>
                        <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                            Rp. {{ number_format($order->price_total) }}
                        </td>
                    </tr>
                @empty
                @endforelse
            </tbody>

        </table>
    </div>

    <div class="w-full">
        <h4>Payment Information</h4>
        <hr>
        <div class="flex space-x-5 items-center">
            <div class="flex-auto mb-4">
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
            <div class="flex-auto mb-4 justify-items-center">
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
    </div>

</div>
