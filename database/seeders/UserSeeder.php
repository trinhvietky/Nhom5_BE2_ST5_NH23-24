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
                'Username' => 'trinhvietky',
                'Password' => '123456',
                'Admin' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'Username' => 'maitrananhtuan',
                'Password' => '123456',
                'Admin' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'Username' => 'nguyenthanhtai',
                'Password' => '123456',
                'Admin' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'Username' => 'hosiminhtri',
                'Password' => '123456',
                'Admin' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'Username' => 'vulehuytruong',
                'Password' => '123456',
                'Admin' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'Username' => 'user1',
                'Password' => '123456',
                'Admin' => '0',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'Username' => 'user2',
                'Password' => '123456',
                'Admin' => '0',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'Username' => 'user3',
                'Password' => '123456',
                'Admin' => '0',
                'created_at' => now(),
                'updated_at' => now(),
            ],


        ]);

    }
}
