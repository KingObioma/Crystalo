@php
    $SiteSettings = App\Models\siteSetting::find(1);
@endphp

<!--Start slogan style2 area-->
<section class="slogan-style2-area"
    style="background-image:url({{ asset('frontend/images/parallax-background/slogan-bg.jpg') }});">
    <div class="icon-holder">
        <span class="flaticon-car"></span>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content">
                    <div class="title">
                        <h1>Creating lasting impressions through<br> <span>interior design.</span></h1>
                    </div>
                    <div class="button">
                        <a class="btn-one call-us" href="javascript:void()"><i
                                class="icon-music"></i>{{ $SiteSettings->phone }}</a>
                        <a class="btn-one" href="javascript:void()">Maintenance Guide<span
                                class="flaticon-next"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End slogan style2 area-->

<!--Start Why choose Area-->
<section class="why-choose-area"
    style="background-image:url({{ asset('frontend/images/parallax-background/why-choose-bg.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="why-choose-title float-left">
                    <div class="sec-title">
                        <div class="icon"><img src="{{ asset('frontend/images/icon/home-1.png') }}"
                                alt="Awesome Logo"></div>
                        <div class="title">Why People <br>Choose <span>Crystalo</span></div>
                    </div>
                    <ul>
                        <li>Well Considered Design</li>
                        <li>We Create For You</li>
                        <li>Leave The Details To Us</li>
                    </ul>
                    <div class="button">
                        <a class="btn-one" href="javascript:void()">Make an Appointment<span
                                class="flaticon-next"></span></a>
                    </div>
                </div>
                <div class="why-choose-content float-right">
                    <!--Start Single Box-->
                    <div class="single-box redbg">
                        <div class="icon-holder">
                            <span class="icon-scheme"></span>
                        </div>
                        <div class="text-holder">
                            <h3>Experienced Team</h3>
                            <p>Righteous indignations working beguileds all demoralized that blinded our works.</p>
                        </div>
                    </div>
                    <!--End Single Box-->
                    <!--Start Single Box-->
                    <div class="single-box whitebg">
                        <div class="icon-holder">
                            <span class="icon-guarantee-certificate1"></span>
                        </div>
                        <div class="text-holder">
                            <h3>Guaranteed Works</h3>
                            <p>Have to be repudiated annoyances accepted The wise man therefore always holds.</p>
                        </div>
                    </div>
                    <!--End Single Box-->
                    <!--Start Single Box-->
                    <div class="single-box whitebg">
                        <div class="icon-holder">
                            <span class="icon-hr1"></span>
                        </div>
                        <div class="text-holder">
                            <h3>Free Consultation</h3>
                            <p>Rejects pleasures to secure other pleasures, endures pains to avoid worse.</p>
                        </div>
                    </div>
                    <!--End Single Box-->
                    <!--Start Single Box-->
                    <div class="single-box blackbg">
                        <div class="icon-holder">
                            <span class="icon-wallet1"></span>
                        </div>
                        <div class="text-holder">
                            <h3>Reasonable price</h3>
                            <p>Our power of choice is untrammelled & when nothing prevents our being able.</p>
                        </div>
                    </div>
                    <!--End Single Box-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Why choose Area-->
