<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\Integration\OneCApiService;
use App\Services\OrderService;

class SyncOrderStatusWithOneC extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:order-status-1c';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Synchronizes order statuses with 1C';

    public function __construct(
        protected OneCApiService $oneCApiService,
        protected OrderService $orderService
    ) {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->orderService->syncStatusesWithOneC(
            $this->oneCApiService->orderStatuses()
        );
    }
}
