<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CryptocurrencyController extends Controller
{
    public function index()
    {
        $client = new Client(); 
        $response = $client->request('GET', 'https://api.coingecko.com/api/v3/coins/markets', [
            'query' => [
                'vs_currency' => 'usd',
                'order' => 'market_cap_desc',
                'per_page' => 100,
                'page' => 1,
                'sparkline' => false,
            ]
        ]);

        $cryptocurrencies = json_decode($response->getBody()->getContents());

        return view('cryptocurrencies.index', ['cryptocurrencies' => $cryptocurrencies]);
    }
}
