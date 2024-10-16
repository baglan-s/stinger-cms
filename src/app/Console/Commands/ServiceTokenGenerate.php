<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\ServiceToken;

class ServiceTokenGenerate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'service-token:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates service token for external services';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->ask('Enter service name');

        if (!$name) {
            $this->error('Service name is required!');
            return;
        }

        $token = ServiceToken::create([
            'name' => $name,
            'token' => ServiceToken::generate(),
        ]);

        $this->info('Service token created successfully!');

        $this->table(
            ['ID', 'Name', 'Token', 'CreatedAt', 'UpdatedAt'],
            [
                [
                    'id' => $token->id,
                    'name' => $token->name,
                    'token' => $token->token,
                    'created_at' => $token->created_at->format('Y-m-d H:i:s'),
                    'updated_at' => $token->updated_at->format('Y-m-d H:i:s'),
                ]
            ]
        );
    }
}
