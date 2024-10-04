@extends('adminlte::page')

@section('title', 'Edit Teacher')

@section('content_header')
<h1>Edit Teacher</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Update Teacher Details</h3>
            </div>

            <div class="card-body">
                <form action="{{ route('teachers.update', $teacher->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="teacher_name">Teacher Name</label>
                        <input type="text" name="teacher_name" class="form-control" value="{{ $teacher->teacher_name }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control">
                            <option value="1" {{ $teacher->status ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ !$teacher->status ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@stop