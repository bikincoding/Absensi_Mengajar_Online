@extends('adminlte::page')

@section('title', 'Create User')

@section('content_header')
<h1>Create New User</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <!-- Blue outline card -->
            <div class="card-header">
                <h3 class="card-title">Add New User</h3>
            </div>

            <div class="card-body">
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <!-- Name Input -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                    </div>

                    <!-- Email Input -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                    </div>

                    <!-- Password Input -->
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Password"
                            required>
                    </div>
            </div>

            <!-- Card Footer with Buttons -->
            <div class="card-footer d-flex justify-content-between">
                <!-- Submit Button (left) -->
                <button type="submit" class="btn btn-primary">Submit</button>

                <!-- Cancel Button (right) -->
                <a href="{{ route('users.index') }}" class="btn btn-secondary ml-auto">Cancel</a>
            </div>
            </form>
        </div>
    </div>
</div>
@stop