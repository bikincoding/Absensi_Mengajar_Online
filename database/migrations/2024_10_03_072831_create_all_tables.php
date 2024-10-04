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
        
      
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('subject_name');
            $table->boolean('status');
            $table->timestamps();
        });

     
        Schema::create('teaching_hours', function (Blueprint $table) {
            $table->id();
            $table->string('teaching_hour_name');
            $table->boolean('status');
            $table->timestamps();
        });

       
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_name');
            $table->boolean('status');
            $table->timestamps();
        });

      
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('application_name');
            $table->boolean('status');
            $table->timestamps();
        });

      
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('class_name');
            $table->integer('class_level');
            $table->boolean('status');
            $table->timestamps();
        });

        
         Schema::create('academic_years', function (Blueprint $table) {
            $table->id();
            $table->string('academic_year_name');
            $table->boolean('status');
            $table->timestamps();
        });

    
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->foreignId('subject_id')->constrained('subjects');
            $table->foreignId('application_id')->constrained('applications'); //show input checkbox when status data active
            $table->foreignId('teaching_hour_id')->constrained('teaching_hours'); //show input checkbox when status data active
            $table->foreignId('class_id')->constrained('classes'); //show input checkbox when status data active
            $table->text('learning_proof'); //input image
            $table->text('learning_proof_director'); //input image
            $table->foreignId('academic_year_id')->constrained('academic_years'); //auto input with active academic_year
            $table->timestamps();
        });

       

      
        Schema::create('guardians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->foreignId('class_id')->constrained('classes');
            $table->foreignId('academic_year_id')->constrained('academic_years');
            $table->timestamps();
        });

       
        Schema::create('class_students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('class_id')->constrained('classes');
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('academic_year_id')->constrained('academic_years');
            $table->timestamps();
        });


       
        Schema::create('class_progress_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guardian_id')->constrained('guardians');
            $table->foreignId('class_student_id')->constrained('class_students');
            $table->timestamps();
        });

      
        Schema::create('class_progress_report_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('class_progress_report_id')->constrained('class_progress_reports');
            $table->foreignId('class_id')->constrained('classes');
            $table->foreignId('student_id')->constrained('students');
            $table->text('report');
            $table->text('follow_up');
            $table->timestamps();
        });

      
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
        Schema::dropIfExists('attendances');
        Schema::dropIfExists('academic_years');
        Schema::dropIfExists('classes');
        Schema::dropIfExists('applications');
        Schema::dropIfExists('teachers');
        Schema::dropIfExists('teaching_hours');
        Schema::dropIfExists('subjects');
        Schema::dropIfExists('students');
        
    }
}