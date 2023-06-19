<nav class="navbar navbar-inverse img-responsive" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                    class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="{{ route('frontend.index') }}"><img src="{{ asset('frontend/images/msa-logo/logoTitle2.png') }}" alt="logo"
                    width="250" class="img-responsive"></a>
        </div>
        <div class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav resp">
                <li><a href="{{ route('frontend.index') }}">Home</a></li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<i
                            class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="about_presidentm.html">President's Address</a></li>
                        <li><a href="about_his.html">History</a></li>
                        <li><a href="about_mem.html">Committee Members</a></li>
                        <li><a href="about_pmem.html">Past Members</a></li>
                    </ul>
                </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Prayers<i
                            class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="reg_prayers.html">Daily</a></li>
                        <li><a href="fri_prayers.html">Friday</a></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Events<i
                            class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="upcoming_events.html">Upcoming</a></li>
                        <li><a href="dawahstalls.html">Dawah Stalls</a></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Road To
                        Rememberance<i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="participant_info.html">Participant Info</a></li>
                        <li><a href="video_voting.html">Video Voting</a></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Get
                        Involved<i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="donate.html">Donate</a></li>
                        <li><a href="join_us.html">Join Us</a></li>
                    </ul>
                </li>
                <li><a href="sponsors.html">Sponsors</a></li>
                <li><a href="contact-us.html">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>