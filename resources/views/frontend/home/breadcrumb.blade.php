<!--Start breadcrumb area-->
<section class="breadcrumb-area style2"
    style="background-image: url({{ asset('frontend/images/resources/breadcrumb-bg-2.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content-box clearfix">
                    <div class="title-s2 text-center">
                        <span>@yield('title1')</span>
                        <h1>@yield('title2')</h1>
                    </div>
                    <div class="breadcrumb-menu float-left">
                        <ul class="clearfix">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="active">@yield('title3')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->
