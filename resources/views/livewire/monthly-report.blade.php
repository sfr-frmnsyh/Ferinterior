<section class="text-gray-600 body-font">
    <div class="px-5 py-10 mx-auto">

        <div class="mx-4 card bg-white p-10 rounded-lg">

            <div class="flex flex-col text-center w-full mb-5">
                <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Monthly Report.</h1>
                @if (!empty($search_year) and !empty($search_month_s) and !empty($search_month_e))
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Year : {{ $search_year }}</p>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Month : 01-{{ $search_month_s }} ~
                        01-{{ $search_month_e }}</p>
                @else
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Year : </p>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Month : </p>
                @endif

            </div>
            <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto mb-3 justify-center">
                <div class="flex flex-wrap">
                    <div class="w-full md:w-1/3 px-3">
                        <button wire:click='resetField()'
                            class="flex ml-auto text-white bg-indigo-500 border-0 px-6 py-2 focus:outline-none hover:bg-indigo-600 rounded">Reset</button>
                    </div>
                </div>
            </div>
            <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto mb-3 justify-center">
                <div class="flex flex-wrap">
                    <div class="w-full md:w-1/3 px-3">
                        <select wire:model='search_year'
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-state">
                            <option>Year</option>
                            @for ($year = 2000; $year < 2200; $year++)
                                <option value="{{ $year }}">{{ $year }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="w-full md:w-1/3 px-3">
                        <select wire:model='search_month_s'
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-state">
                            <option>Month Start</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                    </div>
                    <div class="w-full md:w-1/3 px-3">
                        <select wire:model='search_month_e'
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-state">
                            <option>Month End</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="flex w-full overflow-auto">
                <table class="table-auto w-full text-left whitespace-no-wrap">
                    <thead>
                        <tr>
                            <th
                                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl text-center">
                                No</th>
                            <th
                                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 text-center">
                                Product Name</th>
                            <th
                                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 text-center">
                                User</th>
                            <th
                                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 text-center">
                                Amount</th>
                            <th
                                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 text-center">
                                Date</th>
                                <th
                                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 text-center">
                                Order Number</th>
                            <th
                                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 text-center">
                                Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                            $grand_total = 0;
                        @endphp
                        @foreach ($order_details as $order_detail)
                            <tr>
                                <td class="px-4 py-3 text-center">{{ $no++ }}</td>
                                <td class="px-4 py-3 text-center">{{ $order_detail->product->name }}</td>
                                <td class="px-4 py-3 text-center">{{ $order_detail->order->user->name }}</td>
                                <td class="px-4 py-3 text-center">{{ $order_detail->qty }}</td>
                                <td class="px-4 py-3 text-center">{{ $order_detail->created_at }}</td>
                                <td class="px-4 py-3 text-center">{{ $order_detail->order_number }}</td>
                                <td class="px-4 py-3 text-lg text-gray-900 text-right">Rp.
                                    {{ number_format($order_detail->price) }}</td>
                            </tr>
                            @php
                                $grand_total += $order_detail->price;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="flex pl-4 mt-4 w-full mx-auto">
                <div class="inline-flex items-center md:mb-2 lg:mb-0">
                    <p>
                        Gross Profit Total :
                    </p>
                </div>
                <div class="flex ml-auto">
                    <p>Rp. {{ number_format($grand_total) }}</p>
                </div>
            </div>

        </div>
    </div>
</section>
