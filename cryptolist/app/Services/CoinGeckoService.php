<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class CoinGeckoService
{
    protected $baseUrl = 'https://api.coingecko.com/api/v3';

    public function getTop100Cryptocurrencies()
    {
        $response = Http::get("{$this->baseUrl}/coins/markets", [
            'vs_currency' => 'usd',
            'order' => 'market_cap_desc',
            'per_page' => 100,
            'page' => 1,
            'sparkline' => false,
        ]);

        if ($response->successful()) {
            return $response->json();
        }

        return [];
    }
}
