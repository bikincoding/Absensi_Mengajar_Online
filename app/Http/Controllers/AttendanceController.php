<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Teacher;
use App\Models\Subject;
use App\Models\Application;
use App\Models\TeachingHour;
use App\Models\ClassModel;
use App\Models\AcademicYear;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::with(['teacher', 'subject', 'application', 'teachingHour', 'class', 'academicYear'])->get();
        return view('admin.attendances.index', compact('attendances'));
    }

    public function create()
    {
        $teachers = Teacher::where('status', 1)->get();
        $subjects = Subject::where('status', 1)->get();
        $applications = Application::where('status', 1)->get();
        $teachingHours = TeachingHour::where('status', 1)->get();
        $classes = ClassModel::where('status', 1)->get();
        $activeAcademicYear = AcademicYear::where('status', 1)->first();

        return view('admin.attendances.create', compact('teachers', 'subjects', 'applications', 'teachingHours', 'classes', 'activeAcademicYear'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'teacher_id' => 'required|exists:teachers,id',
            'subject_id' => 'required|exists:subjects,id',
            'application_id' => 'required|exists:applications,id',
            'teaching_hour_id' => 'required|exists:teaching_hours,id',
            'class_id' => 'required|exists:classes,id',
            'learning_proof' => 'required|image',
            'learning_proof_director' => 'required|image',
            'academic_year_id' => 'required|exists:academic_years,id',
        ]);

        $learningProofPath = $request->file('learning_proof')->store('learning_proof');
        $learningProofDirectorPath = $request->file('learning_proof_director')->store('learning_proof_director');

        Attendance::create([
            'teacher_id' => $request->teacher_id,
            'subject_id' => $request->subject_id,
            'application_id' => $request->application_id,
            'teaching_hour_id' => $request->teaching_hour_id,
            'class_id' => $request->class_id,
            'learning_proof' => $learningProofPath,
            'learning_proof_director' => $learningProofDirectorPath,
            'academic_year_id' => $request->academic_year_id,
        ]);

        return redirect()->route('attendances.index')->with('success', 'Attendance created successfully.');
    }
}