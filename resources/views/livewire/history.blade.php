<div class="container">

    <h1 class="text-xl font-medium pb-10">Order History</h1>
    <div class="block w-full overflow-x-auto pb-10">
        <table class="items-center bg-transparent w-full border-collapse ">
            <thead>
                <tr>
                    <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        No
                    </th>
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
                @php
                    $no = 1;
                @endphp
                @forelse ($orders as $order)
                    <tr>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                            {{ $no++ }}
                        </td>
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
                            @endforeach
                        </td>
                        <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                            @if ($order->status == 1)
                                <span
                                    class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full">
                                    Menunggu Pembayaran
                                </span>
                            @elseif ($order->status == 2)
                                <span
                                    class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-yellow-100 bg-yellow-600 rounded-full">
                                    Pesanan Diproses
                                </span>
                            @elseif ($order->status == 3)
                                <span
                                    class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-green-100 bg-green-600 rounded-full">
                                    Pesanan Telah Tiba
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
        <div class="flex items-center">
            <div class="flex-auto mb-4">
                <!-- Start Card List -->
                <div class="bg-white p-3 rounded-xl shadow-xl flex items-center justify-between mt-4">
                    <div class="flex space-x-6 items-center">
                        <img class="mr-3" src="{{ url('assets/bank/bni.png') }}" alt="BRI" width="75">
                        <div>
                            <p class="font-semibold text-base">Bank BNI</p>
                            <p class="font-semibold text-xs text-gray-400">No. Rekening 521-666-129 atas nama
                                <strong>Bernard Mahfoudz</strong>
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
                            <p class="font-semibold text-xs text-gray-400">No. Rekening 521-666-129 atas nama
                                <strong>Bernard Mahfoudz</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Card List -->
            </div>
        </div>
    </div>

</div>
