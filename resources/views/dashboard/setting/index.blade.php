@extends('dashboard.layout.app')
@section('title', 'App Setting')
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
                <li class="breadcrumb-item active" aria-current="page">App Setting</li>
            </ol>
        </nav>
    </div>
    <!--end breadcrumb-->
    <div class="d-flex justify-content-between index_title">
        {{-- <h6 class="mb-0">List of History/About's</h6>
        <a data-toggle="modal" data-bs-target="#createModal" data-bs-toggle="modal" class="btn btn-primary">Add New</a> --}}
    </div>

    <hr />
    <div class="card">
        <form action="{{ route('admin.setting.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-12">
                        <label for="app_name" class="form-label required">App Name </label>
                        <input type="text" name="app_name" class="form-control" value="{{ setting('app_name') ?? '' }}" required>
                        @if ($errors->has('app_name'))
                            <div class="alert alert-danger">{{ $errors->first('app_name') }}</div>
                        @endif
                    </div>

                    <div class="col-md-6">
                        <label for="" class="form-label d-block required">App Logo </label>
                        <img src="{{ imagePath('logo', setting('app_logo')) }}" height="70px">
                    </div>
                    <div class="col-md-6">
                        <label for="app_logo" class="form-label">App Logo </label>
                        <input type="file" name="app_logo" class="form-control">
                        @if ($errors->has('app_logo'))
                            <div class="alert alert-danger">{{ $errors->first('app_logo') }}</div>
                        @endif
                    </div>

                    <div class="col-md-6">
                        <label for="" class="form-label d-block required">App Nav Logo </label>
                        <img src="{{ imagePath('logo', setting('app_nav_logo')) }}" height="70px">
                    </div>
                    <div class="col-md-6">
                        <label for="app_nav_logo" class="form-label">App Nav Logo </label>
                        <input type="file" name="app_nav_logo" class="form-control">
                        @if ($errors->has('app_nav_logo'))
                            <div class="alert alert-danger">{{ $errors->first('app_nav_logo') }}</div>
                        @endif
                    </div>

                    <div class="col-md-12">
                        <label for="app_description" class="form-label required">App Description </label>
                        <input type="text" name="app_description" class="form-control" value="{{ setting('app_description') ?? '' }}" required>
                        @if ($errors->has('app_description'))
                            <div class="alert alert-danger">{{ $errors->first('app_description') }}</div>
                        @endif
                    </div>

                    <div class="col-md-12">
                        <label for="app_keyword" class="form-label required">App Keyword </label>
                        <input type="text" name="app_keyword" class="form-control" value="{{ setting('app_keyword') ?? '' }}" required>
                        @if ($errors->has('app_keyword'))
                            <div class="alert alert-danger">{{ $errors->first('app_keyword') }}</div>
                        @endif
                    </div>

                    <div class="col-md-12">
                        <label for="home_committee_title" class="form-label required">Home Page Committee Title </label>
                        <input type="text" name="home_committee_title" class="form-control" value="{{ setting('home_committee_title') ?? '' }}" required>
                        @if ($errors->has('home_committee_title'))
                            <div class="alert alert-danger">{{ $errors->first('home_committee_title') }}</div>
                        @endif
                    </div>

                    <div class="col-md-6">
                        <label for="footer_credit" class="form-label required">Footer Credit Name </label>
                        <input type="text" name="footer_credit" class="form-control" value="{{ setting('footer_credit') ?? '' }}" required>
                        @if ($errors->has('footer_credit'))
                            <div class="alert alert-danger">{{ $errors->first('footer_credit') }}</div>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <label for="footer_credit_link" class="form-label">Footer Credit Link </label>
                        <input type="text" name="footer_credit_link" class="form-control" value="{{ setting('footer_credit_link') ?? '' }}">
                        @if ($errors->has('footer_credit_link'))
                            <div class="alert alert-danger">{{ $errors->first('footer_credit_link') }}</div>
                        @endif
                    </div>

                    <div class="col-md-6">
                        <label for="facebook" class="form-label">Facebook Link </label>
                        <input type="text" name="facebook" class="form-control" value="{{ setting('facebook') ?? '' }}">
                        @if ($errors->has('facebook'))
                            <div class="alert alert-danger">{{ $errors->first('facebook') }}</div>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <label for="youtube" class="form-label">Youtube Link </label>
                        <input type="text" name="youtube" class="form-control" value="{{ setting('youtube') ?? '' }}">
                        @if ($errors->has('youtube'))
                            <div class="alert alert-danger">{{ $errors->first('youtube') }}</div>
                        @endif
                    </div>
                    {{-- <div class="col-md-12">
                        <label for="content" class="form-label required">History/About </label>
                        <textarea name="content" class="form-control text" required></textarea>
                        @if ($errors->has('content'))
                            <div class="alert alert-danger">{{ $errors->first('content') }}</div>
                        @endif
                    </div> --}}
                </div>
            </div>
            <div class="card-footer text-center">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>

    @push('custom_scripts')
        {{-- {!! JsValidator::formRequest('App\Http\Requests\StoreHistoryRequest') !!} --}}
        <script>
            $(document).ready(function() {
                $('.text').summernote({
                    height: 100,
                });
            });
        </script>
    @endpush
@endsection
