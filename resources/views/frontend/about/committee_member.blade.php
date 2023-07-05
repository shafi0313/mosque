@extends('frontend.layout.app')
@section('content')
    <section id="feature">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>{{ config('app.name') }} Committee 2023</h2>
                <br>
                <p class="lead">بِسۡمِ ٱللهِ ٱلرَّحۡمَـٰنِ ٱلرَّحِيمِ </p>
                <h3> The affairs of the MSA are managed and controlled by the Committee.
                    Committee members are elected each year in the Annual General Meeting (AGM) based on nominations for
                    each position by the MSA regular members. </h3>
                <p>&nbsp;</p>
                <h3>The following positions exist in the MSA Committee: </h3>
                <h3><strong>Officers</strong>: The President, the Vice-President, the Treasurer, the Secretary, the
                    Executive Officer, the Jumuah Co-ordinator, the Events Co-ordinators, Marketing and Media Officers, the
                    Musallah Managers and General Committee Members.</h3>
            </div>
            <div> </div>
        </div>
    </section>

    <!-- Menu Start -->
    <div class="menu">
        <div class="container">
            <div class="section-header text-center">
                <h2>Our Members</h2>
            </div>
            <div class="menu-tab">
                <ul class="nav nav-pills justify-content-center" id="tabs">
                    @foreach ($committees->groupBy('type') as $committeeGroupBy)
                        <li class="nav-item" style="padding:3px;">
                            <a class="nav-link" data-toggle="pill"
                                href="#{{ $committeeGroupBy->first()->type }}">{{ str_replace('_', ' ', $committeeGroupBy->first()->type) }}</a>
                        </li>
                    @endforeach
                    {{-- <li class="nav-item" style="padding:3px;">
                        <a class="nav-link" data-toggle="pill" href="#execs">Executives</a>
                    </li>
                    <li class="nav-item" style="padding:3px;">
                        <a class="nav-link" data-toggle="pill" href="#dawah">Dawah Team</a>
                    </li>
                    <li class="nav-item" style="padding:3px;">
                        <a class="nav-link" data-toggle="pill" href="#social">Social Team</a>
                    </li>
                    <li class="nav-item" style="padding:3px;">
                        <a class="nav-link" data-toggle="pill" href="#sports">Sports Team</a>
                    </li>
                    <li class="nav-item" style="padding:3px;">
                        <a class="nav-link" data-toggle="pill" href="#publish">MSA Publishing</a>
                    </li> --}}
                </ul>
                <div class="tab-content">
                    @foreach ($committees->groupBy('type') as $committeeGroupBy)
                        <div id="{{ $committeeGroupBy->first()->type }}" class="container tab-pane {{ $loop->first?'active':'' }}">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    @foreach ($committees->where('type',$committeeGroupBy->first()->type) as $committee)
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="{{ imagePath('committee', $committee->image) }}">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>{{ $committee->name }}</span> <br /></h3>
                                            <p>{{ $committee->designation }}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="col-lg-5 d-none d-lg-block">
                                    <!--<img src="images/msa-committee/executives1.png" alt="Executive Team Photo">-->

                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div id="execs" class="container tab-pane active">
                        <div class="row">
                            <div class="col-lg-7 col-md-12">
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="images/msa-committee/Nazim.jpg">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Dr Nazim Khan</span> <br /></h3>
                                        <p>Executive Officer</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="images/msa-committee/Mahirul.jpg">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Mahirul Chowdhury</span> <br /></h3>
                                        <p>President</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="images/msa-committee/Fareeha.jpg">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Fareeha Khan</span> <br /></h3>
                                        <p>Vice-President</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="images/msa-committee/alfiya.jpg">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Alfiya Dewan</span> <br /></h3>
                                        <p>Secretary</p>
                                    </div>

                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="images/msa-committee/Muslim.jpg">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Muslim Giani</span> <br /></h3>
                                        <p>Treasurer</p>
                                    </div>

                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="images/msa-committee/Zulqarnain.jpg">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Dr Syed Zulqarnain Gilani</span> <br /></h3>
                                        <p>Jumuah Co-ordinator &amp; Religious Events Coordinator</p>
                                    </div>
                                </div>

                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="images/msa-committee/dabeer.jpg">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Dabeer Shikrani</span><br /></h3>
                                        <p>Male Musalla Manager</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="images/msa-committee/Ayesha.jpg">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Ayesha Khan</span> <br /></h3>
                                        <p>Female Musalla Manager</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 d-none d-lg-block">
                                <!--<img src="images/msa-committee/executives1.png" alt="Executive Team Photo">-->

                            </div>
                        </div>
                    </div>
                    <div id="dawah" class="container tab-pane fade">
                        <div class="row">
                            <div class="col-lg-7 col-md-12">
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="images/msa-committee/MuminahGilani.jpg">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Muminah Gilani</span> <br /></h3>
                                        <p>Team Leader</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="images/msa-committee/Ayesha.jpg">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Ayesha Khan</span> <br /></h3>
                                        <p>Team Member, Events Manager</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="images/msa-committee/Fareeha.jpg">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Fareeha Khan</span> <br /></h3>
                                        <p>Team Member, Volounteer Manager</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="images/msa-committee/Tawqeer.jpg">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Tawqeer Sayied</span> <br /></h3>
                                        <p>Team Member, Marketing Manager</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="images/msa-committee/Amro.jpg">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Amro Shalan</span> <br /></h3>
                                        <p>Team Member, Fresher Representative</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 d-none d-lg-block">
                                <!--<img src="images/msa-committee/" alt="Image">-->
                            </div>
                        </div>
                    </div>
                    <div id="social" class="container tab-pane fade">
                        <div class="row">
                            <div class="col-lg-7 col-md-12">
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="images/msa-committee/Narmeen.html">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Narmeen Kashif</span> <br /></h3>
                                        <p>Team Leader</p>
                                    </div>

                                </div>

                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="images/msa-committee/siti%20q.html">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Siti Qistina</span> <br /></h3>
                                        <p>Team Member, Events Manager</p>
                                    </div>

                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="images/msa-committee/Mahirul.jpg">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Mahirul Chowdhury</span> <br /></h3>
                                        <p>Team Member, Volounteer Manager</p>
                                    </div>

                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="images/msa-committee/Haady.html">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Haady Hasri</span> <br /></h3>
                                        <p>Team Member, Marketing Manager</p>
                                    </div>

                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="images/msa-committee/Fatima.html">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Fatema Waseem</span> <br /></h3>
                                        <p>Team Member, Fresher Representative</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-5 d-none d-lg-block">
                                <!--<img src="images/msa-committee/" alt="TeamPhoto">-->
                            </div>
                        </div>
                    </div>
                    <div id="sports" class="container tab-pane fade">
                        <div class="row">
                            <div class="col-lg-7 col-md-12">
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="images/msa-committee/SyedYousaf.html">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Syed Yousaf</span> <br /></h3>
                                        <p>Team Leader</p>
                                    </div>

                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="images/msa-committee/Maisa.html">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Maisa Karim</span> <br /></h3>
                                        <p>Team Member, Badminton Coordinator, Marketing Manager</p>
                                    </div>


                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="images/msa-committee/abdulla.html">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Abdulla Ellagta</span> <br /></h3>
                                        <p>Team Member, Soccer Coordinator</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="images/msa-committee/Princess.html">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Princess Watchon</span> <br /></h3>
                                        <p>Team Member, Volleyball Coordinator</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="images/msa-committee/Muslim.jpg">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Muslim Gilani</span> <br /></h3>
                                        <p>Team Member, Cricket Coordinator</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="images/msa-committee/Shaf.jpg">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Shaf Kashif</span> <br /></h3>
                                        <p>Team Member, Cricket Coordinator</p>
                                    </div>
                                </div>


                                <div class="col-lg-5 d-none d-lg-block">
                                    <!--<img src="images/msa-committee/" alt="Team Photo"/>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="publish" class="container tab-pane fade">
                        <div class="row">
                            <div class="col-lg-7 col-md-12">
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="images/msa-committee/Sabina.html">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Sabina Kazic</span> <br /></h3>
                                        <p>Team Member</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="images/msa-committee/alfiya.jpg">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Alfiya Dewan</span> <br /></h3>
                                        <p>Team Member</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="images/msa-committee/Nuzhat.jpg">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Nuzhat Rahman</span> <br /></h3>
                                        <p>Team Member</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- </div>
                          </div>
                      </div>-->
    <!-- Menu End -->





    <div class="col-md-4 col-sm-6 col-md-offset-0"> </div>

    <div class="col-md-4 col-sm-6 col-md-offset-0"> </div>

    @push('scripts')
    @endpush
@endsection
