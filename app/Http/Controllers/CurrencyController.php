<?php

namespace App\Http\Controllers;

use App\Services\Currencies\Show\ShowCurrencyService;
use App\Services\Currencies\Import\ImportCurrenciesService;
use Illuminate\Http\Request;


class CurrencyController extends Controller
{
    private ImportCurrenciesService $importCurrenciesService;
    private ShowCurrencyService $showCurrencyService;

    public function __construct(ImportCurrenciesService $importCurrenciesService)
    {
        $this->importCurrenciesService = $importCurrenciesService;
        $this->showCurrencyService = new ShowCurrencyService();
    }

    public function import(): void
    {
        $this->importCurrenciesService->execute();
    }

    public function show()
    {
        $currencies = $this->showCurrencyService->show();

        return view('index', [
            'currencies' => $currencies
        ]);
    }

    public function calculate(Request $request)
    {

        $request->validate([
            'symbol' => 'required',
            'amount' => 'required|numeric|gt:0'
        ]);

        $this->import();
        $convert = $this->showCurrencyService->showConverted($request->symbol, $request->amount);

        session()->flash('results', [$request->symbol, $convert]);

        return redirect('/');
    }
}
