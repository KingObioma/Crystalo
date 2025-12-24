@extends('frontend.frontend_dashboard')
@section('main')
@section('title')
    Cart || Crystalo
@endsection
@section('title1')
    Shopping cart
@endsection
@section('title2')
    That Perfectly Fits Your Life
@endsection
@section('title3')
    Shopping Cart
@endsection
@include('frontend.home.breadcrumb')


@if ($carts->isNotEmpty())
<section class="cart-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="table-outer">
                    <table class="cart-table">
                        <thead class="cart-header">
                            <tr>
                                <th class="prod-column">Products</th>
                                <th>&nbsp;</th>
                                <th>Quantity</th>
                                <th class="availability">Availability</th>
                                <th class="price">Price</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                            <form method="post" action="{{ route('update.cart') }}">
                            @csrf
                                <tbody>
                                    @php
                                        $total = 0;
                                    @endphp
                                    @foreach ($carts as $cart)
                                        @php
                                            $product = App\Models\Product::find($cart->product_id);
                                            $subtotal = $product->price_value * $cart->quantity;
                                            $total += $subtotal;
                                        @endphp
                                        <tr>
                                            <td colspan="2" class="prod-column">
                                                <div class="column-box">
                                                    <div class="prod-thumb">
                                                        <a href="{{ route('product', $product->id) }}">
                                                            <img src="{{ $product->photo ? asset('upload/product_images/' . $product->photo) : asset('upload/no_image.jpg') }}" alt="Product image">
                                                        </a>
                                                    </div>
                                                    <div class="title">
                                                        <h3 class="prod-title">{{ $product->name }}</h3>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="qty">
                                                <div class="quantity-container">
                                                    <input type="number" class="quantity-input" name="quantities[{{ $cart->id }}]" value="{{ $cart->quantity }}" min="1">
                                                    <div class="quantity-buttons">
                                                        <button type="button" onclick="increaseQuantity(event)">▲</button>
                                                        <button type="button" onclick="decreaseQuantity(event)">▼</button>
                                                    </div>
                                                </div>

                                            </td>
                                            <td class="unit-price">
                                                <div class="available-info">
                                                    <span class="icon fa fa-check thm-bg-clr"></span>Item(s)<br>Available Now
                                                </div>
                                            </td>
                                            <td class="price">${{ $product->price_value }}.00</td>
                                            <td class="sub-total">${{ $subtotal }}.00</td>
                                            <td>
                                                <div class="remove">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input name="remove[{{ $cart->id }}]" type="checkbox">
                                                            <span>Remove</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

        <div class="row cart-middle">
            <div class="col-xl-6 col-lg-9 col-md-8 col-sm-12">
                <div class="apply-coupon">
                </div>
            </div>
            <div class="col-xl-6 col-lg-3 col-md-4 col-sm-12">
                <div class="update-cart pull-right">
                        <button class="btn-one" type="submit">Update Cart</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="row cart-bottom">
            <div class="col-xl-6 col-lg-5 col-md-12 col-sm-12">
                <div class="calculate-shipping">
                    <div class="shop-page-title">
                        <div class="title">Shipping <span>Calculate</span></div>
                    </div>
                  <form method="post" action="{{ route('update.totals') }}">
                    @csrf
                    <select name="country" class="selectmenu" id="country">
                        <option value="{{$user->country}}">{{$user->country}}</option>
                        @if ($user->country == 'Nigeria')
                        <option value="United Kingdom (UK)">United Kingdom (UK)</option>
                        <option value="United State (USA)">United State (USA)</option>
                        <option value="France">France</option>
                        <option value="Ghana">Ghana</option>
                        @elseif ($user->country == 'United Kingdom (UK)')
                        <option value="Nigeria">Nigeria</option>
                        <option value="United State (USA)">United State (USA)</option>
                        <option value="France">France</option>
                        <option value="Ghana">Ghana</option>
                        @elseif ($user->country == 'United State (USA)')
                        <option value="Nigeria">Nigeria</option>
                        <option value="United Kingdom (UK)">United Kingdom (UK)</option>
                        <option value="France">France</option>
                        <option value="Ghana">Ghana</option>
                        @elseif ($user->country == 'France')
                        <option value="Nigeria">Nigeria</option>
                        <option value="United Kingdom (UK)">United Kingdom (UK)</option>
                        <option value="United State (USA)">United State (USA)</option>
                        <option value="Ghana">Ghana</option>
                        @elseif ($user->country == 'Ghana')
                        <option value="Nigeria">Nigeria</option>
                        <option value="United Kingdom (UK)">United Kingdom (UK)</option>
                        <option value="United State (USA)">United State (USA)</option>
                        <option value="France">France</option>
                        @endif
                    </select>
                    <div class="row">
                        <div class="col-lg-12">
                            <input class="mar-bottom" name="state" value="{{$user->state}}" type="text" placeholder="State / Country" required>
                        </div>
                    </div>
                    <button class="btn-one" type="submit">Update Totals</button>
                </form>

                </div>
            </div>
            <!--Start cart total -->
            <div class="col-xl-6 col-lg-7 col-md-12 col-sm-12">
                <div class="cart-total">
                    <div class="shop-page-title">
                        <div class="title">Cart <span>Totals</span></div>
                    </div>
                    <ul class="cart-total-table">
                        <li class="clearfix">
                            <span class="col col-title">Cart Subtotal</span>
                            <span class="col">${{$total}}.00</span>
                        </li>
                        <li class="clearfix">
                            <span class="col col-title">Shipping and Handling</span>
                            <span class="col">${{$user->Shipping_cost}}.00</span>
                        </li>
                        <li class="clearfix">
                            <span class="col col-title">Order Total</span>
                            <span class="col">${{$total + $user->Shipping_cost}}.00</span>
                        </li>
                    </ul>
                    <div class="payment-options">
                        <div class="option-block">
                            <div class="checkbox">
                                <label>
                            <input name="pay-us" type="checkbox">
                            <span>Direct Bank Transfer</span>
                        </label>
                            </div>
                            <div class="text">
                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                            </div>
                        </div>
                        <div class="option-block">
                            <div class="radio-block">
                                <div class="checkbox">
                                    <label>
                                <input name="pay-us" type="checkbox">
                                <span>Paypal <b>What is Paypal</b></span>
                            </label>
                                </div>
                            </div>
                        </div>
                        <div class="placeorder-button text-left">
                            <button class="btn-one" type="submit">Place Order</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--End cart total -->
        </div>
    </div>
</section>
@else
  <section class="error-page-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="error-content text-center">
                    <span>Empty Cart</span>
                    <div class="title">404</div>
                    <p>We’re unable to find any product on your Cart, Try later or click the button.</p>
                    <div class="button">
                        <a class="btn-one" href="{{route('home')}}">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@endsection
