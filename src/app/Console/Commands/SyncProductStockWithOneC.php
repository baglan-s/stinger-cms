<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\Integration\OneCApiService;
use App\Services\ProductService;

class SyncProductStockWithOneC extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:product-stock-1c';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync product stock with 1C';

    public function __construct(
        protected OneCApiService $oneCApiService,
        protected ProductService $productService
    ) {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->productService->syncProductStocksWithOneC(
            $this->oneCApiService->stocks()
        );
    }
}
