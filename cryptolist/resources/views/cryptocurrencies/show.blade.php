@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-black to-indigo-900 py-6 flex flex-col justify-center sm:py-12">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div class="absolute inset-0 bg-gradient-to-r from-indigo-800 to-indigo-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
        <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
            <h1 class="text-center text-2xl">{{ $cryptocurrency['name'] }} ({{ strtoupper($cryptocurrency['symbol']) }})</h1>
            
            <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-10">
                <div>
                    <img class="w-full rounded-lg" src="{{ $cryptocurrency['image'] }}" alt="{{ $cryptocurrency['name'] }}">
                </div>
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
</div>
@endsection
