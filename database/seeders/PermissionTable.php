<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'admin-list',
            'admin-create',
            'admin-edit',
            'admin-delete',
            'employee-list',
            'employee-create',
            'employee-edit',
            'employee-delete',
            'role-list', 'role-create', 'role-edit', 'role-delete',
        ];
        foreach ($permissions as $permission) {
            if (!Permission::where('name', $permission)->exists()) {
                Permission::create(['name' => $permission]);
            }
        }
    }
}
