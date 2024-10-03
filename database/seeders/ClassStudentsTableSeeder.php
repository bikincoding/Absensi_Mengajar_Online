<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ClassStudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('class_students')->insert([
            ['class_id' => 1, 'student_id' => 1, 'academic_year_id' => 1],
            ['class_id' => 2, 'student_id' => 2, 'academic_year_id' => 1],
            ['class_id' => 3, 'student_id' => 3, 'academic_year_id' => 2],
            ['class_id' => 4, 'student_id' => 4, 'academic_year_id' => 2],
            ['class_id' => 5, 'student_id' => 5, 'academic_year_id' => 3],
        ]);
    }
}