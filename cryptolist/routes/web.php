<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CryptocurrencyController;

Route::view('/', 'welcome')->name('home');
Route::get('/cryptocurrencies', 'CryptocurrencyController@index');
Route::get('/cryptocurrencies', 'CryptocurrencyController@index')->name('cryptocurrencies.index');