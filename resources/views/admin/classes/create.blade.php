@extends('adminlte::page')

@section('title', 'Create Class')

@section('content_header')
<h1>Add New Class</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Enter Class Details</h3>
            </div>

            <div class="card-body">
                <form action="{{ route('classes.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="class_name">Class Name</label>
                        <input type="text" name="class_name" class="form-control" placeholder="Enter Class Name"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="class_level">Class Level</label>
                        <input type="number" name="class_level" class="form-control" placeholder="Enter Class Level"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('classes.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@stop