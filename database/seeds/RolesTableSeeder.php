<?php

use Illuminate\Database\Seeder;
use App\Role;


class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $role_admin = new Role;
        $role_admin->name = 'Admin';
        $role_admin->description = 'Admin';
        $role_admin->save();



        $role_user = new Role;
        $role_user->name = 'User';
        $role_user->description = 'User';
        $role_user->save();


}
}
