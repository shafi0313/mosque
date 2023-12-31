<nav class="navbar navbar-inverse img-responsive" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                    class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="{{ route('frontend.index') }}"><img src="{{ imagePath('logo', setting('app_logo')) }}" alt="logo"
                    width="150" class="img-responsive"></a>
        </div>
        <div class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav resp">
                <li><a href="{{ route('frontend.index') }}">Home</a></li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<i
                            class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('frontend.about.presidentAddress') }}">President's Address</a></li>
                        <li><a href="{{ route('frontend.about.history') }}">History</a></li>
                        <li><a href="{{ route('frontend.about.committeeMember') }}">Committee Members</a></li>
                        <li><a href="{{ route('frontend.about.pastMember') }}">Past Members</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('frontend.prayer.index') }}">Prayer</a></li>
                {{-- <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Prayers<i
                            class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="reg_prayers.html">Daily</a></li>
                        <li><a href="fri_prayers.html">Friday</a></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </li> --}}
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Events<i
                            class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('frontend.event.upComing') }}">Upcoming</a></li>
                        <li><a href="{{ route('frontend.event.dawahStalls') }}">Dawah Stalls</a></li>
                    </ul>
                </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Road To
                        Remembrance<i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('frontend.participantInfo') }}">Participant Info</a></li>
                        <li><a href="video_voting.html">Video Voting</a></li>
                    </ul>
                </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Get
                        Involved<i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('frontend.donate') }}">Donate</a></li>
                        <li><a href="{{ route('frontend.joinUs') }}">Join Us</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('frontend.sponsor') }}">Sponsors</a></li>
                <li><a href="{{ route('frontend.contact.index') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>