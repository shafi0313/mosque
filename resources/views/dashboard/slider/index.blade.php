@extends('dashboard.layout.app')
@section('title', 'Slider')
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
                <li class="breadcrumb-item active" aria-current="page">Slider</li>
            </ol>
        </nav>
    </div>
    <!--end breadcrumb-->
    <div class="d-flex justify-content-between index_title">
        <h6 class="mb-0">Slider List</h6>
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
                            <th>Subtitle</th>
                            <th>Background Image</th>
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
    @include('dashboard.admin_user.create')
    @push('custom_scripts')
        <script>
            $(function() {
                $('#data_table').DataTable({
                    processing: true,
                    serverSide: true,
                    deferRender: true,
                    ordering: true,
                    responsive: true,
                    scrollY: 400,
                    ajax: "{{ route('admin.slider.index') }}",
                    columns: [
                        {
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
                            data: 'sub_title',
                            name: 'sub_title'
                        },
                        {
                            data: 'image',
                            name: 'image'
                        },
                        {
                            data: 'icon',
                            name: 'icon'
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
        </script>
    @endpush
@endsection
