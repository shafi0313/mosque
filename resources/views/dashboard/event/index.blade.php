@extends('dashboard.layout.app')
@section('title', 'Event')
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
                <li class="breadcrumb-item active" aria-current="page">Event</li>
            </ol>
        </nav>
    </div>
    <!--end breadcrumb-->
    <div class="d-flex justify-content-between index_title">
        <h6 class="mb-0">List of Events</h6>
        <a data-toggle="modal" data-bs-target="#createModal" data-bs-toggle="modal" class="btn btn-primary">Add New</a>
    </div>

    <hr />
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="data_table" class="table table-striped table-bordered">
                    <thead class="bg-primary text-light">
                        <tr>
                            <th>SL</th>
                            <th>Title</th>
                            <th>Text</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th class="no-sort" width="60px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('dashboard.event.create')
    @push('custom_scripts')
        {!! JsValidator::formRequest('App\Http\Requests\StoreEventRequest') !!}
        {!! JsValidator::formRequest('App\Http\Requests\UpdateEventRequest') !!}
        <script>
            $(function() {
                $('#data_table').DataTable({
                    processing: true,
                    serverSide: true,
                    deferRender: true,
                    ordering: true,
                    responsive: true,
                    scrollY: 400,
                    ajax: "{{ route('admin.event.index') }}",
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                            searchable: false,
                            orderable: false,
                        },
                        {
                            data: 'title',
                            name: 'title'
                        },
                        {
                            data: 'text',
                            name: 'text'
                        },
                        {
                            data: 'image',
                            name: 'image'
                        },
                        {
                            data: 'status',
                            name: 'status'
                        },
                        {
                            data: 'action',
                            name: 'action',
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
                $('.text').summernote({
                    height: 200,
                });
            });
        </script>
    @endpush
@endsection
