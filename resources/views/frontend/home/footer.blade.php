@php
    $SiteSettings = App\Models\siteSetting::find(1);
@endphp
<!--Start footer area Style4-->
<footer class="footer-area style4">
    <div class="container">
        <div class="row">
            <!--Start single footer widget-->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="single-footer-widget marbtm50-s4">
                    <div class="our-info-box">
                        <div class="footer-logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('frontend/images/footer/footer-logo.png') }}" alt="Awesome Logo">
                            </a>
                        </div>
                        <div class="text">
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so
                                beguiled and demoralized by the charms of pleasure of the blinded by desiremoment.
                            </p>
                        </div>
                        <div class="follow-us-social-links clearfix">
                            <span>Follw Us On:</span>
                            <ul>
                                <li><a href="javascript:void()">Facebook</a></li>
                                <li><a href="javascript:void()">Twitter</a></li>
                                <li><a href="javascript:void()">Instagram</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="single-footer-widget s4">
                    <div class="title-style2">
                        <h3>Usefull Links</h3>
                    </div>
                    <div class="usefull-links">
                        <ul class="float-left">
                            <li><a href="javascript:void()">Company</a></li>
                            <li><a href="javascript:void()">Services</a></li>
                            <li><a href="javascript:void()">Team</a></li>
                            <li><a href="javascript:void()">Projects</a></li>
                            <li><a href="javascript:void()">Get a Quote</a></li>
                        </ul>
                        <ul class="float-left borders-left">
                            <li><a href="javascript:void()">News</a></li>
                            <li><a href="javascript:void()">Testimonials</a></li>
                            <li><a href="javascript:void()">Partners</a></li>
                            <li><a href="javascript:void()">Privacy Policy</a></li>
                            <li><a href="javascript:void()">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-xl-4 col-lg-3 col-md-12 col-sm-12">
                <div class="single-footer-widget pdtop50-s4">
                    <div class="title-style2">
                        <h3>Subscribe Us</h3>
                    </div>
                    <div class="subscribe-box">
                        <form class="subscribe-form" action="javascript:void()">
                            <input type="email" name="email" placeholder="Your Email">
                            <button class="btn-one" type="submit">Subscribe<span class="flaticon-next"></span></button>
                        </form>
                        <div class="text">
                            <p><span>*</span>Subscribe us and get latest news and updates</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single footer widget-->
        </div>
    </div>
</footer>
<!--End footer area style4-->

<!--Start Footer Contact Info Area-->
<section class="footer-contact-info-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <ul class="footer-contact-info clearfix">
                    <li>
                        <div class="single-footer-contact-info">
                            <div class="inner">
                                <div class="icon">
                                    <span class="icon-global"></span>
                                </div>
                                <div class="text">
                                    <p>{{ $SiteSettings->office_address }}</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="single-footer-contact-info">
                            <div class="inner">
                                <div class="icon">
                                    <span class="icon-support1"></span>
                                </div>
                                <div class="text">
                                    <p>{{ $SiteSettings->phone }}<br> <span>{{ $SiteSettings->available }}</span></p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="single-footer-contact-info">
                            <div class="inner">
                                <div class="icon">
                                    <span class="icon-shipping-and-delivery"></span>
                                </div>
                                <div class="text">
                                    <p>{{ $SiteSettings->email }}<br>{{ $SiteSettings->email2 }}</p>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>
<!--End Footer Contact Info Area-->

<!--Start footer bottom area-->
<section class="footer-bottom-area style3">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="copyright-text text-center">
                    <p><a href="file:///C:/xampp/htdocs/laravel1/MyPersonalProfileObiomaKing/index.html"
                            target="_blank">Obioma King</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End footer bottom area-->
