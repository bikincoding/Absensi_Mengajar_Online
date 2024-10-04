@extends('adminlte::page')

@section('title', 'Create Attendance')

@section('content_header')
<h1>Create Attendance</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Enter Attendance Details</h3>
            </div>

            <div class="card-body">
                <form action="{{ route('attendances.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Teacher Selection -->
                    <div class="form-group">
                        <label for="teacher_id">Teacher</label>
                        <select name="teacher_id" class="form-control" required>
                            @foreach($teachers as $teacher)
                            <option value="{{ $teacher->id }}">{{ $teacher->teacher_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Subject Selection -->
                    <div class="form-group">
                        <label for="subject_id">Subject</label>
                        <select name="subject_id" class="form-control" required>
                            @foreach($subjects as $subject)
                            <option value="{{ $subject->id }}">{{ $subject->subject_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Application Selection (Checkbox) -->
                    <div class="form-group">
                        <label>Applications</label><br>
                        @foreach($applications as $application)
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" value="{{ $application->id }}"
                                name="application_id">
                            <label class="form-check-label">{{ $application->application_name }}</label>
                        </div>
                        @endforeach
                    </div>

                    <!-- Teaching Hour Selection (Checkbox) -->
                    <div class="form-group">
                        <label>Teaching Hours</label><br>
                        @foreach($teachingHours as $teachingHour)
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" value="{{ $teachingHour->id }}"
                                name="teaching_hour_id">
                            <label class="form-check-label">{{ $teachingHour->teaching_hour_name }}</label>
                        </div>
                        @endforeach
                    </div>

                    <!-- Class Selection (Checkbox) -->
                    <div class="form-group">
                        <label>Classes</label><br>
                        @foreach($classes as $class)
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" value="{{ $class->id }}" name="class_id">
                            <label class="form-check-label">{{ $class->class_name }}</label>
                        </div>
                        @endforeach
                    </div>

                    <!-- Learning Proof (Image) -->
                    <div class="form-group">
                        <label for="learning_proof">Learning Proof (Image)</label>
                        <input type="file" name="learning_proof" class="form-control" required>
                    </div>

                    <!-- Learning Proof Director (Image) -->
                    <div class="form-group">
                        <label for="learning_proof_director">Learning Proof Director (Image)</label>
                        <input type="file" name="learning_proof_director" class="form-control" required>
                    </div>

                    <!-- Auto-Selected Academic Year -->
                    <div class="form-group">
                        <label for="academic_year_id">Academic Year</label>
                        <input type="text" class="form-control" value="{{ $activeAcademicYear->academic_year_name }}"
                            readonly>
                        <input type="hidden" name="academic_year_id" value="{{ $activeAcademicYear->id }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('attendances.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@stop