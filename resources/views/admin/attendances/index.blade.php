@extends('adminlte::page')

@section('title', 'Attendance')

@section('content_header')
<h1>Attendance List</h1>
@stop

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">Manage Attendance</h3>
        <div class="card-tools">
            <a href="{{ route('attendances.create') }}" class="btn btn-success btn-sm">Add New Attendance</a>
        </div>
    </div>

    <div class="card-body">
        <table id="attendanceTable" class="table table-bordered table-striped table-hover">
            <thead class="bg-light">
                <tr>
                    <th>ID</th>
                    <th>Teacher</th>
                    <th>Subject</th>
                    <th>Application</th>
                    <th>Class</th>
                    <th>Learning Proof</th>
                    <th>Learning Proof Director</th>
                    <th>Academic Year</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($attendances as $attendance)
                <tr>
                    <td>{{ $attendance->id }}</td>
                    <td>{{ $attendance->teacher->teacher_name }}</td>
                    <td>{{ $attendance->subject->subject_name }}</td>
                    <td>{{ $attendance->application->application_name }}</td>
                    <td>{{ $attendance->class->class_name }}</td>
                    <td><img src="{{ asset('storage/' . $attendance->learning_proof) }}" width="50" height="50"></td>
                    <td><img src="{{ asset('storage/' . $attendance->learning_proof_director) }}" width="50"
                            height="50"></td>
                    <td>{{ $attendance->academicYear->academic_year_name }}</td>
                    <td>
                        <a href="{{ route('attendances.edit', $attendance->id) }}"
                            class="btn btn-warning btn-sm">Edit</a>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                            data-target="#deleteModal" data-attendanceid="{{ $attendance->id }}">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this attendance?
            </div>
            <div class="modal-footer">
                <form id="deleteForm" action="" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

@stop

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
@stop

@section('js')
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready(function() {
    $('#attendanceTable').DataTable();

    $('#deleteModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var attendanceId = button.data('attendanceid');
        var form = $('#deleteForm');
        form.attr('action', '/admin/attendance/' + attendanceId);
    });
});
</script>
@stop