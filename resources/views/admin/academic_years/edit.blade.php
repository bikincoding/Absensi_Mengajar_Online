@extends('adminlte::page')

@section('title', 'Edit Academic Year')

@section('content_header')
<h1>Edit Academic Year</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Update Academic Year Details</h3>
            </div>

            <div class="card-body">
                <form action="{{ route('academic_years.update', $academicYear->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="academic_year_name">Academic Year Name</label>
                        <input type="text" name="academic_year_name" class="form-control"
                            value="{{ $academicYear->academic_year_name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control">
                            <option value="1" {{ $academicYear->status ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ !$academicYear->status ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('academic_years.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@stop