<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('location')->insert([
            'Location_name' => 'Ha Giang',
            'Location_add' => 'Viet Nam',
            'Location_image' => 'hagiang.jpg',
        ]);
        DB::table('location')->insert([
            'Location_name' => 'Ninh Binh',
            'Location_add' => 'Viet Nam',
            'Location_image' => 'ninhbinh.jpg',
        ]);
        DB::table('location')->insert([
            'Location_name' => 'Da Lat',
            'Location_add' => 'Viet Nam',
            'Location_image' => 'dalat.jpg',
        ]);
        DB::table('location')->insert([
            'Location_name' => 'Da Nang ',
            'Location_add' => 'Viet Nam',
            'Location_image' => 'danang.jpg',
        ]);

    }
}
