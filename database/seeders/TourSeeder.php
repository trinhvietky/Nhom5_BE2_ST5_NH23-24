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
        DB::table('_tour')->insert([
            'Tour_name' => 'Hà Nội',
            'Start_day' => '2024-04-01',
            'End_day' => '2024-04-07',
            'Price' => 1000000,
            'Vehicle' => 'Bus',
            'Place_id' => 1,
            'Guide_id' => 1,
        ]);
        DB::table('_tour')->insert([
            'Tour_name' => 'Nha Trang',
            'Start_day' => '2024-03-26',
            'End_day' => '2024-04-01',
            'Price' => 200000,
            'Vehicle' => 'car',
            'Place_id' => 5,
            'Guide_id' => 2,
        ]);
        DB::table('_tour')->insert([
            'Tour_name' => 'Vũng Tàu',
            'Start_day' => '2024-03-026',
            'End_day' => '2024-04-01',
            'Price' => 200000,
            'Vehicle' => 'car',
            'Place_id' => 3,
            'Guide_id' => 2,
        ]);
        DB::table('_tour')->insert([
            'Tour_name' => 'Đảo Phú Quốc',
            'Start_day' => '2024-04-10',
            'End_day' => '2024-04-17',
            'Price' => 800000,
            'Vehicle' => 'car',
            'Place_id' => 2,
            'Guide_id' => 3,
        ]);
        DB::table('_tour')->insert([
            'Tour_name' => 'TP Hồ Chí Minh',
            'Start_day' => '2024-02-23',
            'End_day' => '2024-02-29',
            'Price' => 1000000,
            'Vehicle' => 'bus',
            'Place_id' => 4,
            'Guide_id' => 2,
        ]);
    }
}
