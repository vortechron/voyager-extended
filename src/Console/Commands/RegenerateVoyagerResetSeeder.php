<?php

namespace Vortechron\VoyagerExtended\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class RegenerateVoyagerResetSeeder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vext:regen';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Regen changed bread';

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
        Artisan::call('iseed', [
            'tables' => 'data_types,data_rows,menus,menu_items,roles,permissions,permission_role,settings',
            '--classnameprefix' => 'Reset',
            '--force' => true
        ]);

        return 0;
    }
}
