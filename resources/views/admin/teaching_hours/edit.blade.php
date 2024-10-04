@extends('adminlte::page')

@section('title', 'Edit Teaching Hour')

@section('content_header')
<h1>Edit Teaching Hour</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Update Teaching Hour Details</h3>
            </div>

            <div class="card-body">
                <form action="{{ route('teaching_hours.update', $teachingHour->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="teaching_hour_name">Teaching Hour Name</label>
                        <input type="text" name="teaching_hour_name" class="form-control"
                            value="{{ $teachingHour->teaching_hour_name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control">
                            <option value="1" {{ $teachingHour->status ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ !$teachingHour->status ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('teaching_hours.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@stop