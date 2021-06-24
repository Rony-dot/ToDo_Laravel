<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        $user = User::create(
            [
                'name'=> 'Rakib',
                'email'=> 'rakib@gmail.com',
                'address'=> 'Banani BTCL Colony',
                'status'=> 'A'
            ]);

        $user->phone()->create(
            [
                'country_code'=> '880',
                'phone'=>'0164',
            ]);

        $user->credintial()->create(
            [
                    'user_name'=>'rakib',
                    'password'=>Hash::make('123456'),
            ]);

//        $role = Role::create(
//            [
//                    'name' => 'ROLE_EDITOR',
//                    'status'=> 'A',
//            ]
//        );

//        $user = User::find(2);
        $role = Role::find(2);

        $user->roles()->attach([$role->id]);

    }
}
