@extends('adminlte::page')

@section('title', 'Create Student')

@section('content_header')
<h1>Add New Student</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Enter Student Details</h3>
            </div>

            <div class="card-body">
                <form action="{{ route('students.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="student_name">Student Name</label>
                        <input type="text" name="student_name" class="form-control" placeholder="Enter Student Name"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="student_phone">Student Phone</label>
                        <input type="text" name="student_phone" class="form-control" placeholder="Enter Student Phone"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="father_name">Father's Name</label>
                        <input type="text" name="father_name" class="form-control" placeholder="Enter Father's Name"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="father_phone">Father's Phone</label>
                        <input type="text" name="father_phone" class="form-control" placeholder="Enter Father's Phone"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="mother_name">Mother's Name</label>
                        <input type="text" name="mother_name" class="form-control" placeholder="Enter Mother's Name"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="mother_phone">Mother's Phone</label>
                        <input type="text" name="mother_phone" class="form-control" placeholder="Enter Mother's Phone"
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@stop