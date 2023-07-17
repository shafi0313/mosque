@extends('frontend.layout.app')
@section('content')
    <section id="contact-info">
        <div class="center">
            <h2>How to Reach Us?</h2>
            <p class="lead">You are welcome to visit us personally or <a
                    href="{{ route('frontend.about.committeeMember') }}">contact us</a> through email
                or social media.</p>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row content-center">
                    {{-- <iframe style="height:500px;width:100%;border:0;" frameborder="0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d251.54750444094736!2d115.81825229126527!3d-31.976999158181556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a32a4f0231ce053%3A0x1c2053b4be3b6496!2sUWA+Mosque%2F+UWA+Musalla!5e0!3m2!1sen!2sau!4v1557124069150!5m2!1sen!2sau"></iframe> --}}

                    <div class="col-md-6">
                        {{-- <ul class="row">
                            <li class="col-sm-6 col-lg-7">
                                <address>
                                    <h5>UWA MSA</h5>
                                    <p>UWA Muslim Students Association,<br>
                                        Box 33, M300,
                                        35 Stirling Highway,
                                        Crawley, WA 6009
                                        Australia</p>
                                    <ul class="social_icons">
                                        <li>Email: <a href="mailto:uwamsa@uwamsa.org">uwamsa@uwamsa.org</a></li>

                                    </ul>

                                </address>
                            </li>

                        </ul>
                        <p style="margin-left: 40px">If you have any suggestions or have any feedback, please contact us via
                            this form.</p> --}}
                        <br>
                        <form action="{{ route('frontend.contact.store') }}" method="POST">
                            @csrf
                            <label for="subject">Subject</label><br>
                            <input type="text" name="subject" placeholder="I'd like to talk" required
                                oninvalid="this.setCustomValidity('Please Enter a Subject')"
                                oninput="setCustomValidity('')" /><br>
                            <label for="first_name">Name</label><br />
                            <input type="text" name="first_name" class="names" placeholder="First Name" required
                                oninvalid="this.setCustomValidity('Please Enter your First Name')"
                                oninput="setCustomValidity('')">
                            <input type="text" name="last_name" class="names" placeholder="Last Name" required
                                oninvalid="this.setCustomValidity('Please Enter your Last Name')"
                                oninput="setCustomValidity('')">
                            <br>
                            <label for="name">Email</label><br />
                            <input type="email" name="email" placeholder="example@uwamsa.org" required
                                oninvalid="this.setCustomValidity('Please Enter your Email')"
                                oninput="setCustomValidity('')"><br />

                            <label for="name">Phone Number</label><br />
                            <input type="tel" name="phone" placeholder="1300" required
                                oninvalid="this.setCustomValidity('Please Enter your Phone Number')"
                                oninput="setCustomValidity('')"><br />

                            <label for="name">How did you hear about us? </label><br />
                            <select name="info" required>
                                <option value="">Select</option>
                                <option value="O-Day">O-Day</option>
                                <option value="Our Social Media">Our Social Media</option>
                                <option value="A Friend Told Me">A Friend Told Me</option>
                                <option value="Attended One of Our Events">Attended One of Our Events</option>
                                <option value="A Committee Member Told Me">A Committee Member Told Me</option>
                                <option value="Dawah Stalls">Dawah Stalls</option>
                                <option value="Other">Other.(You can explain in your message)</option>
                            </select><br />

                            <label for="message">Message</label><br />
                            <textarea name="message" placeholder="In my opinion, I like the MSA very, very much..." required
                                oninvalid="this.setCustomValidity('Please Enter your Message')" oninput="setCustomValidity('')"></textarea>
                            <br /><br />
                            <button type="submit" class="icon">SEND</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @push('scripts')
            {!! JsValidator::formRequest('App\Http\Requests\StoreContactRequest') !!}
        @endpush
    @endsection
