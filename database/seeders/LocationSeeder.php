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
                'location_sale' => '30%',
                'location_image' => 'hagiang.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'location_name' => 'Ninh Binh',
                'location_add' => 'Viet Nam',
                'location_sale' => '20%',
                'location_image' => 'ninhbinh.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'location_name' => 'Da Lat',
                'location_add' => 'Viet Nam',
                'location_sale' => '25%',
                'location_image' => 'dalat.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            [
                'location_name' => 'Da Nang',
                'location_add' => 'Viet Nam',
                'location_sale' => '15%',
                'location_image' => 'danang.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_name' => 'Binh Thuan',
                'location_add' => 'Viet Nam',
                'location_sale' => '20%',
                'location_image' => 'binhThuan.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_name' => 'Thu do London',
                'location_add' => 'Anh',
                'location_sale' => '10%',
                'location_image' => 'london.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_name' => 'Zurich',
                'location_add' => 'Thụy Sĩ',
                'location_sale' => '10%',
                'location_image' => 'Zurich.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
