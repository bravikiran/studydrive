<?php

use Illuminate\Database\Seeder;

use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Create([
            'name'              => 'john',
            'email'             => 'john@gmail.com',
            'password'          => Hash::make('password'),
            'remember_token'    => str_random(10)
        ]);
    }
}
