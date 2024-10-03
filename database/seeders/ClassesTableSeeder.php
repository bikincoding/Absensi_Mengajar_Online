<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classes')->insert([
            // X PPLG
            ['class_name' => 'X PPLG 1', 'class_level' => 1, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'X PPLG 2', 'class_level' => 1, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'X PPLG 3', 'class_level' => 1, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'X PPLG 4', 'class_level' => 1, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'X PPLG 5', 'class_level' => 1, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // X DKV
            ['class_name' => 'X DKV 1', 'class_level' => 1, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'X DKV 2', 'class_level' => 1, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'X DKV 3', 'class_level' => 1, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'X DKV 4', 'class_level' => 1, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'X DKV 5', 'class_level' => 1, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // X TJKT
            ['class_name' => 'X TJKT 1', 'class_level' => 1, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'X TJKT 2', 'class_level' => 1, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'X TJKT 3', 'class_level' => 1, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'X TJKT 4', 'class_level' => 1, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'X TJKT 5', 'class_level' => 1, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // XI PPLG
            ['class_name' => 'XI PPLG 1', 'class_level' => 2, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'XI PPLG 2', 'class_level' => 2, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'XI PPLG 3', 'class_level' => 2, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'XI PPLG 4', 'class_level' => 2, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'XI PPLG 5', 'class_level' => 2, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // XI DKV
            ['class_name' => 'XI DKV 1', 'class_level' => 2, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'XI DKV 2', 'class_level' => 2, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'XI DKV 3', 'class_level' => 2, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'XI DKV 4', 'class_level' => 2, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'XI DKV 5', 'class_level' => 2, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // XI TJKT
            ['class_name' => 'XI TJKT 1', 'class_level' => 2, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'XI TJKT 2', 'class_level' => 2, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'XI TJKT 3', 'class_level' => 2, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'XI TJKT 4', 'class_level' => 2, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'XI TJKT 5', 'class_level' => 2, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // XII PPLG
            ['class_name' => 'XII PPLG 1', 'class_level' => 3, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'XII PPLG 2', 'class_level' => 3, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'XII PPLG 3', 'class_level' => 3, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'XII PPLG 4', 'class_level' => 3, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'XII PPLG 5', 'class_level' => 3, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // XII DKV
            ['class_name' => 'XII DKV 1', 'class_level' => 3, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'XII DKV 2', 'class_level' => 3, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'XII DKV 3', 'class_level' => 3, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'XII DKV 4', 'class_level' => 3, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'XII DKV 5', 'class_level' => 3, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // XII TJKT
            ['class_name' => 'XII TJKT 1', 'class_level' => 3, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'XII TJKT 2', 'class_level' => 3, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'XII TJKT 3', 'class_level' => 3, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'XII TJKT 4', 'class_level' => 3, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'XII TJKT 5', 'class_level' => 3, 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}