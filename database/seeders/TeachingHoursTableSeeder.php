<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class TeachingHoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teaching_hours')->insert([
            ['teaching_hour_name' => '08:00 - 09:00', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teaching_hour_name' => '09:00 - 10:00', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teaching_hour_name' => '10:00 - 11:00', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teaching_hour_name' => '11:00 - 12:00', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teaching_hour_name' => '13:00 - 14:00', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}