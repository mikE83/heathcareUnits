<?php

use App\User;

use Illuminate\Database\Seeder;

class LoadUsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
           $admin = new User;
        $admin->name = 'Miguel angel';
        $admin->lastname1="vazquez";
        $admin->lastname2 = "villarreal";
        $admin->username = "mike";
        $admin->password = bcrypt("123456" );
        $admin->save();
       
    }
}
