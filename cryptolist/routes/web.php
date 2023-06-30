<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CryptocurrencyController;

Route::view('/', 'welcome')->name('home');
Route::get('/cryptocurrencies', [CryptocurrencyController::class, 'index'])->name('cryptocurrencies.index');
