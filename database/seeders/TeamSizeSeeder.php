<?php

namespace Database\Seeders;

use App\Models\TeamSize;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class TeamSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teamSizes = [
            ['size' => "It's just me"],
            ['size' => "2-9 employees"],
            ['size' => "10-99 employees"],
            ['size' => "100-1000 employees"],
            ['size' => "More than 1000 employees"],
        ];


        $now = Carbon::now();
        foreach ($teamSizes as $i => $iValue) {
            $teamSizes[$i]['created_at'] = $now;
            $teamSizes[$i]['updated_at'] = $now;
        }

        TeamSize::insert($teamSizes);

    }
}
