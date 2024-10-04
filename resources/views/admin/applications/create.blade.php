@extends('adminlte::page')

@section('title', 'Create Application')

@section('content_header')
<h1>Add New Application</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Enter Application Details</h3>
            </div>

            <div class="card-body">
                <form action="{{ route('applications.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="application_name">Application Name</label>
                        <input type="text" name="application_name" class="form-control"
                            placeholder="Enter Application Name" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('applications.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@stop