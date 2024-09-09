<div class="flex w-full items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg  w-5/6">
        <div class="flex justify-between p-4">
            <div>
                <h1 class="text-3xl italic font-extrabold tracking-widest text-indigo-500">Ferinterior</h1>
            </div>
            <div class="p-2">
                <ul class="flex">
                    <li class="flex flex-col items-center p-2 border-l-2 border-indigo-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                        </svg>
                        <span class="text-sm">
                            www.ferinterior.com
                        </span>
                    </li>
                    <li class="flex flex-col p-2 border-l-2 border-indigo-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="text-sm">
                            {{ @$aboutus->address }}
                        </span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-full h-0.5 bg-indigo-500"></div>
        <div class="flex justify-between p-4">
            <div>
                <h6 class="font-bold">Order Date : <span class="text-sm font-medium">
                        {{ $order->created_at }}</span></h6>
                <h6 class="font-bold">Order ID : <span class="text-sm font-medium">
                        {{ $order->order_number }}</span></h6>
            </div>
            <div class="w-40">
                <address class="text-sm">
                    <span class="font-bold"> Billed To : </span>
                    {{ $order->user->name }}
                    ({{ $order->user->phone_number }})
                </address>
            </div>
            <div class="w-40">
                <address class="text-sm">
                    <span class="font-bold">Ship To :</span>
                    {{ $order->user->address }}
                </address>
            </div>
            <div></div>
        </div>
        <div class="flex justify-center p-4 w-full">
            <div class="border-b border-gray-200 shadow">
                <table class="">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-xs text-gray-500 ">
                                #
                            </th>
                            <th class="px-4 py-2 text-xs text-gray-500 ">
                                Product Name
                            </th>
                            <th class="px-4 py-2 text-xs text-gray-500 ">
                                Quantity
                            </th>
                            <th class="px-4 py-2 text-xs text-gray-500 ">
                                Price
                            </th>
                            <th class="px-4 py-2 text-xs text-gray-500 ">
                                Subtotal
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @php
                            $items = \App\Models\OrderDetail::where('id_order', $order->id)->get();
                            $no = 1;
                        @endphp
                        @foreach ($items as $item)
                            <tr class="whitespace-nowrap">
                                <td class="px-6 py-4 text-sm text-gray-500">
                                    {{ $no++ }}
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{ $item->product->name }}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-500">{{ $item->qty }}</div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">
                                    Rp. {{ number_format($item->price / $item->qty) }}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    Rp. {{ number_format($item->price) }}
                                </td>
                            </tr>
                        @endforeach
                        <!--end tr-->
                        <tr>
                            <th colspan="3"></th>
                            <td class="text-sm font-bold"><b>Unique Code</b></td>
                            <td class="text-sm font-bold text-right"><b>Rp.
                                    {{ number_format($order->unique_code) }}</b></td>
                        </tr>
                        <!--end tr-->
                        <tr class="text-white bg-gray-800">
                            <th colspan="3"></th>
                            <td class="text-sm font-bold"><b>Grand Total</b></td>
                            <td class="text-sm font-bold text-right"><b>Rp.
                                    {{ number_format($order->price_total + $order->unique_code) }}</b></td>
                        </tr>
                        <!--end tr-->

                    </tbody>
                </table>
            </div>
        </div>
        <div class="flex justify-between p-4">
            <div>
                <h3 class="text-xl">Terms And Condition :</h3>
                <ul class="text-xs list-disc list-inside">
                    <li>All accounts are to be paid within 7 days from receipt of invoice.</li>
                    <li>To be paid by cheque or credit card or direct payment online.</li>
                    <li>If account is not paid within 7 days the credits details supplied.</li>
                </ul>
            </div>
            <div class="p-4">
                <h3>Signature</h3>
                <div class="text-4xl italic text-indigo-500">AAA</div>
            </div>
        </div>
        <div class="w-full h-0.5 bg-indigo-500"></div>

        <div class="p-4">
            <div class="flex items-center justify-center">
                Thank you very much for doing business with us.
            </div>
            <div class="flex items-end justify-end space-x-3">
            </div>
        </div>

    </div>
</div>
