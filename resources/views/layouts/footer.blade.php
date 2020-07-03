<!-- footer start -->
<footer class="footer-area pl-100 pr-100 mt-100">
    <div class="footer-area box-90 pt-100 pb-60" data-background="img/bg/footer.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-6 ">
                    <div class="footer-widget mb-40 pr-70">
                        <div class="footer-logo">
                            <a href="index.html"><img src="{{ URL::to('\img\logo_bg_free.PNG') }}" alt="" style="width: 150px;"></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore mag na
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat.
                        </p>
                        <div class="footer-time d-flex mt-30">
                            <div class="time-icon">
                                <img src="img/icon/time.png" alt="">
                            </div>
                            <div class="time-text">
                                <span>Got Questions ? Call us 24/7!</span>
                                <h2>(509) 3739 68 10</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3">
                    <div class="footer-widget mb-40">
                        <h3>Social Media</h3>
                        <ul class="footer-link">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Behance</a></li>
                            <li><a href="#"> Dribbble</a></li>
                            <li><a href="#">Linkedin</a></li>
                            <li><a href="#">Youtube</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-2 col-md-3 d-md-none d-xl-block">
                    <div class="footer-widget pl-50 mb-40">
                        <h3>Location</h3>
                        <ul class="footer-link">
                            <li><a href="#">Port-au-prince</a></li>
                            <li><a href="#">Jacmel</a></li>
                            <li><a href="#">New York</a></li>
                            <li><a href="#">Chicago</a></li>
                            {{--<li><a href="#">Dhaka</a></li>--}}
                            {{--<li><a href="#">Chittagong</a></li>--}}
                            <li><a href="#">China</a></li>
                            {{--<li><a href="#">Japan</a></li>--}}
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3">
                    <div class="footer-widget mb-40">
                        <h3>About</h3>
                        <ul class="footer-link">
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#"> Privacy Policy</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Wholesale</a></li>
                            <li><a href="#">Direction</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area box-105">
        <div class="container-fluid">
            <div class="pt-30 pb-30">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="copyright text-center">
                            <p>Copyright © {{ \Carbon\Carbon::today()->year }} <a href="{{ route('home') }}">Marabou store</a>. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->

<!-- Fullscreen search -->
<div class="search-wrap">
    <div class="search-inner">
        <i class="fas fa-times search-close" id="search-close"></i>
        <div class="search-cell">
            <form method="get">
                <div class="search-field-holder">
                    <input type="search" class="main-search-input" placeholder="Search Entire Store...">
                </div>
            </form>
        </div>
    </div>
</div> <!-- end fullscreen search -->

</body>
</html>
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ URL::to('\js\vendor\jquery-1.12.4.min.js') }}"></script>
<script src="{{ URL::to('\js\popper.min.js') }}"></script>
<script src="{{ URL::to('\js\bootstrap.min.js') }}"></script>
<script src="{{ URL::to('\js\owl.carousel.min.js') }}"></script>
<script src="{{ URL::to('\js\isotope.pkgd.min.js') }}"></script>
<script src="{{ URL::to('\js\one-page-nav-min.js') }}"></script>
<script src="{{ URL::to('\js\slick.min.js') }}"></script>
<script src="{{ URL::to('\js\jquery.meanmenu.min.js') }}"></script>
<script src="{{ URL::to('\js\ajax-form.js') }}"></script>
<script src="{{ URL::to('\js\wow.min.js') }}"></script>
<script src="{{ URL::to('\js\jquery.scrollUp.min.js') }}"></script>
<script src="{{ URL::to('\js\jquery.final-countdown.min.js') }}"></script>
<script src="{{ URL::to('\js\imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ URL::to('\js\jquery.magnific-popup.min.js') }}"></script>
<script src="{{ URL::to('\js\plugins.js') }}"></script>
<script src="{{ URL::to('\js\main.js') }}"></script>