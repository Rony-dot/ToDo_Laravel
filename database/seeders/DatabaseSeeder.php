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
        // \App\Models\User::factory(10)->create();

        $user = User::create([
            'name'=> 'md rakibul hassan rony',
            'email'=> 'rakibulhassan.rony123@gmail.com',
            'address'=> 'Banani BTCL Colony',
            'status'=> 'A'
        ]);

        $user->phone()->create([
            'country_code'=> '880',
            'phone'=>'01558955553'
        ]);

        $user->credintial()->create([
            'user_name'=>'rony',
            'password'=>Hash::make('123456'),
        ]);

        $role = Role::create([
            'name' => 'ROLE_ADMIN',
            'status'=> 'A',
        ]);

        $user->roles()->sync([$role->id]);

    }
}
