<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class GuardiansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('guardians')->insert([
            ['teacher_id' => 1, 'class_id' => 1, 'academic_year_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_id' => 2, 'class_id' => 2, 'academic_year_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_id' => 3, 'class_id' => 3, 'academic_year_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_id' => 4, 'class_id' => 4, 'academic_year_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_id' => 5, 'class_id' => 5, 'academic_year_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}