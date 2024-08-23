@extends('layouts.main')

@section('title', 'Edit Student')


@section('main')
<div class="mt-4">
    <div class="container">
        <div class="d-flex justify-content-start align-items-center">
            <a href="{{ route('student.index') }}" class="nav-link my-3">
                <span class="pe-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                    </svg>
                </span>
                All Students
            </a>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-10 border p-4 rounded-2">
                <form action="{{ route('student.update', $student->id) }}" method="post">
                    @method('put')
                    @include('admin.student.form')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
@endpush