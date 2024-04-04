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
            'start_day' => '2024-03-026',
            'end_day' => '2024-04-01',
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
            'guide_id' => 3,]
        ]);
        
    }
}
