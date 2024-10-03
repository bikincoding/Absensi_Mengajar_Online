<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            StudentsTableSeeder::class,
            SubjectsTableSeeder::class,
            TeachingHoursTableSeeder::class,
            TeachersTableSeeder::class,
            ApplicationsTableSeeder::class,
            ClassesTableSeeder::class,
            AcademicYearsTableSeeder::class,
            AttendanceTableSeeder::class,
            GuardiansTableSeeder::class,
            ClassStudentsTableSeeder::class,
            ClassProgressReportsTableSeeder::class,
            ClassProgressReportDetailsTableSeeder::class,
            ClassStudentProgressReportsTableSeeder::class,
        ]);
    }
}