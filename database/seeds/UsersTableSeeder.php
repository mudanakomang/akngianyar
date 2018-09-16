<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       $adminRole=new \App\Role();
       $adminRole->name='admin';
       $adminRole->display_name='Web Admin Group';
       $adminRole->save();

       $admin=new \App\User();
       $admin->name='Admin Web AKN Gianyar';
       $admin->username='admin';
       $admin->email='admin@akg.ac.id';
       $admin->password=bcrypt('qwerty6');
       $admin->save();
       $admin->attachRole($adminRole);

    }
}
