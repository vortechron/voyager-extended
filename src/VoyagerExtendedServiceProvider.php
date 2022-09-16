<?php

namespace Vortechron\VoyagerExtended;

use TCG\Voyager\Events\RoutingAdmin;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Vortechron\VoyagerExtended\Listeners\CustomAdminRouting;
use Vortechron\VoyagerExtended\Console\Commands\VoyagerMigrateSeedSeeder;
use Vortechron\VoyagerExtended\Console\Commands\RegenerateVoyagerResetSeeder;

class VoyagerExtendedServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                RegenerateVoyagerResetSeeder::class,
                VoyagerMigrateSeedSeeder::class,
            ]);

            $this->publishes([
                __DIR__ . '/../stub/voyager.php' => base_path('routes/voyager.php'),
            ], 'vext');
        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'vext');

        // check if file exist 
        if (file_exists(base_path('routes/voyager.php'))) {
            Event::listen(
                RoutingAdmin::class,
                [CustomAdminRouting::class, 'handle']
            );
        }
    }
}
