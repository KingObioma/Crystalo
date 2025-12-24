@extends('frontend.frontend_dashboard')
@section('main')
@section('title')
    Project || Crystalo
@endsection
@section('title1')
    Project description
@endsection
@section('title2')
    That Perfectly Fits Your Life
@endsection
@section('title3')
    project
@endsection
@include('frontend.home.breadcrumb')

<!--Start Project Description area-->
<section class="project-description-area">
    <div class="pattern-bg wow slideInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
        <img src="{{ asset('frontend/images/pattern/project-description-pattern.jpg') }}" alt="Pattern Bg">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="project-description-image-box">
                    <img src="{{ asset('upload/project_images/' . $project->project_thumbnail) }}"
                        style="width: 795px; height: 540px;" alt="Awesome Image">
                </div>
            </div>
            <div class="col-xl-7">
                <div class="project-description-content">
                    <div class="sec-title">
                        <p>Description</p>
                        <div class="title">{{ $project->project_name }}</div>
                    </div>
                    <div class="inner-content">
                        <p>{{ $project->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Project Description area-->

<!--Start Project Info Area-->
<section class="project-info-area">
    <div class="pattern-bg wow slideInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
        <img src="{{ asset('frontend/images/pattern/project-info-patten.jpg') }}" alt="Pattern Bg">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="project-info-content">
                    <div class="project-info-title">
                        <h3>Project Info</h3>
                    </div>
                    <div class="inner-content">
                        <ul>
                            <li>
                                <div class="icon">
                                    <span class="icon-maps-and-location1"></span>
                                </div>
                                <div class="title">
                                    <h4>Location</h4>
                                    <span>{{ $project->location }}</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-ruler"></span>
                                </div>
                                <div class="title">
                                    <h4>Square Meters</h4>
                                    <span>{{ $project->square_meters }}<sup>2</sup></span>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-calendar"></span>
                                </div>
                                <div class="title">
                                    <h4>Project Year</h4>
                                    <span>{{ $project->project_year }}</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-price"></span>
                                </div>
                                <div class="title">
                                    <h4>Price Value</h4>
                                    <span>${{ $project->price_value }}</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-group"></span>
                                </div>
                                <div class="title">
                                    <h4>Project Head</h4>
                                    <span>{{ $project->project_head }}</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="project-info-image-box">
                    <img src="{{ asset('upload/project_images/' . $project->image_1) }}"
                        style="width: 895px; height: 540px;" alt="Awesome Image">
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Project Info Area-->

<!--Start Similar projects Area-->
<section class="similar-projects-area">
    <div class="container-fluid similar-projects-content">
        <div class="similar-project-title text-center">
            <h2>Similar projects</h2>
        </div>
        <div class="row">
            @foreach ($projects as $item)
                <!--Start Single Similar Project-->
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="single-similar-project">
                        <div class="img-holder">
                            <img src="{{ asset('upload/project_images/' . $item->project_thumbnail) }}"
                                style="width: 245px; height: 199px;" alt="Awesome Image">
                        </div>
                        <div class="title-holder">
                            <span>{{ $item->category }}</span>
                            <h3><a href="{{ route('project', $item->id) }}">{{ $item->project_head }}</a></h3>
                        </div>
                    </div>
                </div>
                <!--End Single Similar Project-->
            @endforeach
        </div>
    </div>
</section>
<!--End Similar projects Area-->
@endsection
