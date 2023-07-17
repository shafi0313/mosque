@extends('frontend.layout.app')
@section('title', 'Sawah Stalls')
@section('content')
    <section id="feature">
        <div class="container">
            <div class="center wow fadeInDown">
                {!! $event_dawah->content !!}
            </div>
            <div> </div>
        </div>
    </section>
    @push('scripts')
    @endpush
@endsection
