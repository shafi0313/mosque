<ul class="metismenu" id="menu">
    <li>
        <a href="{{ route('admin.dashboard') }}">
            <div class="parent-icon">
                <ion-icon name="home-sharp"></ion-icon>
            </div>
            <div class="menu-title">Dashboard</div>
        </a>
    </li>
    <li class="menu-label">Elements</li>
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon">
                <i class="fa-solid fa-user-shield"></i>
            </div>
            <div class="menu-title">Admin</div>
        </a>
        <ul>
            <li class="{{ activeNav('admin.admin-user.*') }}">
                <a href="{{ route('admin.admin-user.index') }}">
                    <ion-icon name="ellipse-outline"></ion-icon>Admin User
                </a>
            </li>
        </ul>
    </li>

    <li>
        <a href="{{ route('admin.slider.index') }}">
            <div class="parent-icon">
                <i class="fa-solid fa-images"></i>
            </div>
            <div class="menu-title">Slider</div>
        </a>
    </li>

    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon">
                <ion-icon name="bag-handle-sharp"></ion-icon>
            </div>
            <div class="menu-title">About</div>
        </a>
        <ul>
            <li>
                <a href="{{ route('admin.president-address.index') }}">
                    <ion-icon name="ellipse-outline"></ion-icon>President Address
                </a>
            </li>
            <li>
                <a href="{{ route('admin.history.index') }}">
                    <ion-icon name="ellipse-outline"></ion-icon>History
                </a>
            </li>
            <li>
                <a href="{{ route('admin.committee-member.index') }}">
                    <ion-icon name="ellipse-outline"></ion-icon>Committee Member
                </a>
            </li>
            <li>
                <a href="{{ route('admin.past-member.index') }}">
                    <ion-icon name="ellipse-outline"></ion-icon>Past Member
                </a>
            </li>
        </ul>
    </li>


    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon">
                <i class="fa-solid fa-calendar"></i>
            </div>
            <div class="menu-title">Events</div>
        </a>
        <ul>
            <li>
                <a href="{{ route('admin.event.index') }}">
                    <ion-icon name="ellipse-outline"></ion-icon>Event
                </a>
            </li>
            <li>
                <a href="{{ route('admin.weekly-events.index') }}">
                    <ion-icon name="ellipse-outline"></ion-icon>Weekly Event
                </a>
            </li>
            <li>
                <a href="{{ route('admin.dawah-stalls.index') }}">
                    <ion-icon name="ellipse-outline"></ion-icon>Dawah Stalls
                </a>
            </li>
        </ul>
    </li>

    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon">
                <i class="fa-solid fa-bookmark"></i>
            </div>
            <div class="menu-title">Road to Remembrance</div>
        </a>
        <ul>
            <li>
                <a href="{{ route('admin.participant-info.index') }}">
                    <ion-icon name="ellipse-outline"></ion-icon>Participant Info
                </a>
            </li>
            <li>
                <a href="{{ route('admin.dawah-stalls.index') }}">
                    <ion-icon name="ellipse-outline"></ion-icon>Video Voting
                </a>
            </li>
        </ul>
    </li>

    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon">
                <ion-icon name="bag-handle-sharp"></ion-icon>
            </div>
            <div class="menu-title">Get Involved</div>
        </a>
        <ul>
            <li>
                <a href="{{ route('admin.donate.index') }}">
                    <ion-icon name="ellipse-outline"></ion-icon>Donate
                </a>
            </li>
            <li>
                <a href="{{ route('admin.join-us.index') }}">
                    <ion-icon name="ellipse-outline"></ion-icon>Join Us
                </a>
            </li>
        </ul>
    </li>

    <li>
        <a href="{{ route('admin.sponsor.index') }}">
            <div class="parent-icon">
                <i class="fa-solid fa-circle-dollar-to-slot"></i>
            </div>
            <div class="menu-title">Sponsor</div>
        </a>
    </li>
    <li>
        <a href="{{ route('admin.contact.index') }}">
            <div class="parent-icon">
                <i class="fa-solid fa-address-card"></i>
            </div>
            <div class="menu-title">Contact</div>
        </a>
    </li>

    {{-- settings --}}
    <li class="menu-label">settings</li>
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon">
                <i class="fa-solid fa-gear"></i>
            </div>
            <div class="menu-title">Settings</div>
        </a>
        <ul>
            <li class="{{ activeNav('admin.setting.*') }}">
                <a href="{{ route('admin.setting.index') }}">
                    <ion-icon name="ellipse-outline"></ion-icon>App Setting
                </a>
            </li>
            <li class="{{ activeNav('admin.backup.*') }}">
                <a href="{{ route('admin.backup.password') }}">
                    <ion-icon name="ellipse-outline"></ion-icon>App DB Backup
                </a>
            </li>
        </ul>
    </li>

    <li>
        <br>
        <br>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-danger btn-sm" style="width: 100%">
                <i class="fa-solid fa-right-from-bracket"></i>
                Logout
            </button>
        </form>
    </li>

    {{-- <li class="menu-label">Others</li> --}}
    {{-- <li>
        <a class="has-arrow" href="javascript:;">
            <div class="parent-icon">
                <ion-icon name="list-sharp"></ion-icon>
            </div>
            <div class="menu-title">Menu Levels</div>
        </a>
        <ul>
            <li> <a class="has-arrow" href="javascript:;">
                    <ion-icon name="ellipse-outline"></ion-icon>Level One
                </a>
                <ul>
                    <li> <a class="has-arrow" href="javascript:;">
                            <ion-icon name="ellipse-outline"></ion-icon>Level Two
                        </a>
                        <ul>
                            <li> <a href="javascript:;">
                                    <ion-icon name="ellipse-outline"></ion-icon>Level Three
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </li> --}}

    {{-- <li>
        <a href="javascript:;" target="_blank">
            <div class="parent-icon">
                <ion-icon name="document-text-sharp"></ion-icon>
            </div>
            <div class="menu-title">Documentation</div>
        </a>
    </li> --}}
</ul>
