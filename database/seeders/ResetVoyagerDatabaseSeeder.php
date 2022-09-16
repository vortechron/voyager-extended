<?php

namespace Vortechron\VoyagerExtended\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;
use Database\Seeders\ResetDataTypesTableSeeder;
use Database\Seeders\ResetDataRowsTableSeeder;
use Database\Seeders\ResetMenusTableSeeder;
use Database\Seeders\ResetMenuItemsTableSeeder;
use Database\Seeders\ResetRolesTableSeeder;
use Database\Seeders\ResetPermissionsTableSeeder;
use Database\Seeders\ResetPermissionRoleTableSeeder;
use Database\Seeders\ResetSettingsTableSeeder;

class ResetVoyagerDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        $this->call([
            ResetDataTypesTableSeeder::class,
            ResetDataRowsTableSeeder::class,
            ResetMenusTableSeeder::class,
            ResetMenuItemsTableSeeder::class,
            ResetRolesTableSeeder::class,
            ResetPermissionsTableSeeder::class,
            ResetPermissionRoleTableSeeder::class,
            ResetSettingsTableSeeder::class,
        ]);

        Artisan::call('cache:clear');
    }
}
