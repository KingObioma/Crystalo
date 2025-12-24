@extends('frontend.frontend_dashboard')
@section('main')
@section('title')
    Blogs || Crystalo
@endsection
@section('title1')
    Our Blogs
@endsection
@section('title2')
    The latest scoop
@endsection
@section('title3')
    Blog
@endsection
@include('frontend.home.breadcrumb')
<!--Start blog area-->
<section id="blog-area" class="blog-default-area">
    <div class="container">
        <div class="row">

            @foreach ($blogs as $blog)
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-blog-colum-style1">
                        <!--Start single blog post-->
                        <div class="single-blog-post style3 wow fadeInLeft" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            <div class="img-holder">
                                <img src="{{ asset('upload/blog_images/' . $blog->blog_thumbnail) }}"
                                    style="width: 373px; height: 242px;" alt="Blog Image">
                                <div class="overlay-style-two"></div>
                                @php
                                    $admin = App\Models\user::where('id', $blog->admin_id)->first();
                                    $day = \Carbon\Carbon::parse($blog->created_at)->format('d');
                                    $month = \Carbon\Carbon::parse($blog->created_at)->format('M');
                                @endphp
                                <div class="overlay">
                                    <div class="box">
                                        <div class="post-date">
                                            <h3>{{ $month }}<br><span>{{ $day }}</span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3 class="blog-title"><a href="{{ route('blog', $blog->id) }}">{{ $blog->title }}</a>
                                </h3>
                                <div class="meta-box">
                                    <ul class="meta-info">
                                        <li>By <a href="javascript:void()">{{ $admin->name }}</a></li>
                                        <li>In <a href="javascript:void()">{{ $blog->category }}</a></li>
                                    </ul>
                                </div>
                                <div class="text">
                                    <p>{{ Str::limit($blog->blog_text, 70) }}
                                    </p>
                                    <a class="btn-two" href="{{ route('blog', $blog->id) }}">Read More<span
                                            class="flaticon-next"></span></a>
                                </div>
                            </div>
                        </div>

                        <!--End single blog post-->
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</section>
<!--End blog area-->
@endsection
