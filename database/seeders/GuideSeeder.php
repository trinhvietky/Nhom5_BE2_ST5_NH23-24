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
            'guide_Name' => 'A',
            'guide_Pno' => '0101010101',
            'guide_Img' => 'team-1.jpg',

        ]);
        DB::table('guides')->insert([
            'guide_Name' => 'B',
            'guide_Pno' => '0202020202',
            'guide_Img' => 'team-2.jpg',
        ]);
        DB::table('guides')->insert([
            'guide_Name' => 'C',
            'guide_Pno' => '0303030303',
            'guide_Img' => 'team-3.jpg',
        ]);
        DB::table('guides')->insert([
            'guide_Name' => 'D',
            'guide_Pno' => '0404040404',
            'guide_Img' => 'team-4.jpg',
        ]);
        DB::table('guides')->insert([
            'guide_Name' => 'E',
            'guide_Pno' => '0505050505',
            'guide_Img' => 'rizz.jpg',
        ]);
        DB::table('guides')->insert([
            'guide_Name' => 'F',
            'guide_Pno' => '0606060606',
            'guide_Img' => 'monkey.jpg',
        ]);
        DB::table('guides')->insert([
            'guide_Name' => 'G',
            'guide_Pno' => '0707070707',
            'guide_Img' => 'cat.jpg',
        ]);
        DB::table('guides')->insert([
            'guide_Name' => 'H',
            'guide_Pno' => '0808080808',
            'guide_Img' => 'hamster.jpg',
        ]);
    }
}
