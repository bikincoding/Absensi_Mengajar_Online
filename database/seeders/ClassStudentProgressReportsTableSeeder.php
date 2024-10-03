<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class ClassStudentProgressReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('class_student_progress_reports')->insert([
            ['class_progress_report_id' => 1, 'class_student_id' => 1, 'student_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_progress_report_id' => 2, 'class_student_id' => 2, 'student_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_progress_report_id' => 3, 'class_student_id' => 3, 'student_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_progress_report_id' => 4, 'class_student_id' => 4, 'student_id' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_progress_report_id' => 5, 'class_student_id' => 5, 'student_id' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}