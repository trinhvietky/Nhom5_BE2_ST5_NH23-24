<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tickets')->insert([
            'tour_id' => '1',
            'customer_id' => '1',
            
        ]);
        DB::table('tickets')->insert([
            'tour_id' => '1',
            'customer_id' => '1',
            
        ]);
        DB::table('tickets')->insert([
            'tour_id' => '2',
            'customer_id' => '3',
            
        ]);
    }
}
