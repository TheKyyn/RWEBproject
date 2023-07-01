@extends('layouts.app')

@section('content')
    <div class="container mx-auto my-4 px-4 md:px-0 md:w-2/3 lg:w-1/2">
        <h1 class="text-center text-2xl">{{ $cryptocurrency['name'] }} ({{ strtoupper($cryptocurrency['symbol']) }})</h1>
        <div class="mt-4 flex flex-wrap -mx-2">
            <div class="w-full sm:w-1/2 px-2 mb-4">
                <img class="rounded mx-auto d-block" src="{{ $cryptocurrency['image'] }}" alt="{{ $cryptocurrency['name'] }}">
            </div>
            <div class="w-full sm:w-1/2 px-2">
                <div class="bg-white overflow-hidden shadow rounded-lg divide-y divide-gray-200">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Cryptocurrency Details
                        </h3>
                        <div class="mt-5">
                            <p class="text-sm"><strong>Current Price:</strong> ${{ number_format($cryptocurrency['current_price'], 2) }}</p>
                            <p class="text-sm"><strong>Market Cap:</strong> ${{ number_format($cryptocurrency['market_cap'], 0) }}</p>
                            <p class="text-sm"><strong>Total Volume:</strong> ${{ number_format($cryptocurrency['total_volume'], 0) }}</p>
                            <p class="text-sm"><strong>24h Change:</strong> {{ $cryptocurrency['price_change_percentage_24h'] }}%</p>
                            <p class="text-sm"><strong>7d Change:</strong> {{ $cryptocurrency['price_change_percentage_7d'] }}%</p>
                            <p class="text-sm"><strong>Market Cap Rank:</strong> #{{ $cryptocurrency['market_cap_rank'] }}</p>
                            <p class="text-sm"><strong>Homepage:</strong> <a href="{{ $cryptocurrency['homepage'] }}" target="_blank" class="text-indigo-600 hover:text-indigo-900">{{ $cryptocurrency['homepage'] }}</a></p>
                            <p class="text-sm"><strong>Community Link:</strong> <a href="{{ $cryptocurrency['community_link'] }}" target="_blank" class="text-indigo-600 hover:text-indigo-900">{{ $cryptocurrency['community_link'] }}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
