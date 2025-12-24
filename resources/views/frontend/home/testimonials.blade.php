@php
    $testimonials = App\Models\testimonial::limit(3)->get();
@endphp

<!--Start Testimonial Style2 Area-->
<section class="testimonial-style2-area">
    <div class="container">
        <div class="sec-title text-center">
            <p>Testimonials</p>
            <div class="title">Our Customer <span>Words</span></div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="testimonial-style2-content">
                    <div class="testimonial-carousel owl-carousel owl-theme">
                        @foreach ($testimonials as $testimonial)
                            <div class="single-testimonial-style2 text-center">
                                <div class="inner-content">
                                    <div class="static-content">
                                        <div class="quote-icon">
                                            <span class="icon-quote3"></span>
                                        </div>
                                        <div class="text-box">
                                            <p>{{ $testimonial->message }}</p>
                                        </div>
                                        <div class="client-info">
                                            <div class="review-box">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <h3>{{ $testimonial->name }}</h3>
                                        </div>
                                    </div>
                                    <div class="overlay-content">
                                        <div class="img-box">
                                            <img src="{{ asset('upload/testimonials/' . $testimonial->photo) }}"
                                                alt="Awesome Image">
                                        </div>
                                        <div class="text-box">
                                            <p>{{ $testimonial->message }}</p>
                                            <div class="quote-icon">
                                                <span class="icon-quote3"></span>
                                            </div>
                                        </div>
                                        <div class="client-info">
                                            <div class="review-box">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <h3>{{ $testimonial->name }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Testimonial Style2 Area-->
