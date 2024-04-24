<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('myUsers')->insert([
            [
                'username' => 'trinhvietky',
                'password' => '123456',
                'admin' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'username' => 'maitrananhtuan',
                'password' => '123456',
                'admin' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'username' => 'nguyenthanhtai',
                'password' => '123456',
                'admin' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'username' => 'hosiminhtri',
                'password' => '123456',
                'admin' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'username' => 'vulehuytruong',
                'password' => '123456',
                'admin' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'username' => 'user1',
                'password' => '123456',
                'admin' => '0',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'username' => 'user2',
                'password' => '123456',
                'admin' => '0',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'username' => 'user3',
                'password' => '123456',
                'admin' => '0',
                'created_at' => now(),
                'updated_at' => now(),
            ],


        ]);

    }
}
