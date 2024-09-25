<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\Integration\OneCApiService;
use App\Services\ProductCategoryService;

class SyncProductCategoryWithOneC extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:product-category-1c';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Synchronizes a product category with 1C';

    public function __construct(
        protected OneCApiService $oneCApiService,
        protected ProductCategoryService $productCategoryService
    ) {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->productCategoryService->syncCategoriesWithOneC(
            $this->oneCApiService->categories()
        );
    }
}
