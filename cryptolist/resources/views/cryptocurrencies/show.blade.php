@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <h1 class="text-center">{{ $cryptocurrency['name'] }} ({{ strtoupper($cryptocurrency['symbol']) }})</h1>
        <div class="row mt-4">
            <div class="col-lg-4 mb-4">
                <img class="img-fluid rounded mx-auto d-block" src="{{ $cryptocurrency['image'] }}" alt="{{ $cryptocurrency['name'] }}">
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header text-center font-weight-bold">
                        Cryptocurrency Details
                    </div>
                    <div class="card-body">
                        <p class="card-text"><strong>Current Price:</strong> ${{ number_format($cryptocurrency['current_price'], 2) }}</p>
                        <p class="card-text"><strong>Market Cap:</strong> ${{ number_format($cryptocurrency['market_cap'], 0) }}</p>
                        <p class="card-text"><strong>Total Volume:</strong> ${{ number_format($cryptocurrency['total_volume'], 0) }}</p>
                        <p class="card-text"><strong>24h Change:</strong> {{ $cryptocurrency['price_change_percentage_24h'] }}%</p>
                        <p class="card-text"><strong>7d Change:</strong> {{ $cryptocurrency['price_change_percentage_7d'] }}%</p>
                        <p class="card-text"><strong>Market Cap Rank:</strong> #{{ $cryptocurrency['market_cap_rank'] }}</p>
                        <p class="card-text"><strong>Homepage:</strong> <a href="{{ $cryptocurrency['homepage'] }}" target="_blank">{{ $cryptocurrency['homepage'] }}</a></p>
                        <p class="card-text"><strong>Community Link:</strong> <a href="{{ $cryptocurrency['community_link'] }}" target="_blank">{{ $cryptocurrency['community_link'] }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
