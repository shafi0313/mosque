@extends('dashboard.layout.app')
@section('title', 'Admin User')
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
                <li class="breadcrumb-item active" aria-current="page">Admin User</li>
            </ol>
        </nav>
    </div>
    <!--end breadcrumb-->
    <div class="d-flex justify-content-between index_title">
        <h6 class="mb-0">Admin User List</h6>
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Date of Birth</th>
                            <th class="no-sort" width="60px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @can('admin-user-add')
        @include('dashboard.admin_user.create')
    @endcan
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
                    ajax: "{{ route('admin.admin-user.index') }}",
                    columns: [
                        // {
                        //     data: 'check',
                        //     name: 'check',
                        //     orderable: false,
                        //     searchable: false
                        // },
                        {
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                            searchable: false,
                            orderable: false,
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'email',
                            name: 'email'
                        },
                        {
                            data: 'phone',
                            name: 'phone'
                        },
                        {
                            data: 'age',
                            name: 'age'
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
