<?php

use Illuminate\Database\Seeder;

class RootSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $root = \Laravolt\Acl\Models\Role::create(['name' => 'Root']);
        $root->syncPermission(app('laravolt.acl')->permissions());

        $rootUser = factory(config('auth.providers.users.model'))->create(['email' => 'root@laravolt.app']);
        $rootUser->assignRole($root);

    }
}
