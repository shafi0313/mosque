@extends('dashboard.layout.app')
@section('title', 'Committee Member')
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
                <li class="breadcrumb-item active" aria-current="page">Committee Member</li>
            </ol>
        </nav>
    </div>
    <!--end breadcrumb-->
    <div class="d-flex justify-content-between index_title">
        <h6 class="mb-0">List of Committee Member's</h6>
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
                            <th>Designation</th>
                            <th>Phone</th>
                            <th>Present/Past</th>
                            <th>Email</th>
                            <th>Date of M.</th>
                            <th>Member Type</th>
                            <th>Image</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Text</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('dashboard.committee_member.create')
    @push('custom_scripts')
        {!! JsValidator::formRequest('App\Http\Requests\StoreCommitteeRequest') !!}
        {{-- {!! JsValidator::formRequest('App\Http\Requests\UpdateCommitteeRequest') !!} --}}
        <script>
            $(function() {
                $('#data_table').DataTable({
                    processing: true,
                    serverSide: true,
                    deferRender: true,
                    ordering: true,
                    // responsive: true,
                    scrollY: 400,
                    ajax: "{{ route('admin.committee-member.index') }}",
                    columns: [
                        {
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                            className: "text-center",
                            width: "17px",
                            searchable: false,
                            orderable: false,
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'designation',
                            name: 'designation'
                        },
                        {
                            data: 'phone',
                            name: 'phone'
                        },
                        {
                            data: 'is_present',
                            name: 'is_present'
                        },
                        {
                            data: 'email',
                            name: 'email'
                        },
                        {
                            data: 'joining_date',
                            name: 'joining_date'
                        },
                        {
                            data: 'type',
                            name: 'type'
                        },
                        {
                            data: 'image',
                            name: 'image'
                        },
                        {
                            data: 'address',
                            name: 'address'
                        },
                        {
                            data: 'status',
                            name: 'status'
                        },
                        {
                            data: 'text',
                            name: 'text'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            className: "text-center",
                            width: "60px",
                            orderable: false,
                            searchable: false,
                        },
                    ],
                    // fixedColumns: true,
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
            document.getElementById('status_input').addEventListener("click", function() {
                document.getElementById('status_label').innerHTML = this.checked ? 'Active' : 'Inactive';
            });
            document.getElementById('is_present_input').addEventListener("click", function() {
                document.getElementById('is_present_label').innerHTML = this.checked ? 'Active' : 'Inactive';
            });
        </script>
    @endpush
@endsection
