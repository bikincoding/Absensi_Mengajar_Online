<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            ['student_name' => 'Budi Santoso', 'photo' => null, 'address' => 'Jl. Merdeka No. 1', 'student_phone' => '0812-3456-7890', 'father_name' => 'Pak Santoso', 'father_phone' => '0812-9876-5432', 'mother_name' => 'Bu Santoso', 'mother_phone' => '0812-2345-6789', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['student_name' => 'Siti Aminah', 'photo' => null, 'address' => 'Jl. Sudirman No. 10', 'student_phone' => '0813-5678-1234', 'father_name' => 'Pak Amin', 'father_phone' => '0813-8765-4321', 'mother_name' => 'Bu Aminah', 'mother_phone' => '0813-1234-5678', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['student_name' => 'Andi Wijaya', 'photo' => null, 'address' => 'Jl. Pahlawan No. 22', 'student_phone' => '0814-6789-2345', 'father_name' => 'Pak Wijaya', 'father_phone' => '0814-5432-9876', 'mother_name' => 'Bu Wijaya', 'mother_phone' => '0814-3456-7890', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['student_name' => 'Dewi Sartika', 'photo' => null, 'address' => 'Jl. Diponegoro No. 7', 'student_phone' => '0815-7890-3456', 'father_name' => 'Pak Sartika', 'father_phone' => '0815-4321-8765', 'mother_name' => 'Bu Sartika', 'mother_phone' => '0815-4567-8901', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['student_name' => 'Rizki Putra', 'photo' => null, 'address' => 'Jl. Gatot Subroto No. 14', 'student_phone' => '0816-8901-4567', 'father_name' => 'Pak Putra', 'father_phone' => '0816-8765-4321', 'mother_name' => 'Bu Putra', 'mother_phone' => '0816-5678-9012', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}