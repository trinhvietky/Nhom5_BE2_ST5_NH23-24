<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer')->insert([
            [
                'customer_name' => "Nguyen Van A",
                'customer_address' => "Nha Trang",
                'customer_phone' => "0123456789",
                'customer_email' => "nguyenvanA@gmail.com"
            ],
            [
                'customer_name' => "Nguyen Van B",
                'customer_address' => "Da Lat",
                'customer_phone' => "0123459876",
                'customer_email' => "nguyenvanB@gmail.com"
            ],
            [
                'customer_name' => "Nguyen Van C",
                'customer_address' => "Ha Noi",
                'customer_phone' => "0123756489",
                'customer_email' => "nguyenvanC@gmail.com"
            ],
            [
                'customer_name' => "Nguyen Van D",
                'customer_address' => "Ho Chi Minh",
                'customer_phone' => "0124356789",
                'customer_email' => "nguyenvanD@gmail.com"
            ],
            [
                'customer_name' => "Nguyen Van E",
                'customer_address' => "Quang Nam",
                'customer_phone' => "0123486579",
                'customer_email' => "nguyenvanE@gmail.com"
            ],
        ]);
    }
}
