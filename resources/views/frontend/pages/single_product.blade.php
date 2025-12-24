@extends('frontend.frontend_dashboard')
@section('main')
@section('title')
    product || Crystalo
@endsection
@section('title1')
    product description
@endsection
@section('title2')
    That Perfectly Fits Your Life
@endsection
@section('title3')
    product
@endsection
@include('frontend.home.breadcrumb')
<section id="shop-area" class="single-shop-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="shop-content">
                    <!--Start single shop content-->
                    <div class="single-shop-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-product-image-holder">
                                    <img src="{{ !empty($product->photo) ? asset('upload/product_images/' . $product->photo) : asset('upload/no_image.jpg') }}" style="width: 535px; height: 500px;" alt="Awesome Image">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="content-box">
                                    <div>
                                    <span class="price">${{ $product->price_value }}.00</span>
                                    <h2>{{ $product->name }}</h2>
                                    <div class="review-box">
                                        <ul>
                                            @if (!empty($averageRating))
                                            @for ($i = 1; $i <= 5; $i++)
                                            @if ($averageRating >= $i)
                                                <li><i class="fa fa-star"></i></li>
                                            @elseif ($averageRating >= $i - 0.5)
                                                <li><i class="fa fa-star-half"></i></li>
                                            @else
                                                <li><i class="fa fa-star" style="color: #ccc;"></i></li>
                                            @endif
                                            @endfor
                                            @endif
                                        </ul>
                                    </div>
                                    <div class="text">
                                        <p>{{ $product->short_description }}</p>
                                    </div>
                                    <div class="location-box">
                                        <span>Expected Delivery in {{ $product->expected_delivery }}</span>
                                    </div>
                                    <div class="addto-cart-box">
                                        <form method="post" action="{{ route('store.cart') }}">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <input class="quantity-spinner" type="text" name="quantity" value="1" name="quantity" min="1">
                                            <button class="btn-one addtocart" type="submit">Add to Cart</button>
                                        </form>
                                    </div>
                                </div>
                                    <div class="share-products-socials">
                                        <h5>Share This Product</h5>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook fb" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter tw" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest pin" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin lin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single shop content-->
                    <!--Start product tab box-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-tab-box tabs-box">
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li data-tab="#desc" class="tab-btn active-btn"><span>Descriprion</span></li>
                                    @if ($reviews->isNotEmpty())
                                    <li data-tab="#review" class="tab-btn"><span>Reviews ({{count($reviews)}})</span></li>
                                    @else
                                    @auth
                                    <li data-tab="#review" class="tab-btn"><span>Review</span></li>
                                    @endauth
                                    @endif
                                </ul>
                                <div class="tabs-content">
                                    <div class="tab active-tab" id="desc">
                                        <div class="product-details-content">
                                            <div class="desc-content-box">
                                                <p>{{ $product->long_description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab" id="review">
                                        @if ($reviews->isNotEmpty())
                                        <div class="review-box-holder">
                                            <div class="row">
                                                @foreach ($reviews as $review)
                                                @php
                                                $userData = App\Models\User::where('id', $review->user_id)->first();
                                                $date = \Carbon\Carbon::parse($review->created_at)->format('M d, Y');
                                                @endphp
                                                <div class="col-xl-6">
                                                    <div class="single-review-box">
                                                        <div class="image-holder">
                                                            <img src="{{ !empty($userData->photo) ? asset('upload/user_images/' . $userData->photo) : asset('upload/no_image.jpg') }}" style="width: 70px; height: 70px;" alt="User Image">
                                                        </div>
                                                        <div class="text-holder">
                                                            <div class="top">
                                                                <div class="name">
                                                                    <h3>{{$userData->name}}<span>– {{$date}}:</span></h3>
                                                                </div>
                                                                <div class="review-box">
                                                                    <ul>
                                                                        @if ($review->rating == '5')
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        @elseif ($review->rating == '4')
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star" style="color: #ccc;"></i></li>
                                                                        @elseif ($review->rating == '3')
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star" style="color: #ccc;"></i></li>
                                                                        <li><i class="fa fa-star" style="color: #ccc;"></i></li>
                                                                        @elseif ($review->rating == '2')
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star" style="color: #ccc;"></i></li>
                                                                        <li><i class="fa fa-star" style="color: #ccc;"></i></li>
                                                                        <li><i class="fa fa-star" style="color: #ccc;"></i></li>
                                                                        @elseif ($review->rating == '1')
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star" style="color: #ccc;"></i></li>
                                                                        <li><i class="fa fa-star" style="color: #ccc;"></i></li>
                                                                        <li><i class="fa fa-star" style="color: #ccc;"></i></li>
                                                                        <li><i class="fa fa-star" style="color: #ccc;"></i></li>
                                                                        @endif
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <p> {{$review->review}} </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        @endif
                                        @auth
                                        <div class="review-form" style="padding-top: 0px;">
                                            <div class="shop-page-title">
                                                <div class="title">Add Your <span>Comments</span></div>
                                            </div>
                                                <form class="review-form" method="post" action="{{ route('store.review') }}">
                                                    @csrf
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="add-rating-box">
                                                            <div class="review-box" style="padding-left: 0px;">
                                                                <div class="star-rating">
                                                                    <span class="star" data-value="5">&#9733;</span>
                                                                    <span class="star" data-value="4">&#9733;</span>
                                                                    <span class="star" data-value="3">&#9733;</span>
                                                                    <span class="star" data-value="2">&#9733;</span>
                                                                    <span class="star" data-value="1">&#9733;</span>
                                                                </div>
                                                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                                                <input type="hidden" id="rating-value" name="rating" value="0">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="input-box">
                                                            <p>Your Review<span>*</span></p>
                                                            <textarea name="review" placeholder="" rows="2" required=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button class="btn-one" type="submit">Post Comment</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        @endauth
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End product tab box-->
                    <!--Start related product box-->
                    <div class="related-product">
                        <div class="shop-page-title">
                            <div class="title">Related <span>Products</span></div>
                        </div>
                        <div class="row">
                            @foreach ($products as $related_product)
                            <!--Start single product item-->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="single-product-item text-center">
                                    <div class="img-holder">
                                        <img src="{{ !empty($related_product->photo) ? asset('upload/product_images/' . $related_product->photo) : asset('upload/no_image.jpg') }}" alt="Product Image">
                                    </div>
                                    <div class="title-holder text-center">
                                        <div class="static-content">
                                            <h3 class="title text-center"><a href="{{ route('product', $related_product->id) }}">{{$related_product->name}}</a></h3>
                                            <span>${{$related_product->price_value}}.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End single product item-->
                            @endforeach
                        </div>
                    </div>
                    <!--End related product box-->
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
