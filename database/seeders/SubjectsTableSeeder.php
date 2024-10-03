<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subjects')->insert([
            ['subject_name' => 'Agama Hindu', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Agama Islam', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Agama Kristen', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Bahasa Bali', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Bahasa Indonesia', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Bahasa Inggris', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Bahasa Jepang', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Matematika', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Pendidikan Kewarganegaraan', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Penjasorkes', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Produk Kreatif dan Kewirausahaan', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Sejarah Indonesia', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Seni Budaya', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Informatika', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Projek IPAS', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Konsentrasi Keahlian DKV', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Konsentrasi Keahlian PPLG', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Konsentrasi Keahlian TJKTI', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Konsentrasi Keahlian BD', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Dasar Keahlian DKV', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Dasar Keahlian PPLG', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Dasar Keahlian TJKTI', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Kebekerjaan', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Keberlanjutan', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}