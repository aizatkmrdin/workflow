<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Super admin',
            'email' => 'superadmin@workflow.com',
            'password' => bcrypt('St4rf!r3@@')
        ]);
        $roleSuper = Role::create(['name' => 'super-admin']);
        $permissions = Permission::pluck('id', 'id')->all();
        $roleSuper->syncPermissions($permissions);//$permissions id
        $user->assignRole([$roleSuper->id]);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'staff']);

        $user = User::findOrFail(1);
        $user->assignRole('');
        // $permissions = Permission::pluck('id', 'id')->all();
        // $role->syncPermissions($permissions);
        // $user->assignRole([$role->id]);
    }
}
