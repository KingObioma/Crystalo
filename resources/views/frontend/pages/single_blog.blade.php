@extends('frontend.frontend_dashboard')
@section('main')
@section('title')
    Blog || Crystalo
@endsection
<!--Start Single Post Info Area-->
<section class="single-post-info-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="single-post-info-content text-center">
                    <div class="meta-box">
                        <ul class="meta-info">
                            <li>By <a href="javascript:void()">{{ $admin->name }}</a></li>
                            <li>On <a href="javascript:void()">{{ $date }}</a></li>
                            <li>In <a href="javascript:void()">{{ $blog->category }}</a></li>
                        </ul>
                    </div>
                    <h1 class="blog-title">{{ $blog->title }}</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Single Post Info Area-->

<!--Start blog single area-->
<section id="blog-area" class="blog-single-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
                <div class="blog-post">
                    <div class="single-blog-post">
                        <div class="main-image-box">
                            <img src="{{ asset('upload/blog_images/' . $blog->blog_thumbnail) }}"
                                style="width: 835px; height: 470px;" alt="Awesome Image">
                        </div>
                        <div class="top-text-box">
                            <p>{{ $blog->paragraph_1 }}</p>
                        </div>
                        <div class="author-quote-box">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="text">
                                        <p>{{ $blog->quote }}</p>
                                        <div class="name">
                                            <h3>{{ $admin->name }}, <span>{{ !empty($admin->position) ?$admin->position : 'Interior Designer'}}</span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="quote-bottom-text">
                            <p>{{ $blog->paragraph_2 }}</p>
                        </div>
                        <div class="blog-single-image-with-text-box">
                            <ul class="image-box clearfix">
                                <li>
                                    <img src="{{ asset('upload/blog_images/' . $blog->image_1) }}"
                                        style="width: 400px; height: 470px;" alt="Awesome Image">
                                </li>
                                <li>
                                    <img src="{{ asset('upload/blog_images/' . $blog->image_2) }}"
                                        style="width: 400px; height: 470px;" alt="Awesome Image">
                                </li>
                            </ul>
                        </div>

                        <div class="blog-single-bottom-content-box">
                            <p>{{ $blog->paragraph_3 }}</p>
                        </div>

                        <div class="tag-with-social-links-box">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="inner-content clearfix">
                                        <div class="tag-box pull-left">
                                            <p>Tags:</p>
                                            <ul>
                                                @foreach ($tags as $tag)
                                                    <li><a
                                                            href="javascript:void()">{{ trim($tag) }}{{ !$loop->last ? ',' : '' }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="social-links-box pull-right">
                                            <p><i class="fa fa-share-alt-square" aria-hidden="true"></i>Share this post:
                                            </p>
                                            <ul class="sociallinks fix">
                                                <li><a href="{{ $SiteSettings->facebook }}" target="_blank"><i
                                                            class="fa fa-facebook" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="{{ $SiteSettings->twitter }}" target="_blank"><i
                                                            class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="{{ $SiteSettings->skype }}" target="_blank"><i
                                                            class="fa fa-skype" aria-hidden="true"></i></a></li>
                                                <li><a href="{{ $SiteSettings->linkedin }}" target="_blank"><i
                                                            class="fa fa-linkedin" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if ($author_comment)
                    <div class="author-box-holder">
                        <div class="inner-box">
                            <div class="img-box">
                                <img src="{{ !empty($author->photo) ? asset('upload/user_images/' . $author->photo) : asset('upload/no_image.jpg') }}" alt="Awesome Image">
                            </div>
                            <div class="text">
                                <h3>{{$author->name}}, <span>Author</span></h3>
                                <p>{{$author_comment->comment_text}}</p>
                                <div class="author-social-links">
                                    <p>Follow On:</p>
                                    <ul class="fix">
                                        <li><a href="{{ $SiteSettings->facebook }}">Facebook</a></li>
                                        <li><a href="{{ $SiteSettings->twitter }}">Twitter</a></li>
                                        <li><a href="{{ $SiteSettings->skype }}">Skype</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if ($comments->isNotEmpty())
                    <div class="inner-comment-box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="single-blog-title-box">
                                    <h2>Read Comments</h2>
                                </div>
                                @foreach ($comments as $comment)
                                @php
                                    $userData = App\Models\User::where('id', $comment->user_id)->first();
                                    $date = \Carbon\Carbon::parse($comment->created_at)->format('M d, Y');
                                @endphp
                                <div class="single-comment-outer-box wow fadeInUp" data-wow-delay="0ms"
                                    data-wow-duration="1500ms">
                                    <div class="single-comment-box">
                                        <div class="img-box">
                                            <img src="{{ !empty($userData->photo) ? asset('upload/user_images/' . $userData->photo) : asset('upload/no_image.jpg') }}" alt="Awesome Image">
                                        </div>
                                        <div class="text-box">
                                            <div class="top">
                                                <div class="name">
                                                    <h3> {{$userData->name}} </h3>
                                                    <span>{{$date}}</span>
                                                </div>
                                                <div class="reply-button">
                                                    <a href="javascript:void()"><span
                                                            class="icon-reload"></span>Reply</a>
                                                </div>
                                            </div>
                                            <div class="text">
                                                <p>{{$comment->comment_text}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               @endforeach
                            </div>
                        </div>
                    </div>
                               @else


                               <div class="single-comment-outer-box wow fadeInUp" data-wow-delay="0ms"
                               data-wow-duration="1500ms">
                               <div class="single-comment-box">

                                   <div class="text-box">

                                       <div class="text">
                                           <p>No Comments yet...................</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                @endif

                     {{-- @if ($comments->isNotEmpty())
                    <div class="inner-comment-box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="single-blog-title-box">
                                    <h2>Read Comments</h2>
                                </div>
                                @foreach ($comments as $comment)
                                    @php
                                        $date = \Carbon\Carbon::parse($comment->created_at)->format('M d, Y');
                                    @endphp
                                    <div class="single-comment-outer-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="single-comment-box">
                                            <div class="img-box">
                                                <img src="{{ !empty($comment->user->photo) ? asset('upload/user_images/' . $comment->user->photo) : asset('upload/no_image.jpg') }}" alt="User Image">
                                            </div>
                                            <div class="text-box">
                                                <div class="top">
                                                    <div class="name">
                                                        <h3>{{ $comment->user->name }}</h3>
                                                        <span>{{ $date }}</span>
                                                    </div>
                                                    <div class="reply-button">
                                                        <a href="javascript:void(0)"><span class="icon-reload"></span>Reply</a>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>{{ $comment->comment_text }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="single-comment-outer-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="single-comment-box">
                            <div class="text-box">
                                <div class="text">
                                    <p>No Comments</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif --}}

                    <!--Start add comment box-->
                    @auth
                    <div class="add-comment-box">
                        <div class="single-blog-title-box">
                            <h2>Post a Comment</h2>
                        </div>
                        <form class="add-comment-king" method="post" action="{{ route('store.comment') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea name="comment_text" placeholder="Your Comments" required></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="btn-one" type="submit" name="submit">Post a Comment<span
                                                class="flaticon-next"></span></button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                    @endauth
                    <!--End add comment box-->
                </div>
            </div>
            <!--Start sidebar Wrapper-->
            <div class="col-xl-3 col-lg-4 col-md-7 col-sm-12">
                <div class="sidebar-wrapper">
                    <div class="sidebar-search-box">
                        <form class="search-form" action="javascript:void()">
                            <input placeholder="Your Keyword..." type="text">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <!--Start single sidebar-->
                    <div class="single-sidebar categories-box">
                        <div class="sidebar-title">
                            <div class="title">Categories</div>
                        </div>
                        <ul class="categories clearfix">
                            @foreach ($tags as $tag)
                                <li><a href="javascript:void()">{{ trim($tag) }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <div class="sidebar-title">
                            <div class="title">Recent Post</div>
                        </div>
                        <ul class="recent-post">
                            @foreach ($blogs as $single)
                                @php
                                    $date = \Carbon\Carbon::parse($single->created_at)->format('M d Y');
                                @endphp
                                <li>
                                    <div class="img-holder">
                                        <img src="{{ asset('upload/blog_images/' . $single->blog_thumbnail) }}"
                                            alt="blog Image" style="height: 66px; width: 66px;">
                                        <div class="overlay-style-one">
                                            <div class="box">
                                                <div class="content">
                                                    <a href="{{ route('blog', $single->id) }}"><span
                                                            class="icon-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <span>{{ $date }}</span>
                                        <h5 class="post-title"><a
                                                href="{{ route('blog', $single->id) }}">{{ Str::limit($single->title, 20) }}</a>
                                        </h5>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar-->

                    <!--End single sidebar-->
                    <!--Start single-sidebar-->
                    <div class="single-sidebar">
                        <div class="sidebar-title">
                            <div class="title">Instagram Feed</div>
                        </div>
                        <ul class="instagram">
                            <li>
                                <div class="img-holder">
                                    <img src="{{ asset('upload/blog_images/' . $single->image_2) }}"
                                        alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="javascript:void()"><span class="icon-heart"></span>23k</a>
                                                <a href="javascript:void()"><span class="icon-comment"></span>216</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="{{ asset('upload/blog_images/' . $single->image_1) }}"
                                        alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="javascript:void()"><span class="icon-heart"></span>1k</a>
                                                <a href="javascript:void()"><span class="icon-comment"></span>59</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="follow-us-button">
                            <a class="btn-two" href="{{ $SiteSettings->facebook }}">Follow On Facebook<span
                                    class="flaticon-next"></span></a>
                        </div>
                    </div>
                    <!--End single-sidebar-->
                    <!--Start single-sidebar-->
                    <div class="single-sidebar tag-box clerfix">
                        <div class="sidebar-title">
                            <div class="title">Tags</div>
                        </div>
                        <ul class="popular-tag clearfix">
                            @foreach ($tags as $tag)
                                <li><a href="javascript:void()">{{ trim($tag) }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--End single-sidebar-->
                </div>
            </div>
            <!--End Sidebar Wrapper-->
        </div>
    </div>
</section>
@endsection
