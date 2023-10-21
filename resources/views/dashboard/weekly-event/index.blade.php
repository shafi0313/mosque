@extends('dashboard.layout.app')
@section('title', 'Weekly Event')
@section('content')
    <!--start breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">
                        <ion-icon name="home-outline"></ion-icon>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Weekly Event</li>
            </ol>
        </nav>
    </div>
    <!--end breadcrumb-->
    <div class="d-flex justify-content-between index_title">
        <h6 class="mb-0">List of Weekly Event</h6>
        <a data-toggle="modal" data-bs-target="#createModal" data-bs-toggle="modal" class="btn btn-primary">Add New</a>
    </div>

    <hr />
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="data_table" class="table table-striped table-bordered">
                    <thead class="bg-primary text-light">
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('dashboard.weekly-event.create')
    @push('custom_scripts')
    {!! JsValidator::formRequest('App\Http\Requests\StoreWeeklyEventRequest') !!}
    {!! JsValidator::formRequest('App\Http\Requests\UpdateWeeklyEventRequest') !!}
        <script>
            $(function() {
                $('#data_table').DataTable({
                    processing: true,
                    serverSide: true,
                    deferRender: true,
                    ordering: true,
                    responsive: true,
                    scrollY: 400,
                    ajax: "{{ route('admin.weekly-events.index') }}",
                    columns: [
                        {
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                            searchable: false,
                            orderable: false,
                            title: 'SL'
                        },
                        {
                            data: 'title',
                            name: 'title',
                            title: 'Title'
                        },
                        {
                            data: 'content',
                            name: 'content',
                            title: 'Content'
                        },
                        {
                            data: 'image',
                            name: 'image',
                            title: 'Image'
                        },
                        {
                            data: 'status',
                            name: 'status',
                            title: 'Status'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            title: 'Action',
                            className: 'text-center',
                            width: '60px',
                            orderable: false,
                            searchable: false
                        },
                    ],
                    // fixedColumns: false,
                    scroller: {
                        loadingIndicator: true
                    }
                });
            });
            $(document).ready(function() {
                $('.content').summernote({
                    height: 400,
                });
            });
        </script>
    @endpush
@endsection
