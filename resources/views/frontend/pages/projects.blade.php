@extends('frontend.frontend_dashboard')
@section('main')
@section('title')
    Projects || Crystalo
@endsection
@section('title1')
    Our Projects
@endsection
@section('title2')
    More than 2300 Projects
@endsection
@section('title3')
    Projects
@endsection
@include('frontend.home.breadcrumb')
<!--Start Main project area-->
<section class="main-project-area">
    <div class="container">
        <ul class="project-filter post-filter has-dynamic-filters-counter">
            <li data-filter=".filter-item" class="active"><span class="filter-text">All Projects</span></li>
            <li data-filter=".mod"><span class="filter-text">Modern</span></li>
            <li data-filter=".contem"><span class="filter-text">Contemporary</span></li>
            <li data-filter=".trad"><span class="filter-text">Traditional</span></li>
            <li data-filter=".ret"><span class="filter-text">Retreat</span></li>
        </ul>
        <div class="row filter-layout masonary-layout">
            @foreach ($projects as $project)
                @php
                    $class = '';
                    if ($project->category == 'Modern') {
                        $class = 'mod';
                    } elseif ($project->category == 'Contemporary') {
                        $class = 'contem';
                    } elseif ($project->category == 'Traditional') {
                        $class = 'trad';
                    } elseif ($project->category == 'Retreat') {
                        $class = 'ret';
                    }
                @endphp
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 filter-item {{ $class }}">
                    <div class="single-project-style4">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="{{ asset('upload/project_images/' . $project->project_thumbnail) }}"
                                    alt="Awesome Image" style="width: 370px; height: 440px;">
                                <div class="overlay-box">
                                    <div class="box">
                                        <div class="link">
                                            <a href="{{ route('project', $project->id) }}"><span
                                                    class="icon-out"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="title">
                                    <span>{{ $project->category }} Design</span>
                                    <h3><a href="{{ route('project', $project->id) }}">{{ $project->project_name }}</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!--End Main project area-->
@endsection
