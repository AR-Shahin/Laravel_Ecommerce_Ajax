@extends('layouts.frontend.master')
@section('master_content')
<main class="main">
    <div class="container">
        <!-- slider -->
        <div class="row m-b-3">
            <div class="col-lg-9 offset-lg-3 appear-animate" data-animation-name="fadeInLeftShorter">
                <div class="home-slider owl-carousel owl-carousel-lazy owl-theme slide-animate" data-owl-options="{
                    'nav': false
                }">
                    <div class="home-slide banner">
                        <a href="category.html">
                            <img class="owl-lazy slide-bg" src="{{asset('frontend')}}/assets/images/slider/slide-1.jpg" data-src="assets/images/slider/slide-1.jpg" alt="banner" width="835" height="410" />
                        </a>
                        <div class="banner-layer slide-1 text-right banner-layer-middle">
                            <h4 class="text-right slide-title appear-animate" data-animation-delay="300" data-animation-name="blurIn">Find the Boundaries. Push Through!</h4>
                            <h2 class="mb-0 text-right text-uppercase sub-title appear-animate" data-animation-delay="100" data-animation-duration="1500" data-animation-name="fadeIn">Shoes Sale</h2>
                            <div class="row d-block d-sm-inline-flex flex-sm-nowrap mt-2">
                                <div class="col-auto col-md-6 appear-animate" data-animation-delay="900" data-animation-name="fadeInUpShorter">
                                    <h3 class="sale-label line-height-1 mb-0 d-inline-block text-center">40<small><sup>%</sup><sub>OFF</sub></small></h3>
                                </div>
                                <div class="col-auto col-md-6 content-right appear-animate" data-animation-delay="1500" data-animation-name="fadeInRight">
                                    <h4 class="d-inline-block text-left text-uppercase line-height-1 d-inline-block">Starting At</h4>
                                    <h5 class="text-left coupon-sale-text">$<b>119</b>99</h5>
                                    <div class="mb-0">
                                        <a href="category.html">
                                            <button class="btn btn-modern btn-md btn-dark">SHOP NOW!</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home-slide banner">
                        <a href="category.html">
                            <img class="owl-lazy slide-bg" src="{{asset('frontend')}}/assets/images/slider/slide-2.jpg" data-src="assets/images/slider/slide-2.jpg" alt="banner" width="835" height="410" />
                        </a>
                        <div class="banner-layer slide-2 text-right banner-layer-middle">
                            <div class="appear-animate" data-animation-name="fadeInRight">
                                <div>
                                    <h2 class="text-right text-uppercase text-primary ls-n-20 m-b-2">FLASH SALE</h2>
                                    <h4 class="text-right m-b-2">TOP BRANDS<br>SUMMER SUNGLASSES</h4>
                                    <h3 class="text-right text-uppercase text-light ls-n-20 m-b-4">STARTING<br>AT<sup>$</sup>199<sup>99</sup></h3>
                                    <div class="pt-1">
                                        <a href="category.html"><button class="btn btn-modern btn-lg btn-light appear-animate" data-animation-delay="1200" data-animation-name="fadeInUpShorter">View Sale</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .home-slider -->
            </div>
            <!-- End .col-lg-9 -->
        </div>
        <!-- End .row -->

        <section>
            <h2 class="section-title title-decorate text-center appear-animate" data-animation-delay="100" data-animation-duration="1500">Featured Products</h2>
            <div class="row">
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="product-default left-details mb-4">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset('frontend')}}/assets/images/products/product-1.jpg" alt="product" width="300" height="300">
                                <img src="{{asset('frontend')}}/assets/images/products/product-1-hover.jpg" alt="product" width="300" height="300">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-hot">HOT</span>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="category-list">
                                <a href="category.html" class="product-category">clothing</a>,
                                <a href="category.html" class="product-category">shoes</a>
                            </div>
                            <h2 class="product-title">
                                <a href="product.html">Product Black Bag</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:0%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">$99.00 – $109.00</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-action">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i>ADD TO CART</button>
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <!-- End .col-lg-3 -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="product-default left-details mb-4">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset('frontend')}}/assets/images/products/product-2.jpg" alt="product" width="300" height="300">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-hot">HOT</span>
                                <span class="product-label label-sale">-28%</span>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="category-list">
                                <a href="category.html" class="product-category">shoes</a>,
                                <a href="category.html" class="product-category">toys</a>
                            </div>
                            <h2 class="product-title">
                                <a href="product.html">Women Winter Shoes</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:0%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">$209.00 – $249.00</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-action">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i>ADD TO CART</button>
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <!-- End .col-lg-3 -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="product-default left-details mb-4">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset('frontend')}}/assets/images/products/product-3.jpg" alt="product" width="300" height="300">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-hot">HOT</span>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="category-list">
                                <a href="category.html" class="product-category">CLOTHING</a>,
                                <a href="category.html" class="product-category">shoes</a>
                            </div>
                            <h2 class="product-title">
                                <a href="product.html">Women Black Bag</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:0%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">$299.00</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-action">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i>ADD TO CART</button>
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <!-- End .col-lg-3 -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="product-default left-details mb-4">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset('frontend')}}/assets/images/products/product-10.jpg" alt="product" width="300" height="300">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-hot">HOT</span>
                                <span class="product-label label-sale">-15%</span>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="category-list">
                                <a href="category.html" class="product-category">T-shirts</a>,
                                <a href="category.html" class="product-category">Toys</a>
                            </div>
                            <h2 class="product-title">
                                <a href="product.html">Women Bag</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:0%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$1,999.00</span>
                                <span class="product-price">$1,699.00</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-action">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i>ADD TO CART</button>
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <!-- End .col-lg-3 -->
            </div>
            <!-- End .row -->
        </section>


        <div class="home-products-container text-center appear-animate" data-animation-delay="100" data-animation-duration="1500">
            <div class="row">
            <div class="col-md-6 mb-2">
                    <div class="home-products bg-gray p-y-5">
                        <h3 class="section-sub-title">BEST SELLERES PRODUCTS</h3>

                        <div class="owl-carousel owl-theme nav-image-center nav-thin nav-style-1" data-owl-options="{
                            'dots': false,
                            'nav': true,
                            'responsive': {
                                '480': {
                                    'items': 2
                                },
                                '768': {
                                    'items': 1
                                }
                            }
                        }">
                            <div class="product-default pl-3 pr-3 pl-3 pr-3">
                                <figure>
                                    <a href="product.html">
                                        <img src="{{asset('frontend')}}/assets/images/products/product-8.jpg" alt="product" width="300" height="300" />
                                    </a>
                                    <div class="label-group">
                                        <span class="product-label label-hot">HOT</span>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">headphone</a>,
                                        <a href="category.html" class="product-category">toys</a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="product.html">Women Bag</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:0%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$299.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>

                            <div class="product-default pl-3 pr-3">
                                <figure>
                                    <a href="product.html">
                                        <img src="{{asset('frontend')}}/assets/images/products/product-9.jpg" alt="product" width="300" height="300" />
                                    </a>
                                    <div class="label-group">
                                        <span class="product-label label-sale">-10%</span>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">category</a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="product.html">Women Winter Shoes</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:0%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$209.00 – $249.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>

                            <div class="product-default pl-3 pr-3">
                                <figure>
                                    <a href="product.html">
                                        <img src="{{asset('frontend')}}/assets/images/products/product-7.jpg" alt="product" width="300" height="300" />
                                    </a>
                                    <div class="label-group">
                                        <span class="product-label label-sale">-30%</span>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">category</a>,
                                        <a href="category.html" class="product-category">clothing</a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="product.html">Women Black Bag</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:0%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$299.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .col-md-4 -->

                <div class="col-md-6 mb-2">
                    <div class="home-products bg-gray p-y-5">
                        <h3 class="section-sub-title">NEW ARRIVAL PRODUCTS</h3>

                        <div class="owl-carousel owl-theme nav-image-center nav-thin nav-style-1" data-owl-options="{
                            'dots': false,
                            'nav': true,
                            'responsive': {
                                '480': {
                                    'items': 2
                                },
                                '768': {
                                    'items': 1
                                }
                            }
                        }">
                            <div class="product-default pl-3 pr-3 pl-3 pr-3">
                                <figure>
                                    <a href="product.html">
                                        <img src="{{asset('frontend')}}/assets/images/products/product-8.jpg" alt="product" width="300" height="300" />
                                    </a>
                                    <div class="label-group">
                                        <span class="product-label label-hot">HOT</span>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">headphone</a>,
                                        <a href="category.html" class="product-category">toys</a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="product.html">Women Bag</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:0%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$299.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>

                            <div class="product-default pl-3 pr-3">
                                <figure>
                                    <a href="product.html">
                                        <img src="{{asset('frontend')}}/assets/images/products/product-9.jpg" alt="product" width="300" height="300" />
                                    </a>
                                    <div class="label-group">
                                        <span class="product-label label-sale">-10%</span>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">category</a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="product.html">Women Winter Shoes</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:0%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$209.00 – $249.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>

                            <div class="product-default pl-3 pr-3">
                                <figure>
                                    <a href="product.html">
                                        <img src="{{asset('frontend')}}/assets/images/products/product-7.jpg" alt="product" width="300" height="300" />
                                    </a>
                                    <div class="label-group">
                                        <span class="product-label label-sale">-30%</span>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">category</a>,
                                        <a href="category.html" class="product-category">clothing</a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="product.html">Women Black Bag</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:0%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$299.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .col-md-4 -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .row.home-products -->

        <div class="mb-3"></div>
        <!-- margin -->
        <section class="container pb-3 mb-1">
            <h2 class="section-title ls-n-10 text-center pb-2 m-b-4">Featured Products</h2>

            <div class="row py-4">
                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset('frontend')}}/assets/images/products/product-10.jpg">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-sale">-30%</span>
                            </div>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset('frontend')}}/assets/images/products/product-11.jpg">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-hot">HOT</span>
                            </div>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset('frontend')}}/assets/images/products/product-12.jpg">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-sale">-20%</span>
                            </div>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset('frontend')}}/assets/images/products/product-1.jpg">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset('frontend')}}/assets/images/products/product-2.jpg">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset('frontend')}}/assets/images/products/product-3.jpg">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-hot">HOT</span>
                            </div>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset('frontend')}}/assets/images/products/product-4.jpg">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset('frontend')}}/assets/images/products/product-5.jpg">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset('frontend')}}/assets/images/products/product-6.jpg">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-hot">HOT</span>
                            </div>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="assets/images/products/product-7.jpg">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-sale">-40%</span>
                            </div>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset('frontend')}}/assets/images/products/product-8.jpg">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-sale">-10%</span>
                                <span class="product-label label-hot">HOT</span>
                            </div>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset('frontend')}}/assets/images/products/product-9.jpg">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
            </div>

            <hr class="mt-3 mb-6">

            <div class="row feature-boxes-container pt-2">
                <div class="col-sm-6 col-lg-3">
                    <div class="feature-box feature-box-simple text-center">
                        <i class="icon-earphones-alt"></i>

                        <div class="feature-box-content">
                            <h3 class="text-uppercase">Customer Support</h3>
                            <h5>Need Assistence?</h5>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                        </div>
                        <!-- End .feature-box-content -->
                    </div>
                    <!-- End .feature-box -->
                </div>
                <!-- End .col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="feature-box feature-box-simple text-center">
                        <i class="icon-credit-card"></i>

                        <div class="feature-box-content">
                            <h3 class="text-uppercase">Secured Payment</h3>
                            <h5>Safe &amp; Fast</h5>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapibus lacus. Lorem ipsum dolor sit amet.</p>
                        </div>
                        <!-- End .feature-box-content -->
                    </div>
                    <!-- End .feature-box -->
                </div>
                <!-- End .col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="feature-box feature-box-simple text-center">
                        <i class="icon-action-undo"></i>

                        <div class="feature-box-content">
                            <h3 class="text-uppercase">Free Returns</h3>
                            <h5>Easy &amp; Free</h5>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                        </div>
                        <!-- End .feature-box-content -->
                    </div>
                    <!-- End .feature-box -->
                </div>
                <!-- End .col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="feature-box feature-box-simple text-center">
                        <i class="icon-shipping"></i>

                        <div class="feature-box-content">
                            <h3 class="text-uppercase">Free Shipping</h3>
                            <h5>Orders Over $99</h5>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                        </div>
                        <!-- End .feature-box-content -->
                    </div>
                    <!-- End .feature-box -->
                </div>
                <!-- End .col-lg-3 -->
            </div>
            <!-- End .row .feature-boxes-container-->
        </section>
        <section class="appear-animate" data-animation-delay="100" data-animation-duration="1500">
            <h2 class="section-title title-decorate text-center">FASHION SELECTION</h2>
            <div class="row">
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="product-default left-details mb-4">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset('frontend')}}/assets/images/products/product-1.jpg" alt="product" width="300" height="300">
                                <img src="{{asset('frontend')}}/assets/images/products/product-1-hover.jpg" alt="product" width="300" height="300">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-hot">HOT</span>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="category-list">
                                <a href="category.html" class="product-category">clothing</a>,
                                <a href="category.html" class="product-category">shoes</a>
                            </div>
                            <h2 class="product-title">
                                <a href="product.html">Product Black Bag</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:0%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">$99.00 – $109.00</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-action">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i>ADD TO CART</button>
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <!-- End .col-lg-3 -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="product-default left-details mb-4">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset('frontend')}}/assets/images/products/product-2.jpg" alt="product" width="300" height="300">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-hot">HOT</span>
                                <span class="product-label label-sale">-28%</span>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="category-list">
                                <a href="category.html" class="product-category">shoes</a>,
                                <a href="category.html" class="product-category">toys</a>
                            </div>
                            <h2 class="product-title">
                                <a href="product.html">Women Winter Shoes</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:0%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">$209.00 – $249.00</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-action">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i>ADD TO CART</button>
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <!-- End .col-lg-3 -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="product-default left-details mb-4">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset('frontend')}}/assets/images/products/product-3.jpg" alt="product" width="300" height="300">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-hot">HOT</span>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="category-list">
                                <a href="category.html" class="product-category">CLOTHING</a>,
                                <a href="category.html" class="product-category">shoes</a>
                            </div>
                            <h2 class="product-title">
                                <a href="product.html">Women Black Bag</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:0%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">$299.00</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-action">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i>ADD TO CART</button>
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <!-- End .col-lg-3 -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="product-default left-details mb-4">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset('frontend')}}/assets/images/products/product-10.jpg" alt="product" width="300" height="300">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-hot">HOT</span>
                                <span class="product-label label-sale">-15%</span>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="category-list">
                                <a href="category.html" class="product-category">T-shirts</a>,
                                <a href="category.html" class="product-category">Toys</a>
                            </div>
                            <h2 class="product-title">
                                <a href="product.html">Women Bag</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:0%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$1,999.00</span>
                                <span class="product-price">$1,699.00</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-action">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i>ADD TO CART</button>
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <!-- End .col-lg-3 -->
            </div>
            <!-- End .row -->
        </section>

        <div class="m-b-1"></div>
        <!-- margin -->
        <div class="banner newsletter-banner bg-img appear-animate" style="background-image: url(assets/images/banners/banner.jpg)">
            <div class="banner-content col-md-9 col-xl-6 col-lg-8 col-10 p-l-5 pr-0">
                <h2 class="text-center ls-n-20 m-b-2 text-uppercase">subscribe to our newsletter</h2>
                <h5 class="text-center text-body font-weight-normal m-b-3 p-x-4">Get all the latest information on events, sales and offers. Sign up for newsletter:</h5>
                <div class="widget-newsletter">
                    <form action="#" class="d-flex justify-content-center mb-0">
                        <input type="email" class="form-control mb-1" placeholder="Email address" required/>
                        <button class="btn btn-primary">subscribe</button>
                    </form>
                </div>
            </div>
        </div>

        <section class="appear-animate p-y-5">
            <div class="container">
                <div class="brands-slider images-center owl-carousel owl-theme nav-pos-outside show-nav-hover appear-animate" data-owl-options="{
                        'margin': 0,
                        'loop': true,
                        'autoplay': true
                    }">
                    <img src="{{asset('frontend')}}/assets/images/logos/1.png" width="140" height="60" alt="logo" />
                    <img src="{{asset('frontend')}}/assets/images/logos/2.png" width="140" height="60" alt="logo" />
                    <img src="{{asset('frontend')}}/assets/images/logos/3.png" width="140" height="60" alt="logo" />
                    <img src="{{asset('frontend')}}/assets/images/logos/4.png" width="140" height="60" alt="logo" />
                    <img src="{{asset('frontend')}}/assets/images/logos/5.png" width="140" height="60" alt="logo" />
                    <img src="{{asset('frontend')}}/assets/images/logos/6.png" width="140" height="60" alt="logo" />
                </div>
                <!-- End .partners-carousel -->
            </div>
            <!-- End .container -->
        </section>
    </div>
    <!-- End .container -->
</main>
<!-- End .main -->
@stop

@push('script')
<script>

</script>
@endpush