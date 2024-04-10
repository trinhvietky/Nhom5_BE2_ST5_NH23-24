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
        DB::table('locations')->insert([
            [
                'location_name' => 'Ha Giang',
                'location_add' => 'Viet Nam',
                'location_image' => 'hagiang.jpg',
            ],

            [
                'location_name' => 'Ninh Binh',
                'location_add' => 'Viet Nam',
                'location_image' => 'ninhbinh.jpg',
            ],

            [
                'location_name' => 'Da Lat',
                'location_add' => 'Viet Nam',
                'location_image' => 'dalat.jpg',
            ],
            
            [
                'location_name' => 'Da Nang',
                'location_add' => 'Viet Nam',
                'location_image' => 'danang.jpg',
            ]

        ]);
    }
}
