<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\Integration\OneCApiService;
use App\Services\CityService;

class SyncCityWithOneC extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:city-1c';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Synchronizes cities and its stores with 1C';

    public function __construct(
        protected OneCApiService $oneCApiService,
        protected CityService $cityService
    ) {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->cityService->syncCitiesWithOneC(
            $this->oneCApiService->cities()
        );
    }
}
