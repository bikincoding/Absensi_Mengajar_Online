@extends('adminlte::page')

@section('title', 'Create Academic Year')

@section('content_header')
<h1>Add New Academic Year</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Enter Academic Year Details</h3>
            </div>

            <div class="card-body">
                <form action="{{ route('academic_years.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="academic_year_name">Academic Year Name</label>
                        <input type="text" name="academic_year_name" class="form-control"
                            placeholder="Enter Academic Year Name" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('academic_years.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@stop