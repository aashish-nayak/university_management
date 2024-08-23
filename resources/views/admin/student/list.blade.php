@extends('layouts.main')

@section('title', 'Students')

@push('style')
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.dataTables.css">
@endpush

@section('main')
<div class="my-4">
    <div class="container">
        <div class="d-flex justify-content-end">
            <a href="{{ route('student.create') }}" class="btn btn-primary ms-auto my-3">Add Student</a>
        </div>
        <div class="table-responsive">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Teacher</th>
                        <th>Class</th>
                        <th>Admission Date</th>
                        <th>Yearly Fees</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Teacher</th>
                        <th>Class</th>
                        <th>Admission Date</th>
                        <th>Yearly Fees</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

@endsection

@push('script')
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>

<script>
    $("#example").DataTable({
        ajax: '',
        serverSide: true,
        processing: true,
        aaSorting: [[0, "desc"]],
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'teacher.name', name: 'teacher.name'},
            {data: 'class', name: 'class'},
            {data: 'admission_date', name: 'admission_date'},
            {data: 'yearly_fees', name: 'yearly_fees'},
            {data: 'action', name: 'action'},
        ]
    });

    $(document).ready(function() {
        $(document).on('click', '.btn-delete', function() {
            var rowId = $(this).data('rowid');

            let $form = $('<form>', {
                id: rowId,
                method: 'POST',
                action: '/student/' + rowId,
                style: 'display: none;'
            });

            // Add CSRF token input
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $form.append($('<input>', {
                type: 'hidden',
                name: '_token',
                value: csrfToken
            }));

            $form.append($('<input>', {
                type: 'hidden',
                name: '_method',
                value: 'DELETE'
            }));

            $('body').append($form);

            if (confirm('Are you sure you want to delete this item?')) {
                $form.submit();
            }
        });
    });
</script>
@endpush