@extends('layouts.main')

@section('title', 'Dashboard')

@push('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/cards/card-1/assets/css/card-1.css">
@endpush
@section('main')
<section class="py-3 py-md-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8 col-xxl-7">
                <div class="row gy-4">
                    <div class="col-12 col-sm-6">
                        <div class="card widget-card border-light shadow-sm">
                            <div class="card-body p-4">
                                <div class="row">
                                    <div class="col-8">
                                        <h5 class="card-title widget-card-title mb-3">Total Teachers</h5>
                                        <h4 class="card-subtitle text-body-secondary m-0">{{ $teacherCount }}</h4>
                                    </div>
                                    <div class="col-4">
                                        <div class="d-flex justify-content-end">
                                            <div
                                                class="lh-1 text-white bg-info rounded-circle p-3 d-flex align-items-center justify-content-center">
                                                <i class="bi bi-people fs-4"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="card widget-card border-light shadow-sm">
                            <div class="card-body p-4">
                                <div class="row">
                                    <div class="col-8">
                                        <h5 class="card-title widget-card-title mb-3">Total Students</h5>
                                        <h4 class="card-subtitle text-body-secondary m-0">{{ $studentCount }}</h4>
                                    </div>
                                    <div class="col-4">
                                        <div class="d-flex justify-content-end">
                                            <div
                                                class="lh-1 text-white bg-info rounded-circle p-3 d-flex align-items-center justify-content-center">
                                                <i class="bi bi-backpack fs-4"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection