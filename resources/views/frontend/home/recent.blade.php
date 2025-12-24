@php
    $projects = App\Models\project::limit(9)->get();
@endphp

<!--Start Recently Project style2 Area-->
<section class="recently-project-style2-area">
    <div class="container">
        <div class="sec-title text-center">
            <p>Projects</p>
            <div class="title">Recently Completed <span>Works</span></div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="project-carousel-v2 owl-carousel owl-theme">
                    @foreach ($projects as $project)
                        <div class="single-project-style2">
                            <div class="img-holder">
                                <img src="{{ asset('upload/project_images/' . $project->project_thumbnail) }}"
                                    alt="Project Image" style="width: 383px; height: 435px;">
                                <div class="read-more">
                                    <a href="{{ route('project', $project->id) }}"><span class="icon-next"></span></a>
                                </div>
                                <div class="title-box">
                                    <span>{{ $project->category }}</span>
                                    <h3>{{ $project->project_name }}</h3>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<!--End Recently Project style2 Area-->
