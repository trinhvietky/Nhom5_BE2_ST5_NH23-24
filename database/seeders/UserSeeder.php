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
        DB::table('user')->insert([
            'Username' => 'trinhvietky',
            'Password' => '123456',
            'Admin' => '1',
        ]);

        DB::table('user')->insert([
            'Username' => 'maitrananhtuan',
            'Password' => '123456',
            'Admin' => '1',
        ]);

        DB::table('user')->insert([
            'Username' => 'nguyenthanhtai',
            'Password' => '123456',
            'Admin' => '1',
        ]);

        DB::table('user')->insert([
            'Username' => 'hosiminhtri',
            'Password' => '123456',
            'Admin' => '1',
        ]);

        DB::table('user')->insert([
            'Username' => 'vulehuytruong',
            'Password' => '123456',
            'Admin' => '1',
        ]);

        DB::table('user')->insert([
            'Username' => 'user1',
            'Password' => '123456',
            'Admin' => '0',
        ]);
        DB::table('user')->insert([
            'Username' => 'user2',
            'Password' => '123456',
            'Admin' => '0',
        ]);
        DB::table('user')->insert([
            'Username' => 'user3',
            'Password' => '123456',
            'Admin' => '0',
        ]);

    }
}
