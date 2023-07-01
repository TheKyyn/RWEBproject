@extends('layouts.app')

@section('content')
    <div class="mx-auto my-4 px-4 md:px-0 md:w-2/3 lg:w-1/2">
        <h1 class="text-center text-2xl mb-4">Top 100 Cryptocurrencies</h1>

        <div class="overflow-auto">
            <table class="w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Market Cap</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">24h %</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">7d %</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($cryptocurrencies as $cryptocurrency)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('cryptocurrencies.show', $cryptocurrency->id) }}" class="text-indigo-600 hover:text-indigo-900">
                                    {{ $cryptocurrency->name }}
                                </a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">${{ number_format($cryptocurrency->current_price, 2) }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">${{ number_format($cryptocurrency->market_cap, 0) }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if(property_exists($cryptocurrency, 'price_change_percentage_24h'))
                                    {{ $cryptocurrency->price_change_percentage_24h }}%
                                @else
                                    N/A
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
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
