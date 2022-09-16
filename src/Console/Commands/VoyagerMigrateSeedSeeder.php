<?php

namespace Vortechron\VoyagerExtended\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Vortechron\VoyagerExtended\Database\Seeders\ResetVoyagerDatabaseSeeder;

class VoyagerMigrateSeedSeeder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vext:reseed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reseed';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Artisan::call('db:seed', [
            '--class' => ResetVoyagerDatabaseSeeder::class
        ]);

        $this->info('Voyager reseeded successfully.');

        return 0;
    }
}
