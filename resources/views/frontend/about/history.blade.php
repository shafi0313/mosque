@extends('frontend.layout.app')
@section('content')
    <section id="feature">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {!! $history !!}
                </div>
            </div>
        </div>
    </section>
    
    @push('scripts')
    @endpush
@endsection
