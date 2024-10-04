@extends('adminlte::page')

@section('title', 'Edit User')

@section('content_header')
<h1>Edit User</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <!-- Blue outline card -->
            <div class="card-header">
                <h3 class="card-title">Update User Details</h3>
            </div>

            <div class="card-body">
                <form action="{{ route('users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Name Input -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
                    </div>

                    <!-- Email Input -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                    </div>
            </div>

            <!-- Card Footer with Buttons -->
            <div class="card-footer d-flex justify-content-between">
                <!-- Update Button (left) -->
                <button type="submit" class="btn btn-primary">Update</button>

                <!-- Cancel Button (right) -->
                <a href="{{ route('users.index') }}" class="btn btn-secondary ml-auto">Cancel</a>
            </div>
            </form>
        </div>
    </div>
</div>
@stop