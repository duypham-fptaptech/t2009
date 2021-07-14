<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('events')->truncate();

        \Illuminate\Support\Facades\DB::table('events')->insert([
            [
                'eventName' => 'Quần thời trang nam',
                'bandNames' => 'Quần thời trang nam',
                'startDate' => \Illuminate\Support\Carbon::now()->addDays(-1),
                'endDate' => \Illuminate\Support\Carbon::now()->addDays(-2),
                'ticketPrice'=> 1000,
                'status'=> 1,
            ],
            [
                'eventName' => 'Quần thời trang nam',
                'bandNames' => 'Quần thời trang nam',
                'startDate' => \Illuminate\Support\Carbon::now()->addDays(-1),
                'endDate' => \Illuminate\Support\Carbon::now()->addDays(-2),
                'ticketPrice'=> 1000,
                'status'=> 1,
            ],
            [
                'eventName' => 'Quần thời trang nam',
                'bandNames' => 'Quần thời trang nam',
                'startDate' => \Illuminate\Support\Carbon::now()->addDays(-1),
                'endDate' => \Illuminate\Support\Carbon::now()->addDays(-2),
                'ticketPrice'=> 1000,
                'status'=> 1,
            ],

        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
