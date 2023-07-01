@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <h1 class="text-center mb-4">Top 100 Cryptocurrencies</h1>

        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Market Cap</th>
                        <th>24h %</th>
                        <th>7d %</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cryptocurrencies as $cryptocurrency)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <a href="{{ route('cryptocurrencies.show', $cryptocurrency->id) }}">
                                    {{ $cryptocurrency->name }}
                                </a>
                            </td>
                            <td>${{ number_format($cryptocurrency->current_price, 2) }}</td>
                            <td>${{ number_format($cryptocurrency->market_cap, 0) }}</td>
                            <td>
                                @if(property_exists($cryptocurrency, 'price_change_percentage_24h'))
                                    {{ $cryptocurrency->price_change_percentage_24h }}%
                                @else
                                    N/A
                                @endif
                            </td>
                            <td>
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
