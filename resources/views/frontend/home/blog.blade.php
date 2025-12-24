@php
    $blogs = App\Models\blog::limit(3)->get();
@endphp

<!--Start latest blog area style2-->
<section class="latest-blog-area style2">
    <div class="container inner-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="sec-title float-left">
                    <p>News & Updates</p>
                    <div class="title">Latest From <span>Blog</span></div>
                </div>
                <div class="more-blog-button float-right">
                    <a class="btn-two" href="{{ route('blogs') }}">More News<span class="flaticon-next"></span></a>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-blog-post wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="img-holder">
                            <img src="{{ asset('upload/blog_images/' . $blog->blog_thumbnail) }}"
                                style="width: 373px; height: 242px;" alt="Blog Image">
                            <div class="overlay-style-two"></div>
                            <div class="overlay">
                                <div class="box">
                                    <div class="link-icon">
                                        <a href="javascript:void()"><span class="flaticon-zoom"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php
                            $admin = App\Models\user::where('id', $blog->admin_id)->first();
                            $day = \Carbon\Carbon::parse($blog->created_at)->format('d');
                            $rest = \Carbon\Carbon::parse($blog->created_at)->format('M Y');
                        @endphp
                        <div class="text-holder">
                            <div class="post-date">
                                <h3>{{ $day }}<span>{{ $rest }}</span></h3>
                            </div>
                            <div class="meta-box">
                                <ul class="meta-info">
                                    <li>By <a href="javascript:void()">{{ $admin->name }}</a></li>
                                    <li>In <a href="javascript:void()">{{ $blog->category }}</a></li>
                                </ul>
                            </div>
                            <h3 class="blog-title"><a href="{{ route('blog', $blog->id) }}">{{ $blog->title }}</a></h3>
                            <div class="text">
                                <p>{{ Str::limit($blog->blog_text, 80) }}</p>
                                <a class="btn-two" href="{{ route('blog', $blog->id) }}">Read More<span
                                        class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!--End latest blog area style2-->
