<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create roles
        Role::create(['name' => 'Administrator']);
        Role::create(['name' => 'Supervisor']);
        Role::create(['name' => 'Publisher']);
        Role::create(['name' => 'Technical']);
        Role::create(['name' => 'Client']);

        //Create permissions
        Permission::create(['name' => 'add products']);
        Permission::create(['name' => 'edit products']);
        Permission::create(['name' => 'delete products']);
        Permission::create(['name' => 'manage accounts']);
        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'edit User']);
        Permission::create(['name' => 'edit orders']);
        Permission::create(['name' => 'create orders']);
        Permission::create(['name' => 'payment settings']);
        Permission::create(['name' => 'app settings']);
        Permission::create(['name' => 'make payments']);
        Permission::create(['name' => 'admin dashboard']);
        
        //Assign role to permissions
        Permission::where('name', 'add products')->first()->assignRole(Role::where('name', 'Administrator')->first());
        Permission::where('name', 'edit products')->first()->assignRole(Role::where('name', 'Administrator')->first());
        Permission::where('name', 'delete products')->first()->assignRole(Role::where('name', 'Administrator')->first());
        Permission::where('name', 'manage accounts')->first()->assignRole(Role::where('name', 'Administrator')->first());
        Permission::where('name', 'create user')->first()->assignRole(Role::where('name', 'Administrator')->first());
        Permission::where('name', 'edit User')->first()->assignRole(Role::where('name', 'Administrator')->first());
        Permission::where('name', 'edit orders')->first()->assignRole(Role::where('name', 'Administrator')->first());
        Permission::where('name', 'create orders')->first()->assignRole(Role::where('name', 'Administrator')->first());
        Permission::where('name', 'payment settings')->first()->assignRole(Role::where('name', 'Administrator')->first());
        Permission::where('name', 'app settings')->first()->assignRole(Role::where('name', 'Administrator')->first());
        Permission::where('name', 'make payments')->first()->assignRole(Role::where('name', 'Administrator')->first());
        Permission::where('name', 'admin dashboard')->first()->assignRole(Role::where('name', 'Administrator')->first());

        Permission::where('name', 'add products')->first()->assignRole(Role::where('name', 'Supervisor')->first());
        Permission::where('name', 'edit products')->first()->assignRole(Role::where('name', 'Supervisor')->first());
        Permission::where('name', 'delete products')->first()->assignRole(Role::where('name', 'Supervisor')->first());
        Permission::where('name', 'manage accounts')->first()->assignRole(Role::where('name', 'Supervisor')->first());
        Permission::where('name', 'create user')->first()->assignRole(Role::where('name', 'Supervisor')->first());
        Permission::where('name', 'make payments')->first()->assignRole(Role::where('name', 'Supervisor')->first());
        Permission::where('name', 'admin dashboard')->first()->assignRole(Role::where('name', 'Supervisor')->first());

        Permission::where('name', 'app settings')->first()->assignRole(Role::where('name', 'Technical')->first());
        Permission::where('name', 'admin dashboard')->first()->assignRole(Role::where('name', 'Technical')->first());

        Permission::where('name', 'add products')->first()->assignRole(Role::where('name', 'Publisher')->first());
        Permission::where('name', 'edit products')->first()->assignRole(Role::where('name', 'Publisher')->first());

        Permission::where('name', 'make payments')->first()->assignRole(Role::where('name', 'Client')->first());

    }
}
