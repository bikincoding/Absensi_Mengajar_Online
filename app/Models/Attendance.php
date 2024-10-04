<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'teacher_id',
        'subject_id',
        'application_id',
        'teaching_hour_id',
        'class_id',
        'learning_proof',
        'learning_proof_director',
        'academic_year_id',
    ];

    // Define relationships
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function application()
    {
        return $this->belongsTo(Application::class);
    }

    public function teachingHour()
    {
        return $this->belongsTo(TeachingHour::class);
    }

    public function class()
    {
        return $this->belongsTo(ClassModel::class);
    }

    public function academicYear()
    {
        return $this->belongsTo(AcademicYear::class);
    }
}