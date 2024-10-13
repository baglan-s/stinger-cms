<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\Integration\OneCApiService;
use App\Services\PaymentService;

class SyncPaymentTypeWithOneC extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:payment-type-1c';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Synchronizes payment types with 1C';

    public function __construct(
        protected OneCApiService $oneCApiService,
        protected PaymentService $paymentService
    ) {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->paymentService->syncPaymentTypesWithOneC(
            $this->oneCApiService->paymentTypes()
        );
    }
}
