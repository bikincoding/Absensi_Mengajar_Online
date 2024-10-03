<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class ClassProgressReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('class_progress_reports')->insert([
            ['guardian_id' => 1, 'class_student_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['guardian_id' => 2, 'class_student_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['guardian_id' => 3, 'class_student_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['guardian_id' => 4, 'class_student_id' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['guardian_id' => 5, 'class_student_id' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}