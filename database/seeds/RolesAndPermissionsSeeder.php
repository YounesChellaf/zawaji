<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $admin =Role::create(['name' => 'admin','guard_name'=>'web']);
        $owner =Role::create(['name' => 'owner','guard_name'=>'web']);
        $clien =Role::create(['name' => 'client','guard_name'=>'web']);

        $user = User::create([
            'last_name' => 'آل شارف',
            'first_name' => 'عبد الله',
            'phone_number' => '0000000000',
            'address' => 'ينبـــع',
            'email' => 'abdelah@gmail.com',
            'password' => Hash::make('zawaji@admin@2019'),
        ]);

         $user->assignRole($admin);

    }
}
