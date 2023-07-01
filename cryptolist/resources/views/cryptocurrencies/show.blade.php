@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-3xl mt-4 mb-8">{{ $cryptocurrency['name'] }} ({{ strtoupper($cryptocurrency['symbol']) }})</h1>

        <div class="flex">
            <div class="w-1/2">
                <img class="w-full h-auto" src="{{ $cryptocurrency['image'] }}" alt="{{ $cryptocurrency['name'] }}">
            </div>
            <div class="w-1/2 px-4">
                <p><strong>Current Price:</strong> ${{ number_format($cryptocurrency['current_price'], 2) }}</p>
                <p><strong>Market Cap:</strong> ${{ number_format($cryptocurrency['market_cap'], 0) }}</p>
                <p><strong>Total Volume:</strong> ${{ number_format($cryptocurrency['total_volume'], 0) }}</p>
                <p><strong>24h Change:</strong> {{ $cryptocurrency['price_change_percentage_24h'] }}%</p>
                <p><strong>7d Change:</strong> {{ $cryptocurrency['price_change_percentage_7d'] }}%</p>
                <p><strong>Market Cap Rank:</strong> #{{ $cryptocurrency['market_cap_rank'] }}</p>
                <p><strong>Homepage:</strong> <a href="{{ $cryptocurrency['homepage'] }}" target="_blank">{{ $cryptocurrency['homepage'] }}</a></p>
                <p><strong>Community Link:</strong> <a href="{{ $cryptocurrency['community_link'] }}" target="_blank">{{ $cryptocurrency['community_link'] }}</a></p>
            </div>
        </div>
    </div>
@endsection
