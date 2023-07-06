@extends('dashboard.layout.app')
@section('title', 'President Address')
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
                <li class="breadcrumb-item active" aria-current="page">President Address</li>
            </ol>
        </nav>
    </div>
    <!--end breadcrumb-->
    <div class="d-flex justify-content-between index_title">
        {{-- <h6 class="mb-0">List of President Address's</h6>
        <a data-toggle="modal" data-bs-target="#createModal" data-bs-toggle="modal" class="btn btn-primary">Add New</a> --}}
    </div>

    <hr />
    <div class="card">
        <form action="{{ route('admin.president-address.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-12">
                        <label for="content" class="form-label required">President Address </label>
                        <textarea name="content" class="form-control text" required>{{ $president_address?->content }}</textarea>
                        @if ($errors->has('content'))
                            <div class="alert alert-danger">{{ $errors->first('content') }}</div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>

    @push('custom_scripts')
        {!! JsValidator::formRequest('App\Http\Requests\StoreHistoryRequest') !!}
        <script>
            $(document).ready(function() {
                $('.text').summernote({
                    height: 600,
                });
            });
        </script>
    @endpush
@endsection
