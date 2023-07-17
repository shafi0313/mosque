@extends('frontend.layout.app')
@section('title', 'Join Us')
@section('content')
    <section id="feature">
        <div class="container">
            <div class="center wow fadeInDown">
                {!! $join_us->content !!}
            </div>
            <div> </div>
        </div>
    </section>
    @push('scripts')
    @endpush
@endsection
