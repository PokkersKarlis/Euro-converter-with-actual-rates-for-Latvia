<?php

use App\Http\Controllers\CurrencyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CurrencyController::class, 'show']);
Route::post('/calculate', [CurrencyController::class, 'calculate'])
    ->name('calculate');


