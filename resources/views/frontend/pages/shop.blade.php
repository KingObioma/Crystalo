@extends('frontend.frontend_dashboard')
@section('main')
@section('title')
    Shop || Crystalo
@endsection
@section('title1')
    Our Products
@endsection
@section('title2')
    That Perfectly Fits Your Life
@endsection
@section('title3')
    Shop
@endsection
@include('frontend.home.breadcrumb')
<!--Start Shop area-->
<section id="shop-area" class="main-shop-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 float-right">
                <div class="shop-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="showing-result-shorting">
                                <div class="shorting">
                                    <select class="selectmenu" style="padding: 10px 15px;">
                                        <option selected="selected">Default Sorting</option>
                                        {{-- <option>Default Sorting one</option>
                                        <option>Default Sorting Two</option>
                                        <option>Default Sorting Three</option> --}}
                                    </select>
                                </div>
                                <div class="showing">
                                    <p>Showing 1-9 of 50 results</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!--Start single product item-->
                        @foreach ($products as $product)
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="single-product-item text-center">
                                <div class="img-holder">
                                    <img src="{{ !empty($product->photo) ? asset('upload/product_images/' . $product->photo) : asset('upload/no_image.jpg') }}" alt="Product Image">
                                </div>
                                <div class="title-holder text-center">
                                    <div class="static-content">
                                        <h3 class="title text-center"><a href="{{ route('product', $product->id) }}">{{$product->name}}</a></h3>
                                        <span>${{$product->price_value}}.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <!--End single product item-->
                    </div>

                </div>
            </div>

            <!--Start sidebar Wrapper-->
            <div class="col-xl-3 col-lg-4 col-md-8 col-sm-12 float-left">
                <div class="shop-sidebar-wrapper">
                    <!--Start single sidebar-->
                    <div class="single-sidebar-box">
                        <form class="search-form" action="javascript:void()">
                            <input placeholder="Search..." type="text">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar-->
                    <div class="single-sidebar-box pdbtm">
                        <div class="shop-sidebar-title">
                            <h3>Categories</h3>
                        </div>
                        <ul class="categories clearfix">
                            <li><a href="javascript:void()">Furnitures</a></li>
                            <li><a href="javascript:void()">Wall Posters</a></li>
                            <li><a href="javascript:void()">Kitchen</a></li>
                            <li><a href="javascript:void()">Living Room</a></li>
                        </ul>
                    </div>
                    <!--End single sidebar-->

                    <!--Start single sidebar-->
                    <div class="single-sidebar-box">
                        <div class="shop-sidebar-title">
                            <h3>Popular Products</h3>
                        </div>
                        <ul class="products-post">
                            @foreach ($popular_products as $popular_product)
                            <li>
                                <div class="img-holder">
                                    <img src="{{ !empty($popular_product->photo) ? asset('upload/product_images/' . $popular_product->photo) : asset('upload/no_image.jpg') }}"
                                        alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="{{ route('product', $popular_product->id) }}"><span class="icon-link"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder">
                                    <h5 class="post-title"><a href="{{ route('product', $popular_product->id) }}">{{$popular_product->name}}</a></h5>
                                    <span>${{$popular_product->price_value}}.00</span>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--End single sidebar-->
                </div>
            </div>
            <!--End Sidebar Wrapper-->

        </div>
    </div>
</section>
<!--End Shop area-->
@endsection
