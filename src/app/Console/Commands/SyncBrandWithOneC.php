<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\Integration\OneCApiService;
use App\Services\BrandService;

class SyncBrandWithOneC extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:brand-1c';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Synchronizes brands with 1C';

    public function __construct(
        protected OneCApiService $oneCApiService,
        protected BrandService $brandService
    ) {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->brandService->syncBrandsWithOneC(
            $this->oneCApiService->brands()
        );
    }
}
