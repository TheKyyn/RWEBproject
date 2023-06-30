@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-3xl mt-4 mb-8">Top 100 Cryptocurrencies</h1>

        <div class="overflow-x-auto bg-white rounded-lg shadow overflow-y-scroll relative" style="height: 405px;">
            <table class="border-collapse table-auto w-full whitespace-no-wrap bg-white table-striped relative">
                <thead>
                <tr class="text-left">
                    <th class="py-2 px-3 sticky top-0 bg-white border-b border-gray-200">#</th>
                    <th class="py-2 px-3 sticky top-0 bg-white border-b border-gray-200">Name</th>
                    <th class="py-2 px-3 sticky top-0 bg-white border-b border-gray-200">Price</th>
                    <th class="py-2 px-3 sticky top-0 bg-white border-b border-gray-200">Market Cap</th>
                    <th class="py-2 px-3 sticky top-0 bg-white border-b border-gray-200">24h %</th>
                    <th class="py-2 px-3 sticky top-0 bg-white border-b border-gray-200">7d %</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cryptocurrencies as $cryptocurrency)
                    <tr>
                        <th class="p-3">{{ $loop->iteration }}</th>
                        <td class="p-3">{{ $cryptocurrency->name }}</td>
                        <td class="p-3">${{ number_format($cryptocurrency->current_price, 2) }}</td>
                        <td class="p-3">${{ number_format($cryptocurrency->market_cap, 0) }}</td>
                        <td class="p-3">
                            @if(property_exists($cryptocurrency, 'price_change_percentage_24h'))
                                {{ $cryptocurrency->price_change_percentage_24h }}%
                            @else
                                N/A
                            @endif
                        </td>
                        <td class="p-3">
                            @if(property_exists($cryptocurrency, 'price_change_percentage_7d_in_currency'))
                                {{ $cryptocurrency->price_change_percentage_7d_in_currency }}%
                            @else
                                N/A
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
