@extends('frontend.layout.app')
@section('content')
    <section id="feature">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Upcoming Events </h2>
                <br>
                <p class="lead">بِسۡمِ ٱللهِ ٱلرَّحۡمَـٰنِ ٱلرَّحِيمِ </p>
                <h3> The UWAMSA organises a wide variety of ticketed as well as free events throughout the year, the biggest
                    of which is our annual Community Iftar, held during Ramadan. Everyone is welcome to attend! </h3>
                <h3>The UWAMSA highly values the contribution of all staff, students and community members. For volunteering
                    opportunities, feedback and suggestions contact any of the <a
                        href="{{ route('frontend.about.committeeMember') }}">committee
                        members</a>. </h3>
                <p>Stay tuned for more! </p>
            </div>
            <div>

            </div>
        </div>
    </section>

    <section id="services" class="service-item">
        <div class="container">
            <div class="row clearfix">
                @foreach ($up_coming_events as $up_coming_event)
                    <div class="col-md-4 col-sm-6 col-md-offset-0">
                        <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="media">
                                <div class="pull-left"><img src="{{ imagePath('event', $up_coming_event->image) }}" alt="{{ $up_coming_event->title }}" width="400"
                                        height="400" class="media-object img-responsive center-block">
                                    <h2>{{ $up_coming_event->title }}</h2>
                                    <h3 class="events_texts">{{ Carbon\Carbon::parse($up_coming_event->date)->format('d M Y') }}</h3>
                                    <h5 class="events_texts">{!! Str::limit($up_coming_event->text, 20) !!}</h5>
                                    <style>
                                        .events_texts {
                                            color: white;
                                        }
                                    </style>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    @push('scripts')
    @endpush
@endsection
