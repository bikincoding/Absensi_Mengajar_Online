@extends('adminlte::page')

@section('title', 'Academic Years')

@section('content_header')
<h1>Academic Years List</h1>
@stop

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">Manage Academic Years</h3>
        <div class="card-tools">
            <a href="{{ route('academic_years.create') }}" class="btn btn-success btn-sm">Add New Academic Year</a>
        </div>
    </div>

    <div class="card-body">
        <table id="academicYearsTable" class="table table-bordered table-striped table-hover">
            <thead class="bg-light">
                <tr>
                    <th>ID</th>
                    <th>Academic Year Name</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($academicYears as $academicYear)
                <tr>
                    <td>{{ $academicYear->id }}</td>
                    <td>{{ $academicYear->academic_year_name }}</td>
                    <td>{{ $academicYear->status ? 'Active' : 'Inactive' }}</td>
                    <td>
                        <a href="{{ route('academic_years.edit', $academicYear->id) }}"
                            class="btn btn-warning btn-sm">Edit</a>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                            data-target="#deleteModal" data-academicyearid="{{ $academicYear->id }}">Delete</button>
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
                Are you sure you want to delete this academic year?
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
    $('#academicYearsTable').DataTable();

    $('#deleteModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var academicYearId = button.data('academicyearid');
        var form = $('#deleteForm');
        form.attr('action', '/admin/academic_years/' + academicYearId);
    });
});
</script>
@stop