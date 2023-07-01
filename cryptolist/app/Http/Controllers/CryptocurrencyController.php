<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;

class CryptocurrencyController extends Controller
{
    public function index()
    {
        $cryptocurrencies = Cache::remember('cryptocurrencies', 60, function () {
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

            return json_decode($response->getBody()->getContents());
        });

        return view('cryptocurrencies.index', ['cryptocurrencies' => $cryptocurrencies]);
    }

    public function show($id)
    {
        $cryptocurrency = Cache::remember('cryptocurrency_'.$id, 60, function () use ($id) {
            $client = new Client(); 
            $response = $client->request('GET', 'https://api.coingecko.com/api/v3/coins/'.$id);

            return json_decode($response->getBody()->getContents());
        });

        $cryptoDetails = [
            'name' => $cryptocurrency->name,
            'image' => $cryptocurrency->image->large,
            'symbol' => $cryptocurrency->symbol,
            'current_price' => $cryptocurrency->market_data->current_price->usd,
            'market_cap' => $cryptocurrency->market_data->market_cap->usd,
            'total_volume' => $cryptocurrency->market_data->total_volume->usd,
            'price_change_percentage_24h' => $cryptocurrency->market_data->price_change_percentage_24h,
            'price_change_percentage_7d' => $cryptocurrency->market_data->price_change_percentage_7d,
            'market_cap_rank' => $cryptocurrency->market_cap_rank,
            'homepage' => $cryptocurrency->links->homepage[0],
            'community_link' => isset($cryptocurrency->links->subreddit_url) ? $cryptocurrency->links->subreddit_url : 'N/A',
        ];

        return view('cryptocurrencies.show', ['cryptocurrency' => $cryptoDetails]);
    }
}
