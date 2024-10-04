@extends('adminlte::page')

@section('title', 'Create Teaching Hour')

@section('content_header')
<h1>Add New Teaching Hour</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Enter Teaching Hour Details</h3>
            </div>

            <div class="card-body">
                <form action="{{ route('teaching_hours.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="teaching_hour_name">Teaching Hour Name</label>
                        <input type="text" name="teaching_hour_name" class="form-control"
                            placeholder="Enter Teaching Hour Name" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('teaching_hours.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@stop