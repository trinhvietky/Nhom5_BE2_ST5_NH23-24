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
            'guide_Name' => 'Ho Si Minh Tri',
            'guide_Pno' => '035863586',
            'guide_Img' => 'team-1.jpg',

        ]);
        DB::table('guides')->insert([
            'guide_Name' => 'Mai Tran Anh Tuan',
            'guide_Pno' => '8356238965',
            'guide_Img' => 'team-2.jpg',
        ]);
        DB::table('guides')->insert([
            'guide_Name' => 'Trinh Viet Ki',
            'guide_Pno' => '4257895',
            'guide_Img' => 'team-3.jpg',
        ]);
        DB::table('guides')->insert([
            'guide_Name' => 'Nguyen Thanh Tai',
            'guide_Pno' => '329528956',
            'guide_Img' => 'team-4.jpg',
        ]);
        DB::table('guides')->insert([
            'guide_Name' => 'Vu Le Huy Truong',
            'guide_Pno' => '4348688',
            'guide_Img' => 'hamster.jpg',
        ]);
        
    }
}
