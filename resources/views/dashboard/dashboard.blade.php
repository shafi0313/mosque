@extends('dashboard.layout.app')
@section('title', 'Dashboard')
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
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        
@push('custom_scripts')
 {{-- plugins --}}
 <script src="{{ asset('backend/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
 <script src="{{ asset('backend/plugins/chartjs/chart.min.js') }}"></script>
 <script src="{{ asset('backend/js/index.js') }}"></script>
@endpush
@endsection

