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
                    <li class="breadcrumb-item active" aria-current="page">My Profile</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="row">
        <div class="col-12 col-lg-8 col-xl-9">
            <div class="card overflow-hidden radius-10">
                <div class="profile-cover bg-dark position-relative mb-4">
                    <div class="user-profile-avatar shadow position-absolute top-50 start-0 translate-middle-x">
                        <img src="{{ profileImg() }}" alt="{{ user()->name }}">
                    </div>
                </div>
                <div class="card-body">
                    <div class="mt-5 d-flex align-items-start justify-content-between">
                        <div class="">
                            <h3 class="mb-2">{{ user()->name }}</h3>
                            <p class="mb-1">{{ user()->email }}</p>
                            <p class="mb-1">{{ user()->phone }}</p>
                            <p class="mb-1">{{ user()->address }}</p>
                            {{-- <div class="">
                                <span class="badge rounded-pill bg-primary">UX Research</span>
                                <span class="badge rounded-pill bg-primary">CX Strategy</span>
                                <span class="badge rounded-pill bg-primary">Project Management</span>
                            </div> --}}
                        </div>
                        <div class="">
                            <a href="{{ route('global.profile.edit') }}" class="btn btn-primary">
                              <i class="fa-regular fa-pen-to-square fa-beat"></i> Edit Profile
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-2">About Me</h4>
                    <p class="">It is a long established fact that a reader will be distracted by the readable content
                        of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                        normal distribution of letters.</p>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                        professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
                        consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical
                        literature, discovered the undoubtable source.</p>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                        looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 col-xl-3">
            <div class="card radius-10">
                <div class="card-body">
                    <h5 class="mb-3">Location</h5>
                    <p class="mb-0">
                        <ion-icon name="compass-sharp" class="me-2"></ion-icon>Kalkio Network
                    </p>
                </div>
            </div>

            <div class="card radius-10">
                <div class="card-body">
                    <h5 class="mb-3">Connect</h5>
                    <p class="">
                        <ion-icon name="globe-sharp" class="me-2"></ion-icon>www.example.com
                    </p>
                    <p class="">
                        <ion-icon name="logo-facebook" class="me-2"></ion-icon>Facebook
                    </p>
                    <p class="">
                        <ion-icon name="logo-twitter" class="me-2"></ion-icon>Twitter
                    </p>
                    <p class="mb-0">
                        <ion-icon name="logo-linkedin" class="me-2"></ion-icon>LinkedIn
                    </p>
                </div>
            </div>

            <div class="card radius-10">
                <div class="card-body">
                    <h5 class="mb-3">Skills</h5>
                    <div class="mb-3">
                        <p class="mb-1">Web Design</p>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 45%"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <p class="mb-1">HTML5</p>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 55%"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <p class="mb-1">PHP7</p>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 65%"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <p class="mb-1">CSS3</p>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 75%"></div>
                        </div>
                    </div>
                    <div class="mb-0">
                        <p class="mb-1">Photoshop</p>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 85%"></div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!--end row-->


    @push('custom_scripts')
        <script></script>
    @endpush
@endsection
