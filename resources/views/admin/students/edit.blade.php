@extends('adminlte::page')

@section('title', 'Edit Student')

@section('content_header')
<h1>Edit Student</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Update Student Details</h3>
            </div>

            <div class="card-body">
                <form action="{{ route('students.update', $student->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="student_name">Student Name</label>
                        <input type="text" name="student_name" class="form-control" value="{{ $student->student_name }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="student_phone">Student Phone</label>
                        <input type="text" name="student_phone" class="form-control"
                            value="{{ $student->student_phone }}" required>
                    </div>
                    <div class="form-group">
                        <label for="father_name">Father's Name</label>
                        <input type="text" name="father_name" class="form-control" value="{{ $student->father_name }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="father_phone">Father's Phone</label>
                        <input type="text" name="father_phone" class="form-control" value="{{ $student->father_phone }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="mother_name">Mother's Name</label>
                        <input type="text" name="mother_name" class="form-control" value="{{ $student->mother_name }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="mother_phone">Mother's Phone</label>
                        <input type="text" name="mother_phone" class="form-control" value="{{ $student->mother_phone }}"
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@stop