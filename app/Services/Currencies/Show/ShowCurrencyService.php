<?php

namespace App\Services\Currencies\Show;

use App\Models\Currency;
use Illuminate\Database\Eloquent\Collection;

class ShowCurrencyService

{
    public function show(): Collection
    {
        return Currency::all();
    }

    public function showConverted(string $selectedCurrency, int $amount): int
    {
        $currency = Currency::where('symbol', '=', $selectedCurrency)->firstOrFail();
        return $currency->rate * $amount;
    }
}
