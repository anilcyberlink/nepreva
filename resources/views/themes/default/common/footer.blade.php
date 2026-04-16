<!-- footer-area-start -->
<footer>
    <div class="footer-area black-footer pt-80 black-bg">
        <div class="container">
            <div class="footer-middle-area pb-50">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper mb-30">
                            <div class="footer-logo">
                                <a href="{{ url('/')}}"><img src="{{ asset('themes-assets/img/Neprivabglogo.png') }}" ></a>
                                <!--<h2 class="text-white">LOGO HERE </h2>-->
                            </div>
                            <div class="footer-text">
                                <p>{{ $setting->welcome_title }}</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper ml-60 mb-30">
                            <div class="footer-title">
                                <h3>Quick Links</h3>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    @foreach ($navigations as $row)
                                        <li>
                                            <a href="{{ url('page/' . posttype_url($row->uri)) }}"><i
                                                    class="far fa-angle-right"></i>{{ $row->post_type }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper mb-30">
                            <div class="footer-title">
                                <h3>Recent News</h3>
                            </div>
                            <div class="recent-news">
                                @foreach($blogs as $blog)
                                    <div class="recent-news-text">
                                        <h4><a
                                                href="{{url(geturl($blog['uri'], $blog['page_key']))}}">{{ $blog->post_title}}</a>
                                        </h4>
                                        <div class="news-date">
                                            <span><i
                                                    class="far fa-calendar-alt"></i>{{ $blog->created_at->format('j M Y') }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <div class="footer-title">
                                <h3>Contact </h3>
                            </div>
                            <div class="footer-contact-address">
                                <div class="footer-contact-icon">
                                    <i class="far fa-envelope-open"></i>
                                </div>
                                <div class="footer-contact-text">
                                    <span>{{$setting->email_primary}}</span>
                                </div>
                            </div>
                            <div class="footer-contact-address">
                                <div class="footer-contact-icon">
                                    <i class="far fa-map-marker-alt"></i>
                                </div>
                                <div class="footer-contact-text">
                                    <span>{{$setting->address}}</span>
                                </div>
                            </div>
                            <div class="footer-contact-address">
                                <div class="footer-contact-icon">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="footer-contact-text">
                                    <span>{{ $setting->phone}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-area f-bottom-border pt-20 pb-20">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="copyright">
                            <p> Copyright <i class="far fa-copyright"></i>2026 <a href="{{ url('/') }}">Nepreva</a>
                                {{ $setting->copyright_text }}</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="footer-icon text-center text-md-right">
                            <a href="{{$setting->facebook_link}}"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{$setting->twitter_link}}"><i class="fab fa-twitter"></i></a>
                            <a href="{{$setting->instagram_link}}"><i class="fab fa-instagram"></i></a>
                            <a href="{{$setting->linkedin_link}}"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area-end -->
<!-- JS here -->
<script src="{{ asset('themes-assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ asset('themes-assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('themes-assets/js/popper.min.js') }}"></script>
<script src="{{ asset('themes-assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('themes-assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('themes-assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('themes-assets/js/slick.min.js') }}"></script>
<script src="{{ asset('themes-assets/js/jquery.meanmenu.min.js') }}"></script>
<script src="{{ asset('themes-assets/js/ajax-form.js') }}"></script>
<script src="{{ asset('themes-assets/js/wow.min.js') }}"></script>
<script src="{{ asset('themes-assets/js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('themes-assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('themes-assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('themes-assets/js/plugins.js') }}"></script>
<script src="{{ asset('themes-assets/js/main.js') }}"></script>
<!-- Slider Revolution core JavaScript files -->
<script type="text/javascript" src="{{ asset('themes-assets/rs/js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes-assets/rs/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('themes-assets/rs/js/revolution-active.js') }}"></script>

</body>

</html>
