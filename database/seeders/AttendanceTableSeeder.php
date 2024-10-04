<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class AttendanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('attendances')->insert([
            ['teacher_id' => 1, 'subject_id' => 1, 'application_id' => 1, 'teaching_hour_id' => 1, 'class_id' => 1, 'learning_proof' => 'Proof 1', 'learning_proof_director' => 'Proof Director 1', 'academic_year_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_id' => 2, 'subject_id' => 2, 'application_id' => 2, 'teaching_hour_id' => 2, 'class_id' => 2, 'learning_proof' => 'Proof 2', 'learning_proof_director' => 'Proof Director 2', 'academic_year_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_id' => 3, 'subject_id' => 3, 'application_id' => 1, 'teaching_hour_id' => 3, 'class_id' => 3, 'learning_proof' => 'Proof 3', 'learning_proof_director' => 'Proof Director 3', 'academic_year_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_id' => 4, 'subject_id' => 4, 'application_id' => 2, 'teaching_hour_id' => 4, 'class_id' => 4, 'learning_proof' => 'Proof 4', 'learning_proof_director' => 'Proof Director 4', 'academic_year_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_id' => 5, 'subject_id' => 5, 'application_id' => 1, 'teaching_hour_id' => 5, 'class_id' => 5, 'learning_proof' => 'Proof 5', 'learning_proof_director' => 'Proof Director 5', 'academic_year_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}