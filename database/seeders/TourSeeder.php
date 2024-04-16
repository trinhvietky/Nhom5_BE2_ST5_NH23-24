<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tours')->insert([
            ['tour_name' => 'Cột Cờ Lũng Cú',
            'tour_image'=>'cotCoLungCu.jpg',
            'start_day' => '2024-04-01',
            'end_day' => '2024-04-07',
            'price' => 200,
            'vehicle' => 'Car',
            'location_id' => 1,
            'guide_id' => 1,],
            ['tour_name' => 'Bà Nà Hills',
            'tour_image'=>'baNaHill.jpg',
            'start_day' => '2024-03-26',
            'end_day' => '2024-04-01',
            'price' => 500,
            'vehicle' => 'car',
            'location_id' => 4,
            'guide_id' => 2,],
            ['tour_name' => 'Thác Voi',
            'tour_image'=>'thacVoi.jpg',
            'start_day' => '2024-06-26',
            'end_day' => '2024-07-01',
            'price' => 500,
            'vehicle' => 'car',
            'location_id' => 3,
            'guide_id' => 2,],
            ['tour_name' => 'Hang Múa',
            'tour_image'=>'hangMua.jpg',
            'start_day' => '2024-04-10',
            'end_day' => '2024-04-17',
            'price' => 800,
            'vehicle' => 'car',
            'location_id' => 2,
            'guide_id' => 3,],
            ['tour_name' => 'Tháp Luân Đôn',
            'tour_image'=>'thapLonDon.jpg',
            'start_day' => '2025-06-10',
            'end_day' => '2025-07-17',
            'price' => 20000,
            'vehicle' => 'plane',
            'location_id' => 6,
            'guide_id' => 1,],
            ['tour_name' => 'Đảo Phú Quý',
            'tour_image'=>'daoPhuQuy.jpg',
            'start_day' => '2025-01-21',
            'end_day' => '2025-02-09',
            'price' => 200,
            'vehicle' => 'car',
            'location_id' => 5,
            'guide_id' => 5,],
            ['tour_name' => 'Khu Phố Bahnhofstrasse',
            'tour_image'=>'Bahnhofstrasse.jpg',
            'start_day' => '2025-08-21',
            'end_day' => '2025-09-09',
            'price' => 30000,
            'vehicle' => 'car',
            'location_id' => 7,
            'guide_id' => 2,],
            ['tour_name' => 'Thủy cung SEA LIFE London',
            'tour_image'=>'seaLife.jpg',
            'start_day' => '2024-03-14',
            'end_day' => '2024-04-02',
            'price' => 30000,
            'vehicle' => 'car',
            'location_id' => 6,
            'guide_id' => 1,],
            ['tour_name' => 'Samten Hills Đà Lạt',
            'tour_image'=>'Samten_Hills.jpg',
            'start_day' => '2024-10-14',
            'end_day' => '2024-11-02',
            'price' => 300,
            'vehicle' => 'car',
            'location_id' => 3,
            'guide_id' => 3,],
        ]);
        
    }
}
