<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

          // 10. students table
          Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('photo')->nullable();
            $table->text('address')->nullable();
            $table->string('student_phone');
            $table->string('father_name');
            $table->string('father_phone');
            $table->string('mother_name');
            $table->string('mother_phone');
            $table->timestamps();
        });
        
        // 1. subjects table
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('subject_name');
            $table->boolean('status');
            $table->timestamps();
        });

        // 2. teaching_hours table
        Schema::create('teaching_hours', function (Blueprint $table) {
            $table->id();
            $table->string('teaching_hour_name');
            $table->boolean('status');
            $table->timestamps();
        });

        // 3. teachers table
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_name');
            $table->boolean('status');
            $table->timestamps();
        });

        // 4. applications table
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('application_name');
            $table->boolean('status');
            $table->timestamps();
        });

        // 5. classes table
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('class_name');
            $table->integer('class_level');
            $table->boolean('status');
            $table->timestamps();
        });

         // 12. academic_years table
         Schema::create('academic_years', function (Blueprint $table) {
            $table->id();
            $table->string('academic_year_name');
            $table->boolean('status');
            $table->timestamps();
        });

        // 6. attendance table
        Schema::create('attendance', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->foreignId('subject_id')->constrained('subjects');
            $table->foreignId('application_id')->constrained('applications');
            $table->foreignId('teaching_hour_id')->constrained('teaching_hours');
            $table->foreignId('class_id')->constrained('classes');
            $table->text('learning_proof');
            $table->text('learning_proof_director');
            $table->foreignId('academic_year_id')->constrained('academic_years');
            $table->timestamps();
        });

       

        // 7. guardians table
        Schema::create('guardians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->foreignId('class_id')->constrained('classes');
            $table->foreignId('academic_year_id')->constrained('academic_years');
            $table->timestamps();
        });

        // 11. class_students table
        Schema::create('class_students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('class_id')->constrained('classes');
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('academic_year_id')->constrained('academic_years');
            $table->timestamps();
        });


        // 8. class_progress_reports table
        Schema::create('class_progress_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guardian_id')->constrained('guardians');
            $table->foreignId('class_student_id')->constrained('class_students');
            $table->timestamps();
        });

        // 9. class_progress_report_details table
        Schema::create('class_progress_report_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('class_progress_report_id')->constrained('class_progress_reports');
            $table->foreignId('class_id')->constrained('classes');
            $table->foreignId('student_id')->constrained('students');
            $table->text('report');
            $table->text('follow_up');
            $table->timestamps();
        });

      

        
       

        // 13. class_student_progress_reports table
        Schema::create('class_student_progress_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('class_progress_report_id')->constrained('class_progress_reports');
            $table->foreignId('class_student_id')->constrained('class_students');
            $table->foreignId('student_id')->constrained('students');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class_student_progress_reports');
        Schema::dropIfExists('class_progress_report_details');
        Schema::dropIfExists('class_progress_reports');
        Schema::dropIfExists('class_students');
        Schema::dropIfExists('guardians');
        Schema::dropIfExists('attendance');
        Schema::dropIfExists('academic_years');
        Schema::dropIfExists('classes');
        Schema::dropIfExists('applications');
        Schema::dropIfExists('teachers');
        Schema::dropIfExists('teaching_hours');
        Schema::dropIfExists('subjects');
        Schema::dropIfExists('students');
        
        
        
        
        
        
        
        
        
    }
}