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
            [
                'guide_Name' => 'Hồ Sĩ Minh Trí',
                'guide_Pno' => '035863586',
                'guide_Img' => 'team-1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'guide_Name' => 'Mai Trần Anh Tuấn',
                'guide_Pno' => '8356238965',
                'guide_Img' => 'team-2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'guide_Name' => 'Trịnh Viết Ký',
                'guide_Pno' => '4257895',
                'guide_Img' => 'team-3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'guide_Name' => 'Nguyễn Thành Tài',
                'guide_Pno' => '329528956',
                'guide_Img' => 'team-4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'guide_Name' => 'Vũ Lê Huy Trường',
                'guide_Pno' => '4348688',
                'guide_Img' => 'team-3.jpg',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'guide_Name' => 'Nguyễn Văn A',
                'guide_Pno' => '2995610587',
                'guide_Img' => 'team-1.jpg',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'guide_Name' => 'Trần Thị B',
                'guide_Pno' => '3862986',
                'guide_Img' => 'team-2.jpg',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'guide_Name' => 'Lê Văn C',
                'guide_Pno' => '48567986',
                'guide_Img' => 'team-4.jpg',
                'created_at' => now(),
                'updated_at' => now(),

            ],

        ]);
    }
}
