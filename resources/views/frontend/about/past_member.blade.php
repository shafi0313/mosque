@extends('frontend.layout.app')
@section('content')
    <section id="about-us">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Past {{ config('app.name') }} Committees</h2>
                <p class="lead">بِسۡمِ ٱللهِ ٱلرَّحۡمَـٰنِ ٱلرَّحِيمِ </p>
            </div>
            <style>
                .aboutbg {
                    border: none;
                    text-align: center;
                }
            </style>
            <div class="aboutbg">
                <img src="{{ asset('frontend/images/pastlogos.png') }}" width="450px" /> ------------------------ <img
                    src="{{ asset('frontend/images/pastlogos.png') }}" width="450px" />
            </div>
            <br><br>
            <div class="team">
                <div class="center wow fadeInDown">
                    <h2>Past {{ config('app.name') }} Presidents </h2>
                    <p class="lead">We are thankful to all below mentioned presidents and their committee members for
                        their hard work, devotion and dedication.</p>
                </div>

                <div class="CSSTableGenerator ">
                    <table cellspacing="10" cellpadding="0">
                        <tbody>
                            <tr>
                                <td class="one">Presidents</td>
                                <td class="two">Year</td>
                            </tr>
                            @foreach ($past_members as $past_member)
                                <tr>
                                    <td>{{ $past_member->name }}</td>
                                    <td>{{ Carbon\Carbon::parse($past_member->joining_date)->format('Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </section>

    @push('scripts')
    @endpush
@endsection
