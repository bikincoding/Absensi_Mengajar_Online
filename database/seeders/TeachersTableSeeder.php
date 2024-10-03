<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teachers')->insert([
            ['teacher_name' => 'Anak Agung Sandatya Widihyanti, S.Kom', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_name' => 'Gede Putu Agustyawan, S.Pd', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_name' => 'I Gede Made Darma Wiguna, S.Pd', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_name' => 'I Gst Pt Wahyu Armandha Kumara, S.Kom', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_name' => 'I Gusti Ayu Ary Ratih, SE', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_name' => 'I Made Dwi Adyana, SH', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_name' => 'I Wayan Muliawan, S.Pd', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_name' => 'Ida Ayu Cempaka Putri, S.Pd', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_name' => 'Ida Ayu Made Ari Widyawati, S.Pd.H', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_name' => 'Masri Kagatanaribe, S.Th, M.Pd', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_name' => 'Ni Kadek Dwi Sintya Dewi, S.Pd', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_name' => 'Ni Kadek Lala Mistiardi, S.Pd', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_name' => 'Ni Luh Candra Dewi, S.Pd', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_name' => 'Ni Nyoman Dita Tri Pramida, S.Pd', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_name' => 'Ni Nyoman Murni, S.Kom', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_name' => 'Ni Wayan Kantiani, S.Pd', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_name' => 'Putu Ade Pranata, S.Kom', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_name' => 'Yan Anugrah Wisesa, S.Sos.H.M.Pd', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_name' => 'I Wayan Cikayana, S.Pd', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_name' => 'I Gusti Ayu Ria Sukma Dewi, S.Pd', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_name' => 'Ni Putu Ayu Imelda Sasiandari, S.S', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_name' => 'I Gede Bagus Ardiyana Irawan, S.Kom', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_name' => 'Gusti Ayu Oktianingsih, S.Pd', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_name' => 'Dapa Putra', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_name' => 'Bagas Alif Rizkianto', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_name' => 'Anak Agung Ngurah Putra Agung Amurwabhumi Yoga Cara, SM', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_name' => 'Thessa Sahara Umami', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_name' => 'Binta Lestari Putry, S.Pd', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_name' => 'Samsul Arifin', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_name' => 'Ni Putu Anik Parwati Utami, S.Kom', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_name' => 'Ni Luh Putu Dea Angelina Perlita, S.Sn', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['teacher_name' => 'Ni Made Candra Dewi, S.S', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}