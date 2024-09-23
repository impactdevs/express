<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
       $admin = Admin::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('123456'),
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('123456'),
            'userable_id' => $admin->id,
            'userable_type' => 'App\Models\Admin',
        ]);
    }
}
