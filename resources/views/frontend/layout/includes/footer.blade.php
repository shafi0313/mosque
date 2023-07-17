<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">&copy; {{ date('Y') }} All Rights Reserved. Site maintained by
                <a href="{{ setting('footer_credit_link') }}"
                    style="color: white; text-decoration: none;">{{ setting('footer_credit') }}</a>
            </div>
            <div class="col-sm-6 col-xs-8">
                <div class="social">
                    <ul class="social-share">
                        <li><a href="https://www.facebook.com/{{ setting('facebook') }}"><i class="fa fa-facebook"></i></a></li>
                        <li></li>
                        <li><a href="https://www.youtube.com/{{ setting('youtube') }}"><i class="fa fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>