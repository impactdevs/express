<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolesAndPermissionsSeeder::class,
            CountrySeeder::class,
            TeamSizeSeeder::class,
            IndustrySeeder::class,
            AdminSeeder::class,
            SubIndustrySeeder::class,
            LanguageSeeder::class,
            CurrencySeeder::class,
        ]);
    }
}
