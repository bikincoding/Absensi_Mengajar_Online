<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class AcademicYearsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('academic_years')->insert([
            ['academic_year_name' => '2023/2024', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['academic_year_name' => '2024/2025', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['academic_year_name' => '2025/2026', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['academic_year_name' => '2026/2027', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['academic_year_name' => '2027/2028', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}