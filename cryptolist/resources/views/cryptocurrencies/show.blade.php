@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-black to-indigo-900 py-6 flex flex-col justify-center sm:py-12">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div class="absolute inset-0 bg-gradient-to-r from-indigo-800 to-indigo-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
        <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
            <h1 class="text-center text-2xl">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-800 to-indigo-500">{{ $cryptocurrency['name'] }}</span>
                ({{ strtoupper($cryptocurrency['symbol']) }})
            </h1>
            
            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-16">
                <div>
                    <img class="w-full rounded-lg" src="{{ $cryptocurrency['image'] }}" alt="{{ $cryptocurrency['name'] }}">
                </div>
                <div class="bg-white overflow-hidden shadow-xl rounded-lg">
                    <div class="px-6 py-8">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">
                            <span class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-800 to-indigo-500">Cryptocurrency Details</span>
                        </h3>
                        <div class="space-y-4">
                            <p class="text-sm"><strong><span class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-800 to-indigo-500">Current Price:</span></strong> ${{ number_format($cryptocurrency['current_price'], 2) }}</p>
                            <p class="text-sm"><strong><span class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-800 to-indigo-500">Market Cap:</span></strong> ${{ number_format($cryptocurrency['market_cap'], 0) }}</p>
                            <p class="text-sm"><strong><span class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-800 to-indigo-500">Total Volume:</span></strong> ${{ number_format($cryptocurrency['total_volume'], 0) }}</p>
                            <p class="text-sm"><strong><span class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-800 to-indigo-500">24h Change:</span></strong> 
                                <span class="{{ $cryptocurrency['price_change_percentage_24h'] >= 0 ? 'text-green-500' : 'text-red-500' }}">
                                    {{ number_format($cryptocurrency['price_change_percentage_24h'], 2) }}%
                                </span>
                            </p>
                            <p class="text-sm"><strong><span class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-800 to-indigo-500">7d Change:</span></strong> 
                                @if($cryptocurrency['price_change_percentage_7d'] !== null)
                                    <span class="{{ $cryptocurrency['price_change_percentage_7d'] >= 0 ? 'text-green-500' : 'text-red-500' }}">
                                        {{ number_format($cryptocurrency['price_change_percentage_7d'], 2) }}%
                                    </span>
                                @else
                                    N/A
                                @endif
                            </p>
                            @if(array_key_exists('description', $cryptocurrency) && !empty($cryptocurrency['description']['en']))
                                <div class="mt-4">
                                    <h4 class="text-lg leading-6 font-medium text-gray-900 mb-2">
                                        <span class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-800 to-indigo-500">Description</span>
                                    </h4>
                                    <p class="text-sm">{{ $cryptocurrency['description']['en'] }}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
