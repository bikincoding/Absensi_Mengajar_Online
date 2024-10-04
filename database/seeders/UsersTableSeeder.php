<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'adehpo@gmail.com',
            'password' => Hash::make('12345678'), // Use Hash::make to hash the password
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}