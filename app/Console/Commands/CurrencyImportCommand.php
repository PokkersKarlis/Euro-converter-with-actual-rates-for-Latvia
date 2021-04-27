<?php

namespace App\Console\Commands;

use App\Services\Currencies\Import\ImportCurrenciesService;
use Illuminate\Console\Command;

class CurrencyImportCommand extends Command
{
    protected $signature = 'currency:import';

    protected $description = 'Import currency in to database';

    private ImportCurrenciesService $importCurrenciesService;


    public function __construct(ImportCurrenciesService $importCurrenciesService)
    {
        parent::__construct();


        $this->importCurrenciesService = $importCurrenciesService;
    }

    public function handle(): void
    {
        $this->importCurrenciesService->execute();
    }
}
