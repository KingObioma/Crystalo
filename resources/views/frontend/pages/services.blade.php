@extends('frontend.frontend_dashboard')
@section('main')
@section('title')
    Services || Crystalo
@endsection
@section('title1')
    Our Services
@endsection
@section('title2')
    Bringing Great Design
@endsection
@section('title3')
    Services
@endsection
@include('frontend.home.breadcrumb')
<!--Start Single Service Area-->
<section class="single-service-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12">
                <div class="single-service-sidebar">
                    <!--Start Single sidebar-->
                    <div class="single-sidebar">
                        <ul class="service-pages">
                            <li>
                                <a href="javascript:void()">
                                    <div class="title">
                                        <h3 class="static">Concept Designs</h3>
                                        <div class="overlay-title">
                                            <h3>Concept Designs</h3>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void()">
                                    <div class="title">
                                        <h3 class="static">Project Designs</h3>
                                        <div class="overlay-title">
                                            <h3>Project Designs</h3>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void()">
                                    <div class="title">
                                        <h3 class="static">Make Overs</h3>
                                        <div class="overlay-title">
                                            <h3>Make Overs</h3>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void()">
                                    <div class="title">
                                        <h3 class="static">Consulting</h3>
                                        <div class="overlay-title">
                                            <h3>Consulting</h3>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void()">
                                    <div class="title">
                                        <h3 class="static">Glass & Wrought</h3>
                                        <div class="overlay-title">
                                            <h3>Glass & Wrought</h3>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void()">
                                    <div class="title">
                                        <h3 class="static">Space Planning</h3>
                                        <div class="overlay-title">
                                            <h3>Space Planning</h3>
                                        </div>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!--End Single sidebar-->
                    <div class="sidebar-contact-box text-center">
                        <div class="inner-content">
                            <div class="icon-holder">
                                <span class="icon-support1"></span>
                            </div>
                            <h3>Consult with expert &<br> Start today</h3>
                            <div class="bottom-box">
                                <h2>{{ $SiteSettings->phone }}</h2>
                                <span>Email: {{ $SiteSettings->email }}</span>
                            </div>
                            <div class="button">
                                <a class="btn-one wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms"
                                    href="javascript:void()">Make Appointment
                                    <span class="flaticon-next"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
                <div class="single-service-top">
                    <div class="single-service-image-box">
                        <img src="{{ asset('frontend/images/services/service-single/single-service-1.jpg') }}"
                            alt="Awesome Image">
                    </div>
                    <div class="text">
                        <h2>Concept Designs</h2>
                        <div class="inner">
                            <p>Welcomed and every pain avoided. But in certain circumstances and owing too the claims
                                off duty bligations of business it will frequently occur that pleasures have to be
                                repudiated & annoyances that accepted. That is
                                wise man therefore always holds indignation and dislike men who are so beguiled.</p>
                            <p>Certain circumstances and owing to the claims of duty bligations of business it will
                                frequently occurs all that pleasures have to be repudiated & annoyances that accepted.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="advantages-content">
                    <div class="row">
                        <!--Start Single Advantages Box-->
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="single-advantages-box">
                                <div class="inner">
                                    <div class="static-content">
                                        <div class="icon-holder">
                                            <span class="icon-success"></span>
                                        </div>
                                        <div class="title">
                                            <h3>Interior<br> Expertise</h3>
                                        </div>
                                    </div>
                                    <div class="overlay-text">
                                        <div class="box">
                                            <div class="inner-text">
                                                <p>Have to accepted That is wise man of therefore always we indignation.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Advantages Box-->
                        <!--Start Single Advantages Box-->
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="single-advantages-box">
                                <div class="inner">
                                    <div class="static-content">
                                        <div class="icon-holder">
                                            <span class="icon-guarantee-certificate"></span>
                                        </div>
                                        <div class="title">
                                            <h3>Guranteed<br> Work</h3>
                                        </div>
                                    </div>
                                    <div class="overlay-text">
                                        <div class="box">
                                            <div class="inner-text">
                                                <p>Have to accepted That is wise man of therefore always we indignation.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Advantages Box-->
                        <!--Start Single Advantages Box-->
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="single-advantages-box">
                                <div class="inner">
                                    <div class="static-content">
                                        <div class="icon-holder">
                                            <span class="icon-hr"></span>
                                        </div>
                                        <div class="title">
                                            <h3>Free<br> Consultation</h3>
                                        </div>
                                    </div>
                                    <div class="overlay-text">
                                        <div class="box">
                                            <div class="inner-text">
                                                <p>Have to accepted That is wise man of therefore always we indignation.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Advantages Box-->
                        <!--Start Single Advantages Box-->
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="single-advantages-box">
                                <div class="inner">
                                    <div class="static-content">
                                        <div class="icon-holder">
                                            <span class="icon-wallet"></span>
                                        </div>
                                        <div class="title">
                                            <h3>Reasonable<br> Price</h3>
                                        </div>
                                    </div>
                                    <div class="overlay-text">
                                        <div class="box">
                                            <div class="inner-text">
                                                <p>Have to accepted That is wise man of therefore always we indignation.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Advantages Box-->
                    </div>
                </div>

                <div class="how-work-box">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="image-box">
                                <img src="{{ asset('frontend/images/services/service-single/how-work.jpg') }}"
                                    alt="Awesome Image">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="how-works-content">
                                <h2>How We Work</h2>
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-tick"></span>
                                        </div>
                                        <div class="text">
                                            <span>Stage 1</span>
                                            <h3>Brief & Concept</h3>
                                            <p>Production technque irrigation managment recommended nitrogen inputs.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-tick"></span>
                                        </div>
                                        <div class="text">
                                            <span>Stage 2</span>
                                            <h3>Detailed Design</h3>
                                            <p>Improving agricultural productivity in terms of quantity and quality.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-tick"></span>
                                        </div>
                                        <div class="text">
                                            <span>Stage 3</span>
                                            <h3>Installation</h3>
                                            <p>Minimizing the effects pests weeds, insects, pathogens, nematodes on
                                                animal</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!--End Single Service Area-->
@endsection
