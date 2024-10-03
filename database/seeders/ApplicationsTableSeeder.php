<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class ApplicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('applications')->insert([
            ['application_name' => 'MsTeams', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['application_name' => 'Whatsapp', 'status' => true, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

        ]);
    }
}