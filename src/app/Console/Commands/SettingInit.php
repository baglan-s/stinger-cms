<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\SettingService;

class SettingInit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'setting:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Setting configuration initialization';

    public function __construct(
        protected SettingService $settingService
    )
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if ($this->settingService->initialize()) {
            $this->info('Setting configuration initialized!');

            return 1;
        }

        $this->error('Setting initialization error!');

        return 1;
    }
}
