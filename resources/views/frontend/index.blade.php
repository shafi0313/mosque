@extends('frontend.layout.app')
@section('title', 'Home')
@section('content')
    {{-- Slider --}}
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                @php $i = 0; @endphp
                @foreach ($sliders as $key => $slider)
                    <li data-target="#main-slider" data-slide-to="{{ $i++ }}"
                        class="{{ $loop->iteration == 1 ? 'active' : '' }}"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach ($sliders as $slider)
                    <div class="item {{ $loop->iteration == 1 ? 'active' : '' }} img-responsive"
                        style="background-image:url({{ imagePath('sliders', $slider->image) }})">
                        <div class="container img-responsive">
                            <div class="row slide-margin">
                                <div class="col-sm-6">
                                    <div class="carousel-content">
                                        <h1 class="animation animated-item-2">{{ $slider->title }}</h1>
                                        <h2 class="animation animated-item-3">{{ $slider->sub_title }}</h2>
                                    </div>
                                </div>
                                <div class="col-sm-6 hidden-xs animation animated-item-4">
                                    <div class="slider-img">
                                        <img src="{{ imagePath('sliders', $slider->icon) }}" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs img-responsive" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section>
    {{-- !Slider --}}

    <section id="services" class="service-item">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Upcoming Events</h2>
                <h3>Find out more <a href="upcoming_events.html">here</a>.</h3>
                <!-- بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم-->
            </div>
            <div class="row">
                @foreach ($events as $event)
                    <div class="col-sm-6 col-md-4 center-block">
                        <div class="media services-wrap wow fadeInDown table-responsive img-responsive center-block center">
                            <div class="pull-left">
                                <img src="{{ imagePath('events', $event->image) }}" width="400"
                                    class="img-responsive fa-align-center center-block">
                                <h3 class="col-lg-12 sundowner">{{ $event->title }}</h3><br />
                                <h3 class="col-lg-12 ssundowner">{{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}
                                </h3><br />
                                <a href="upcoming_events-2.html">
                                    <h5 class="more_info sundowner">See More Info</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="media-body"> </div>
        </div>
    </section>
    <section id="feature">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Weekly Events</h2>
                <br>
                <!-- <p class="lead">بِسۡمِ ٱللهِ ٱلرَّحۡمَـٰنِ ٱلرَّحِيمِ (﻿١﻿)</p>-->
            </div>
            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInDown col-lg-6" data-wow-duration="1000ms"
                        data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-bullhorn"></i>
                            <h2>Weekly Classes</h2>
                            <h3>For brothers and sisters. <a href="contact-us.html">Contact us</a> for more
                                information.</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInDown col-lg-6" data-wow-duration="1000ms"
                        data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-book"></i>
                            <h2>UWA MSA Junior Caliphs</h2>
                            <h3>Held every Saturday from 10 30 AM to 12 30 PM, in the musallah.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="service-item">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>MSA Committee 2023</h2>
                <p class="lead">Find more details about the current committee <a href="about_mem.html">here</a>.</p>
            </div>
            <style>
                .comimg img {
                    border-radius: 0px;
                    transition: ease-in-out 0.5s;
                }
                .comimg img:hover {
                    border-radius: 100px;

                }
            </style>
            <div class="comimg">
                <div class="row clearfix">
                    @foreach ($committees as $committee)
                        <div class="col-md-4 col-sm-6 col-md-offset-0">
                            <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms"
                                data-wow-delay="300ms">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="media-object" class="comimg"
                                            src="{{ imagePath('committee', $committee->image) }}" alt=""
                                            height="150px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="whyisntitwhite">{{ $committee->name }}</h4>
                                        <h5 class="whyisntitwhite">{{ $committee->designation }}</h5>
                                        <ul class="social_icons">

                                            <li class="whyisntitwhite">Contact: {{ $committee->phone }}<a
                                                    href="mailto:{{ $committee->email }}">{{ $committee->email }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
