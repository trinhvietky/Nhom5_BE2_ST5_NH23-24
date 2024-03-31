<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // DB::table('product')->insert([
        //     'tenSP'=> "san pham 1",
        //     'soLuong'=> 50,
        //     'moTa'=> "san pham khong phai la thuoc de thay the thuoc chua benh",
        //     'anhSP'=> "khong co",
        //     'maDM'=> "2",
        //     'giamGia'=> "20%",
        //     'luotXem'=> "10000000",
        //     'donGia'=> "23k"
        // ]);
        $this->call(Ticket::class);
    }
}
