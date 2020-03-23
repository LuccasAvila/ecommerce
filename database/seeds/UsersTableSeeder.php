<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'admin' => 1
        ]);


        \DB::table('users')->insert([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => Hash::make('password'),
        ]);
    }
}
