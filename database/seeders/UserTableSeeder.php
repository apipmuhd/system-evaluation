<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

            // Admin --instance value for name--
            [
                'name'=>'Admin',
                'username'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('111'),
                'role'=>'admin',
                'status'=>'active',
            ],

            // Agent
            [
                'name'=>'Agent',
                'username'=>'agent',
                'email'=>'agent@gmail.com',
                'password'=>Hash::make('111'),
                'role'=>'agent',
                'status'=>'active',
            ],

            // user
            [
                'name'=>'User',
                'username'=>'user',
                'email'=>'user@gmail.com',
                'password'=>Hash::make('111'),
                'role'=>'user',
                'status'=>'active',
            ],


        ]);
    }
}
