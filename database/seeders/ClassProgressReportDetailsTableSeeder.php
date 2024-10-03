<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class ClassProgressReportDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('class_progress_report_details')->insert([
            ['class_progress_report_id' => 1, 'class_id' => 1, 'student_id' => 1, 'report' => 'Report 1', 'follow_up' => 'Follow-up 1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_progress_report_id' => 2, 'class_id' => 2, 'student_id' => 2, 'report' => 'Report 2', 'follow_up' => 'Follow-up 2', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_progress_report_id' => 3, 'class_id' => 3, 'student_id' => 3, 'report' => 'Report 3', 'follow_up' => 'Follow-up 3', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_progress_report_id' => 4, 'class_id' => 4, 'student_id' => 4, 'report' => 'Report 4', 'follow_up' => 'Follow-up 4', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_progress_report_id' => 5, 'class_id' => 5, 'student_id' => 5, 'report' => 'Report 5', 'follow_up' => 'Follow-up 5', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}