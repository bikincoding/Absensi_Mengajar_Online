@extends('adminlte::page')

@section('title', 'Teaching Hours')

@section('content_header')
<h1>Teaching Hours List</h1>
@stop

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">Manage Teaching Hours</h3>
        <div class="card-tools">
            <a href="{{ route('teaching_hours.create') }}" class="btn btn-success btn-sm">Add New Teaching Hour</a>
        </div>
    </div>

    <div class="card-body">
        <table id="teachingHoursTable" class="table table-bordered table-striped table-hover">
            <thead class="bg-light">
                <tr>
                    <th>ID</th>
                    <th>Teaching Hour Name</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teachingHours as $teachingHour)
                <tr>
                    <td>{{ $teachingHour->id }}</td>
                    <td>{{ $teachingHour->teaching_hour_name }}</td>
                    <td>{{ $teachingHour->status ? 'Active' : 'Inactive' }}</td>
                    <td>
                        <a href="{{ route('teaching_hours.edit', $teachingHour->id) }}"
                            class="btn btn-warning btn-sm">Edit</a>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                            data-target="#deleteModal" data-teachinghourid="{{ $teachingHour->id }}">Delete</button>
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
                Are you sure you want to delete this teaching hour?
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
    $('#teachingHoursTable').DataTable();

    $('#deleteModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var teachingHourId = button.data('teachinghourid');
        var form = $('#deleteForm');
        form.attr('action', '/admin/teaching_hours/' + teachingHourId);
    });
});
</script>
@stop