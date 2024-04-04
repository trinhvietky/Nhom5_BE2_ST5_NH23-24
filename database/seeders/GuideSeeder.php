<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guides')->insert([
            'Guide_name' => 'A',
            'Guide_Pno' => '01',
        ]);
        DB::table('guides')->insert([
            'Guide_name' => 'B',
            'Guide_Pno' => '02',
        ]);
        DB::table('guides')->insert([
            'Guide_name' => 'C',
            'Guide_Pno' => '03',
        ]);
        DB::table('guides')->insert([
            'Guide_name' => 'D',
            'Guide_Pno' => '04',
        ]);
        DB::table('guides')->insert([
            'Guide_name' => 'E',
            'Guide_Pno' => '05',
        ]);
    }
}
