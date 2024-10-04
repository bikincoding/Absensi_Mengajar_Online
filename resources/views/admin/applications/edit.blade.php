@extends('adminlte::page')

@section('title', 'Edit Application')

@section('content_header')
<h1>Edit Application</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Update Application Details</h3>
            </div>

            <div class="card-body">
                <form action="{{ route('applications.update', $application->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="application_name">Application Name</label>
                        <input type="text" name="application_name" class="form-control"
                            value="{{ $application->application_name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control">
                            <option value="1" {{ $application->status ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ !$application->status ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('applications.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@stop