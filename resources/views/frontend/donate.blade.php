﻿@extends('frontend.layout.app')
@section('title', 'Donate')
@section('content')
    <section id="feature">
        <div class="container">
            <div class="center wow fadeInDown">
                {!! $donate->content !!}
            </div>
            <div> </div>
        </div>
    </section>
    @push('scripts')
    @endpush
@endsection
