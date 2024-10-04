<?php

namespace Database\Seeders;

use App\Enums\Permissions;
use App\Enums\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create all permissions
        foreach (Permissions::cases() as $permission) {
            Permission::firstOrCreate(['name' => $permission->value]);
        }

        // Create all roles
        foreach (Roles::cases() as $role) {
            Role::firstOrCreate(['name' => $role->value]);
        }


        $adminRole = Role::findByName(Roles::ADMIN->value);
        $freelancerRole = Role::findByName(Roles::FREELANCER->value);
        $recruiter = Role::findByName(Roles::EMPLOYER->value);

        // Assign all permissions to the admin role
        $adminRole->syncPermissions(Permissions::cases());

        // Assign permissions to the freelancer role
        $freelancerRole->givePermissionTo([]);
        // Assign permissions to the recruiter role 
        $recruiter->givePermissionTo([]);
    }
}
