@extends('layouts.single-layout')

@section('content')

<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area bg-image--6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">Single Product</h2>
                    <nav class="bradcaump-content">
                        <a class="breadcrumb_item" href="{{ url('/') }}">Home</a>
                        <span class="brd-separetor">/</span>
                        <span class="breadcrumb_item active">Single Product</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->

<div class="maincontent bg--white pt--80 pb--55">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-12">
                <div class="wn__single__product">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <a href="{{ $product->imagePath }}"><img width="405" height="510" src="{{ asset($product->imagePath) }}" alt=""></a>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="product__info__main">
                                <h1>{{ $product->title }}</h1>
                                <div class="price-box">
                                    <span>Rp. {{ $product->price }}</span>
                                </div>
                                <div class="product__overview">
                                    <p>{{ $product->description }}</p>
                                </div>
                                <div>
                                    <h4> Stock: {{ $product->stock }}</h4>
                                </div>
                                <div class="box-tocart d-flex">
                                    <div class="cartbox__btn">
                                        <ul class="cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
                                            <li><a href="{{ route('product.addToCart', ['id' => $product->id]) }}">Add to Cart</a></li>
                                            <li><a href="{{ route('product.rent', ['id' => $product->id]) }}">Rent</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product__info__detailed">
                    <div class="pro_details_nav nav justify-content-start" role="tablist">
                        <a class="nav-item nav-link active" data-toggle="tab" href="#nav-details" role="tab">Details</a>
                    </div>
                    <div class="tab__container">
                        <!-- Start Single Tab Content -->
                        <div class="pro__tab_label tab-pane fade show active" id="nav-details" role="tabpanel">
                            <div class="description__attribute">
                                <p>{{ $product->description }}</p>
                            </div>
                        </div>
                        <!-- End Single Tab Content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('content')
