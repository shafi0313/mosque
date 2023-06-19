@extends('dashboard.layout.app')
@section('title', 'Profile')
@section('content')

    <!--start breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0 align-items-center">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">
                            <ion-icon name="home-outline"></ion-icon>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('global.profile.index') }}">My Profile</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card radius-10">
                <div class="card-body">
                    <form>
                        <h5 class="mb-3">Edit Profile</h5>
                        <div class="mb-4 d-flex flex-column gap-3 align-items-center justify-content-center">
                            <div class="user-change-photo shadow">
                                <img src="{{ profileImg() }}" alt="{{ user()->name }}">
                            </div>
                            <button type="button" class="btn btn-outline-primary btn-sm radius-30 px-4">
                                <ion-icon name="image-sharp"></ion-icon>Change Photo                                
                            </button>
                        </div>
                        <h5 class="mb-0 mt-4">Information</h5>
                        <hr>
                        <div class="row g-3">
                            <div class="col-6">
                                <label class="form-label required">Name </label>
                                <input type="text" class="form-control" value="{{ user()->name }}" required>
                            </div>
                            <div class="col-6">
                                <label class="form-label required">Email address </label>
                                <input type="text" class="form-control" value="{{ user()->email }}" readonly>
                            </div>
                            <div class="col-6">
                                <label class="form-label">Date of Birth</label>
                                <input type="text" class="form-control" value="{{ user()->d_o_b }}">
                            </div>
                            <div class="col-6">
                                <label class="form-label required">Address </label>
                                <input type="text" class="form-control" value="{{ user()->address }}" required>
                            </div>
                        </div>

                        {{-- <h5 class="mb-0 mt-4">Contact Information</h5>
                        <hr>
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" value="47-A, city name, United States">
                            </div>
                            <div class="col-6">
                                <label class="form-label">City</label>
                                <input type="text" class="form-control" value="@jhon">
                            </div>
                            <div class="col-6">
                                <label class="form-label">Country</label>
                                <input type="text" class="form-control" value="xyz@example.com">
                            </div>
                            <div class="col-6">
                                <label class="form-label">Pin Code</label>
                                <input type="text" class="form-control" value="jhon">
                            </div>
                            <div class="col-6">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" value="Deo">
                            </div>
                            <div class="col-12">
                                <label class="form-label">About Me</label>
                                <textarea class="form-control" rows="4" cols="4" placeholder="Describe yourself..."></textarea>
                            </div>
                        </div> --}}
                        <div class="text-start mt-3">
                            <button type="button" class="btn btn-primary px-4">Save Changes</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--end row-->


    @push('custom_scripts')
        <script></script>
    @endpush
@endsection
