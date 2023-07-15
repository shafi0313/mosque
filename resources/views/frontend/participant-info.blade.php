@extends('frontend.layout.app')
@section('content')
<style>
    img {
        max-width: 100%;
        height: auto;}
</style>
    <section id="feature">
        <div class="container">
            <div class="wow fadeInDown">
                {!! $participantInfo->content !!}
            </div>
            <div> </div>
        </div>
    </section>
    @push('scripts')
    @endpush
@endsection
