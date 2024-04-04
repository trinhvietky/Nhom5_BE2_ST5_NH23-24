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
<<<<<<< HEAD
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


=======
        DB::table('my_users')->insert([
            'Username' => 'trinhvietky',
            'Password' => '123456',
            'Admin' => '1',
        ]);

        DB::table('my_users')->insert([
            'Username' => 'maitrananhtuan',
            'Password' => '123456',
            'Admin' => '1',
        ]);

        DB::table('my_users')->insert([
            'Username' => 'nguyenthanhtai',
            'Password' => '123456',
            'Admin' => '1',
        ]);

        DB::table('my_users')->insert([
            'Username' => 'hosiminhtri',
            'Password' => '123456',
            'Admin' => '1',
        ]);

        DB::table('my_users')->insert([
            'Username' => 'vulehuytruong',
            'Password' => '123456',
            'Admin' => '1',
        ]);

        DB::table('my_users')->insert([
            'Username' => 'user1',
            'Password' => '123456',
            'Admin' => '0',
        ]);
        DB::table('my_users')->insert([
            'Username' => 'user2',
            'Password' => '123456',
            'Admin' => '0',
        ]);
        DB::table('my_users')->insert([
            'Username' => 'user3',
            'Password' => '123456',
            'Admin' => '0',
>>>>>>> 2dddd8ee624bf5e603facd8c3862cf602a2496e0
        ]);

    }
}
