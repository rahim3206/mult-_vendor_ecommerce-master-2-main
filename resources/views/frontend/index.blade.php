@extends('frontend.layouts.app')
@section('title','Home')
@section('content')
    <!-- main-area -->
    <main>
        <!-- banner-area -->
        <section class="banner-area pt-20">
            <div class="banner-shape"></div>
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-9">
                        <div class="row align-items-center">
                            <div class="col-lg-6 order-0 order-lg-2">
                                <div class="banner-img">
                                    <img src="{{ asset('frontend_assets/img/banner/banner_img.png') }}" alt="">
                                    <div class="product-tooltip">
                                        <div class="tooltip-btn"></div>
                                        <div class="tooltip-product-item product-tooltip-item left">
                                            <div class="close-btn"><i class="fa-solid fa-xmark"></i></div>
                                            <div class="tooltip-product-thumb">
                                                <a href="shop-details.html">
                                                    <img src="{{ asset('frontend_assets/img/product/tooltip_img.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="tooltip-product-content">
                                                <h5 class="title"><a href="shop-details.html">Watch $29.08 <span>-35%</span></a>
                                                </h5>
                                                <p class="order">05 orders</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-tooltip">
                                        <div class="tooltip-btn"></div>
                                        <div class="tooltip-product-item product-tooltip-item bottom left">
                                            <div class="close-btn"><i class="fa-solid fa-xmark"></i></div>
                                            <div class="tooltip-product-thumb">
                                                <a href="shop-details.html">
                                                    <img src="{{ asset('frontend_assets/img/product/tooltip_img02.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="tooltip-product-content">
                                                <h5 class="title"><a href="shop-details.html">Watch $25.08 <span>-40%</span></a>
                                                </h5>
                                                <p class="order">03 orders</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-tooltip">
                                        <div class="tooltip-btn"></div>
                                        <div class="tooltip-product-item product-tooltip-item">
                                            <div class="close-btn"><i class="fa-solid fa-xmark"></i></div>
                                            <div class="tooltip-product-thumb">
                                                <a href="shop-details.html">
                                                    <img src="{{ asset('frontend_assets/img/product/tooltip_img.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="tooltip-product-content">
                                                <h5 class="title"><a href="shop-details.html">Watch $29.08 <span>-35%</span></a>
                                                </h5>
                                                <p class="order">05 orders</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="banner-content">
                                    <h2 class="title">Always <br> Be Your <span>MULTIVENDOR</span></h2>
                                    <h4 class="small-title">Women <span>Fashion</span></h4>
                                    <h5 class="price">Total order : <span>$30.00</span></h5>
                                    <a href="shop.html" class="btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-area-end -->

        <!-- super-deals-area -->
        <section class="super-deals-product-area pt-30 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="product-wrap mb-30">
                            <div class="row align-items-center mb-20">
                                <div class="col-xl-3 col-lg-4 col-md-3">
                                    <div class="section-title">
                                        <h2 class="title">Super <span>Deals</span></h2>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-7">
                                    <div class="super-deals-countdown">
                                        <p>Top products. Incredible prices</p>
                                        <div class="coming-time" data-countdown="2023/4/30"></div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-2 col-md-2">
                                    <div class="view-more text-end">
                                        <a href="shop.html">View more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row custom justify-content-center">
                                
                                @foreach ($supar_deals as $supar_deal)
                                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                        <div class="product-item mb-30">
                                            <div class="product-thumb">
                                                <a href="{{route('product.detail',$supar_deal->slug)}}" wire:navigate><img src="{{ asset('product_image').'/'.$supar_deal->image }}" alt="{{ $supar_deal->title }}" width="100%" height="200px"></a>
                                            </div>
                                            <div class="product-content">
                                                <h4 class="title"><a href="{{route('product.detail',$supar_deal->slug)}}" wire:navigate>{{ $supar_deal->sub_category->title }} RS{{ $supar_deal->price }}<span>-35%</span></a></h4>
                                                <p>0 orders</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-9">
                        <div class="product-wrap top-product mb-20">
                            <div class="row mb-20">
                                <div class="col-sm-6">
                                    <div class="product-title">
                                        <h4 class="title">Top Selection</h4>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="view-more text-end">
                                        <a href="shop.html">View more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row custom justify-content-center">
                                @foreach ($top_selections as $top_selection)
                                    <div class="col-md-4 col-sm-6">
                                        <div class="product-item mb-30">
                                            <div class="product-thumb">
                                                <a href="{{ route('product.detail',$top_selection->slug) }}" wire:navigate><img src="{{ asset('product_image').'/'.$top_selection->image }}" alt="{{ $top_selection->title }}" width="100%" height="180px"></a>
                                            </div>
                                            <div class="product-content">
                                                <h4 class="title"><a href="{{ route('product.detail',$top_selection->slug) }}" wire:navigate>{{ $top_selection->sub_category->title }} RS{{ $top_selection->price }}<span>-35%</span></a></h4>
                                                <p>0 orders</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-9">
                        <div class="product-wrap top-product mb-20">
                            <div class="row mb-20">
                                <div class="col-sm-6">
                                    <div class="product-title">
                                        <h4 class="title">New arrivals</h4>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="view-more text-end">
                                        <a href="shop.html">View more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row custom justify-content-center">
                                @foreach ($new_arrivals as $new_arrival)
                                <div class="col-md-4 col-sm-6">
                                    <div class="product-item mb-30">
                                        <div class="product-thumb">
                                            <a href="{{ route('product.detail',$new_arrival->slug) }}" wire:navigate><img src="{{ asset('product_image').'/'.$new_arrival->image }}" alt="{{ $new_arrival->title }}" width="100%" height="180px"></a>
                                        </div>
                                        <div class="product-content">
                                            <h4 class="title"><a href="{{ route('product.detail',$new_arrival->slug) }}" wire:navigate>{{ $new_arrival->sub_category->title }} RS{{ $new_arrival->price }}<span>-35%</span></a></h4>
                                            <p>0 orders</p>
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
        <!-- super-deals-area-end -->

        <!-- choose-product-area -->
        <section class="choose-product-area pt-80 pb-70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-40">
                            <h2 class="title">Choose Category</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="add-banner">
                            <div class="add-banner-img mb-20">
                                <a href="shop.html"><img src="{{ asset('frontend_assets/img/images/add_banner_img01.jpg') }}" alt="img"></a>
                            </div>
                            <div class="add-banner-content">
                                <span>On the weekend</span>
                                <h2 class="title">Top Clothing</h2>
                                <a href="shop.html" class="btn btn-two">shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="category-item-wrap mb-20">
                                    <h4 class="title">Top Rankings</h4>
                                    <ul class="category-item-list">
                                        <li class="category-item">
                                            <a href="shop.html"><img src="{{ asset('frontend_assets/img/product/category_product_img01.jpg') }}" alt=""></a>
                                        </li>
                                        <li class="category-item">
                                            <a href="shop.html"><img src="{{ asset('frontend_assets/img/product/category_product_img02.jpg') }}" alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="category-item-wrap mb-20">
                                    <h4 class="title">Home Appliances</h4>
                                    <ul class="category-item-list">
                                        <li class="category-item">
                                            <a href="shop.html"><img src="{{ asset('frontend_assets/img/product/category_product_img03.jpg') }}" alt=""></a>
                                        </li>
                                        <li class="category-item">
                                            <a href="shop.html"><img src="{{ asset('frontend_assets/img/product/category_product_img04.jpg') }}" alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="category-item-wrap mb-20">
                                    <h4 class="title">Smart phone</h4>
                                    <ul class="category-item-list">
                                        <li class="category-item">
                                            <a href="shop.html"><img src="{{ asset('frontend_assets/img/product/category_product_img05.jpg') }}" alt=""></a>
                                        </li>
                                        <li class="category-item">
                                            <a href="shop.html"><img src="{{ asset('frontend_assets/img/product/category_product_img06.jpg') }}" alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="category-item-wrap mb-20">
                                    <h4 class="title">Sports</h4>
                                    <ul class="category-item-list">
                                        <li class="category-item">
                                            <a href="shop.html"><img src="{{ asset('frontend_assets/img/product/category_product_img07.jpg') }}" alt=""></a>
                                        </li>
                                        <li class="category-item">
                                            <a href="shop.html"><img src="{{ asset('frontend_assets/img/product/category_product_img08.jpg') }}" alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-md-6 col-sm-8">
                        <div class="join-olle-wrap">
                            <div class="icon">
                                <a href="#"><i class="fa-solid fa-user"></i></a>
                            </div>
                            <h3 class="title">Welcome to Olle</h3>
                            <div class="join-btn">
                                <a href="contact.html" class="btn">Join Us</a>
                                <a href="contact.html" class="btn">Sign In</a>
                            </div>
                            <a href="shop.html"><img src="{{ asset('frontend_assets/img/images/jo_img.jpg') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- choose-product-area-end -->

        <!-- flash-product-area -->
        <section class="flash-product-area pt-90 pb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-8 col-sm-10">
                        <div class="slider-add-banner banner-active mb-45">
                            <div class="add-banner">
                                <div class="add-banner-img">
                                    <a href="shop.html"><img src="{{ asset('frontend_assets/img/images/add_banner_slider01.jpg') }}" alt=""></a>
                                </div>
                                <div class="add-banner-content">
                                    <span>35% discount</span>
                                    <h2 class="title">Smart Phone</h2>
                                    <p>Reference site about</p>
                                    <a href="shop.html" class="btn">shop now</a>
                                </div>
                            </div>
                            <div class="add-banner">
                                <div class="add-banner-img">
                                    <a href="shop.html"><img src="{{ asset('frontend_assets/img/images/add_banner_slider01.jpg') }}" alt=""></a>
                                </div>
                                <div class="add-banner-content">
                                    <span>35% discount</span>
                                    <h2 class="title">Smart Phone</h2>
                                    <p>Reference site about</p>
                                    <a href="shop.html" class="btn">shop now</a>
                                </div>
                            </div>
                            <div class="add-banner">
                                <div class="add-banner-img">
                                    <a href="shop.html"><img src="{{ asset('frontend_assets/img/images/add_banner_slider01.jpg') }}" alt=""></a>
                                </div>
                                <div class="add-banner-content">
                                    <span>35% discount</span>
                                    <h2 class="title">Smart Phone</h2>
                                    <p>Reference site about</p>
                                    <a href="shop.html" class="btn">shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="trending-product">
                            <h3 class="title">Trending Products</h3>
                            <ul>
                                @foreach ($trending_products as $trending_product)
                                    <li class="trending-product-item mb-30">
                                        <div class="thumb">
                                            <a href="{{ route('product.detail',$trending_product->slug) }}" wire:navigate><img src="{{ asset('product_image').'/'.$trending_product->image }}" alt="{{ $trending_product->title }}" width="100%"></a>
                                        </div>
                                        <div class="content">
                                            <h6 class="title"><a href="{{ route('product.detail',$trending_product->slug) }}" wire:navigate>{{$trending_product->title}}</a></h6>
                                            <h4 class="price">${{$trending_product->price}} <del>$29.08</del></h4>
                                            <div class="content-bottom">
                                                <ul>
                                                    <li>1k+ Orders ~</li>
                                                    <li><i class="fa-solid fa-star"></i>4.7</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-12">
                        <div class="add-banner-thumb mb-55">
                            <a href="#"><img src="{{ asset('frontend_assets/img/images/add_banner_img02.jpg') }}" alt=""></a>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="section-title title-style-two mb-30">
                                    <h4 class="title">Flash Sale Today!</h4>
                                </div>
                            </div>
                            {{-- <div class="col-lg-6 col-md-6">
                                <div class="product-menu-nav">
                                    <button class="active" data-filter="*">Flash</button>
                                    <button class="" data-filter=".cat-one">Popular</button>
                                    <button class="" data-filter=".cat-two">Top Rate</button>
                                </div>
                            </div> --}}
                        </div>
                        <div class="flash-product-item-wrap">
                            <div class="row flash-isotope-active">
                                
                                @foreach ($flash_sales as $flash_sale)
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 grid-item grid-sizer cat-two">
                                        <div class="product-item-two mb-30">
                                            <div class="product-thumb">
                                                <a  href="{{ route('product.detail',$flash_sale->slug) }}" wire:navigate><img src="{{ asset('product_image').'/'.$flash_sale->image }}" alt="{{ $flash_sale->title }}" width="100%" height="200px"></a>
                                            </div>
                                            <div class="product-content">
                                                <h6 class="title"><a href="{{ route('product.detail',$flash_sale->slug) }}" wire:navigate>{{$flash_sale->title}}</a></h6>
                                                <h4 class="price">Rs{{$flash_sale->price}} <span>-35%</span></h4>
                                                <div class="content-bottom">
                                                    <ul>
                                                        <li>1k+ Orders ~</li>
                                                        <li><i class="fa-solid fa-star"></i>4.9</li>
                                                    </ul>
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
        <!-- flash-product-area-end -->

        <!-- best-sell-product-area -->
        <section class="best-sell-product-area pt-80 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-60">
                            <h2 class="title">Find Best Seller Vendor</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="best-sell-nav">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all"
                                        type="button" role="tab" aria-controls="all" aria-selected="true">
                                            <i class="flaticon-shipping"></i>
                                            <span>All Categories</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="watch-tab" data-bs-toggle="tab" data-bs-target="#watch"
                                        type="button" role="tab" aria-controls="watch" aria-selected="false">
                                            <i class="flaticon-smartwatch"></i>
                                            <span>smart watch</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="electronics-tab" data-bs-toggle="tab"
                                        data-bs-target="#electronics" type="button" role="tab" aria-controls="electronics"
                                        aria-selected="false">
                                            <i class="flaticon-lamp"></i>
                                            <span>Consumer Electronics</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="appliance-tab" data-bs-toggle="tab" data-bs-target="#appliance"
                                        type="button" role="tab" aria-controls="appliance" aria-selected="false">
                                            <i class="flaticon-kitchen-utensils"></i>
                                            <span>home appliance</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="shoes-tab" data-bs-toggle="tab" data-bs-target="#shoes"
                                        type="button" role="tab" aria-controls="shoes" aria-selected="false">
                                            <i class="flaticon-high-heels-1"></i>
                                            <span>Shoes & Accessories</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="sports-tab" data-bs-toggle="tab" data-bs-target="#sports"
                                        type="button" role="tab" aria-controls="sports" aria-selected="false">
                                            <i class="flaticon-sport-equipment"></i>
                                            <span>Sports & Entertainment</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                                <div class="row mb-20">
                                    <div class="col-xl-12">
                                        <div class="vendor-wrap">
                                            <div class="row">
                                                <div class="col-xl-5 col-lg-8">
                                                    <div class="vendor-content">
                                                        <div class="content-top mb-20">
                                                            <div class="icon">
                                                                <i class="fa-solid fa-sliders"></i>
                                                            </div>
                                                            <div class="content">
                                                                <h2 class="title"><a href="#">Theme Beyond Technology.Ltd</a>
                                                                </h2>
                                                                <ul>
                                                                    <li>2 year</li>
                                                                    <li><a href="#">Verified <img
                                                                                src="{{ asset('frontend_assets/img/icon/verified_icon.png') }}"
                                                                                alt=""></a></li>
                                                                    <li>40k Customer</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="ranking mb-30">
                                                            <ul>
                                                                <li>No.1 Vendor Rankings</li>
                                                                <li>Annual Sales $45,000,00</li>
                                                            </ul>
                                                        </div>
                                                        <div class="vendor-services">
                                                            <ul>
                                                                <li>
                                                                    <h2 class="title">+/- 5 hr</h2>
                                                                    <p>Response Time</p>
                                                                </li>
                                                                <li>
                                                                    <h2 class="title">5,000,00+</h2>
                                                                    <p>Transtctions</p>
                                                                </li>
                                                                <li>
                                                                    <h2 class="title">100%</h2>
                                                                    <p>On-time delivery</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-7 col-lg-12">
                                                    <div class="vendor-product-wrap">
                                                        <ul>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img
                                                                            src="{{ asset('frontend_assets/img/product/vendor_product01.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">Gloves $9.08</a></h2>
                                                                    <span>15 (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img
                                                                            src="{{ asset('frontend_assets/img/product/vendor_product02.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">watch $8.08</a></h2>
                                                                    <span>15k+ (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img
                                                                            src="{{ asset('frontend_assets/img/product/vendor_product03.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">Shoes $9.08</a></h2>
                                                                    <span>03 (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img
                                                                            src="{{ asset('frontend_assets/img/product/vendor_product04.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">Cap $5.08</a></h2>
                                                                    <span>15k+ (Sale)</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="vendor-wrap">
                                            <div class="row">
                                                <div class="col-xl-5 col-lg-8">
                                                    <div class="vendor-content">
                                                        <div class="content-top mb-20">
                                                            <div class="icon">
                                                                <i class="fa-solid fa-shield"></i>
                                                            </div>
                                                            <div class="content">
                                                                <h2 class="title"><a href="#">Olle Technology.Ltd</a></h2>
                                                                <ul>
                                                                    <li>1 year</li>
                                                                    <li><a href="#">Verified <img
                                                                                src="{{ asset('frontend_assets/img/icon/verified_icon.png') }}"
                                                                                alt=""></a>
                                                                    </li>
                                                                    <li>13k Customer</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="ranking mb-30">
                                                            <ul>
                                                                <li>No.1 Vendor Rankings</li>
                                                                <li>Annual Sales $5,000,00</li>
                                                            </ul>
                                                        </div>
                                                        <div class="vendor-services">
                                                            <ul>
                                                                <li>
                                                                    <h2 class="title">+/- 5 hr</h2>
                                                                    <p>Response Time</p>
                                                                </li>
                                                                <li>
                                                                    <h2 class="title">200,00+</h2>
                                                                    <p>Transtctions</p>
                                                                </li>
                                                                <li>
                                                                    <h2 class="title">100%</h2>
                                                                    <p>On-time delivery</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-7 col-lg-12">
                                                    <div class="vendor-product-wrap">
                                                        <ul>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img
                                                                            src="{{ asset('frontend_assets/img/product/vendor_product05.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">Gloves $9.08</a></h2>
                                                                    <span>15 (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img
                                                                            src="{{ asset('frontend_assets/img/product/vendor_product06.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">watch $8.08</a></h2>
                                                                    <span>15k+ (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img
                                                                            src="{{ asset('frontend_assets/img/product/vendor_product07.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">Shoes $9.08</a></h2>
                                                                    <span>03 (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img
                                                                            src="{{ asset('frontend_assets/img/product/vendor_product08.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">Cap $5.08</a></h2>
                                                                    <span>15k+ (Sale)</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="watch" role="tabpanel" aria-labelledby="watch-tab">
                                <div class="row mb-20">
                                    <div class="col-xl-12">
                                        <div class="vendor-wrap">
                                            <div class="row">
                                                <div class="col-xl-5 col-lg-8">
                                                    <div class="vendor-content">
                                                        <div class="content-top mb-20">
                                                            <div class="icon">
                                                                <i class="fa-solid fa-shield"></i>
                                                            </div>
                                                            <div class="content">
                                                                <h2 class="title"><a href="#">Fashion Max</a></h2>
                                                                <ul>
                                                                    <li>1 year</li>
                                                                    <li><a href="#">Verified <img src="{{ asset('frontend_assets/img/icon/verified_icon.png') }}" alt=""></a>
                                                                    </li>
                                                                    <li>13k Customer</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="ranking mb-30">
                                                            <ul>
                                                                <li>No.1 Vendor Rankings</li>
                                                                <li>Annual Sales $5,000,00</li>
                                                            </ul>
                                                        </div>
                                                        <div class="vendor-services">
                                                            <ul>
                                                                <li>
                                                                    <h2 class="title">+/- 5 hr</h2>
                                                                    <p>Response Time</p>
                                                                </li>
                                                                <li>
                                                                    <h2 class="title">200,00+</h2>
                                                                    <p>Transtctions</p>
                                                                </li>
                                                                <li>
                                                                    <h2 class="title">100%</h2>
                                                                    <p>On-time delivery</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-7 col-lg-12">
                                                    <div class="vendor-product-wrap">
                                                        <ul>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="blog-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product09.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="blog-details.html">Shoes $9.08</a></h2>
                                                                    <span>15 (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="blog-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product10.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="blog-details.html">cap $8.08</a></h2>
                                                                    <span>15k+ (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="blog-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product11.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="blog-details.html">watch $9.08</a></h2>
                                                                    <span>03 (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="blog-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product12.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="blog-details.html">watch $5.08</a></h2>
                                                                    <span>15k+ (Sale)</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="vendor-wrap">
                                            <div class="row">
                                                <div class="col-xl-5 col-lg-8">
                                                    <div class="vendor-content">
                                                        <div class="content-top mb-20">
                                                            <div class="icon">
                                                                <i class="fa-solid fa-shield"></i>
                                                            </div>
                                                            <div class="content">
                                                                <h2 class="title"><a href="#">Olle Technology.Ltd</a></h2>
                                                                <ul>
                                                                    <li>1 year</li>
                                                                    <li><a href="#">Verified <img src="{{ asset('frontend_assets/img/icon/verified_icon.png') }}" alt=""></a>
                                                                    </li>
                                                                    <li>13k Customer</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="ranking mb-30">
                                                            <ul>
                                                                <li>No.1 Vendor Rankings</li>
                                                                <li>Annual Sales $5,000,00</li>
                                                            </ul>
                                                        </div>
                                                        <div class="vendor-services">
                                                            <ul>
                                                                <li>
                                                                    <h2 class="title">+/- 5 hr</h2>
                                                                    <p>Response Time</p>
                                                                </li>
                                                                <li>
                                                                    <h2 class="title">200,00+</h2>
                                                                    <p>Transtctions</p>
                                                                </li>
                                                                <li>
                                                                    <h2 class="title">100%</h2>
                                                                    <p>On-time delivery</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-7 col-lg-12">
                                                    <div class="vendor-product-wrap">
                                                        <ul>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product05.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">Gloves $9.08</a></h2>
                                                                    <span>15 (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product06.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">watch $8.08</a></h2>
                                                                    <span>15k+ (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product07.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">Shoes $9.08</a></h2>
                                                                    <span>03 (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product08.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">Cap $5.08</a></h2>
                                                                    <span>15k+ (Sale)</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="electronics" role="tabpanel" aria-labelledby="electronics-tab">
                                <div class="row mb-20">
                                    <div class="col-xl-12">
                                        <div class="vendor-wrap">
                                            <div class="row">
                                                <div class="col-xl-5 col-lg-8">
                                                    <div class="vendor-content">
                                                        <div class="content-top mb-20">
                                                            <div class="icon">
                                                                <i class="fa-solid fa-shield"></i>
                                                            </div>
                                                            <div class="content">
                                                                <h2 class="title"><a href="#">Olle Technology.Ltd</a></h2>
                                                                <ul>
                                                                    <li>1 year</li>
                                                                    <li><a href="#">Verified <img src="{{ asset('frontend_assets/img/icon/verified_icon.png') }}" alt=""></a>
                                                                    </li>
                                                                    <li>13k Customer</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="ranking mb-30">
                                                            <ul>
                                                                <li>No.1 Vendor Rankings</li>
                                                                <li>Annual Sales $5,000,00</li>
                                                            </ul>
                                                        </div>
                                                        <div class="vendor-services">
                                                            <ul>
                                                                <li>
                                                                    <h2 class="title">+/- 5 hr</h2>
                                                                    <p>Response Time</p>
                                                                </li>
                                                                <li>
                                                                    <h2 class="title">200,00+</h2>
                                                                    <p>Transtctions</p>
                                                                </li>
                                                                <li>
                                                                    <h2 class="title">100%</h2>
                                                                    <p>On-time delivery</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-7 col-lg-12">
                                                    <div class="vendor-product-wrap">
                                                        <ul>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product05.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">Gloves $9.08</a></h2>
                                                                    <span>15 (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product06.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">watch $8.08</a></h2>
                                                                    <span>15k+ (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product07.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">Shoes $9.08</a></h2>
                                                                    <span>03 (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product08.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">Cap $5.08</a></h2>
                                                                    <span>15k+ (Sale)</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="vendor-wrap">
                                            <div class="row">
                                                <div class="col-xl-5 col-lg-8">
                                                    <div class="vendor-content">
                                                        <div class="content-top mb-20">
                                                            <div class="icon">
                                                                <i class="fa-solid fa-shield"></i>
                                                            </div>
                                                            <div class="content">
                                                                <h2 class="title"><a href="#">Fashion Max</a></h2>
                                                                <ul>
                                                                    <li>1 year</li>
                                                                    <li><a href="#">Verified <img src="{{ asset('frontend_assets/img/icon/verified_icon.png') }}" alt=""></a>
                                                                    </li>
                                                                    <li>13k Customer</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="ranking mb-30">
                                                            <ul>
                                                                <li>No.1 Vendor Rankings</li>
                                                                <li>Annual Sales $5,000,00</li>
                                                            </ul>
                                                        </div>
                                                        <div class="vendor-services">
                                                            <ul>
                                                                <li>
                                                                    <h2 class="title">+/- 5 hr</h2>
                                                                    <p>Response Time</p>
                                                                </li>
                                                                <li>
                                                                    <h2 class="title">200,00+</h2>
                                                                    <p>Transtctions</p>
                                                                </li>
                                                                <li>
                                                                    <h2 class="title">100%</h2>
                                                                    <p>On-time delivery</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-7 col-lg-12">
                                                    <div class="vendor-product-wrap">
                                                        <ul>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="blog-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product09.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="blog-details.html">Shoes $9.08</a></h2>
                                                                    <span>15 (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="blog-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product10.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="blog-details.html">cap $8.08</a></h2>
                                                                    <span>15k+ (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="blog-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product11.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="blog-details.html">watch $9.08</a></h2>
                                                                    <span>03 (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="blog-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product12.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="blog-details.html">watch $5.08</a></h2>
                                                                    <span>15k+ (Sale)</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="appliance" role="tabpanel" aria-labelledby="appliance-tab">
                                <div class="row mb-20">
                                    <div class="col-xl-12">
                                        <div class="vendor-wrap">
                                            <div class="row">
                                                <div class="col-xl-5 col-lg-8">
                                                    <div class="vendor-content">
                                                        <div class="content-top mb-20">
                                                            <div class="icon">
                                                                <i class="fa-solid fa-sliders"></i>
                                                            </div>
                                                            <div class="content">
                                                                <h2 class="title"><a href="#">Theme Beyond Technology.Ltd</a>
                                                                </h2>
                                                                <ul>
                                                                    <li>2 year</li>
                                                                    <li><a href="#">Verified <img src="{{ asset('frontend_assets/img/icon/verified_icon.png') }}" alt=""></a>
                                                                    </li>
                                                                    <li>40k Customer</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="ranking mb-30">
                                                            <ul>
                                                                <li>No.1 Vendor Rankings</li>
                                                                <li>Annual Sales $45,000,00</li>
                                                            </ul>
                                                        </div>
                                                        <div class="vendor-services">
                                                            <ul>
                                                                <li>
                                                                    <h2 class="title">+/- 5 hr</h2>
                                                                    <p>Response Time</p>
                                                                </li>
                                                                <li>
                                                                    <h2 class="title">5,000,00+</h2>
                                                                    <p>Transtctions</p>
                                                                </li>
                                                                <li>
                                                                    <h2 class="title">100%</h2>
                                                                    <p>On-time delivery</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-7 col-lg-12">
                                                    <div class="vendor-product-wrap">
                                                        <ul>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product01.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">Gloves $9.08</a></h2>
                                                                    <span>15 (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product02.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">watch $8.08</a></h2>
                                                                    <span>15k+ (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product03.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">Shoes $9.08</a></h2>
                                                                    <span>03 (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product04.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">Cap $5.08</a></h2>
                                                                    <span>15k+ (Sale)</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="vendor-wrap">
                                            <div class="row">
                                                <div class="col-xl-5 col-lg-8">
                                                    <div class="vendor-content">
                                                        <div class="content-top mb-20">
                                                            <div class="icon">
                                                                <i class="fa-solid fa-shield"></i>
                                                            </div>
                                                            <div class="content">
                                                                <h2 class="title"><a href="#">Olle Technology.Ltd</a></h2>
                                                                <ul>
                                                                    <li>1 year</li>
                                                                    <li><a href="#">Verified <img src="{{ asset('frontend_assets/img/icon/verified_icon.png') }}" alt=""></a>
                                                                    </li>
                                                                    <li>13k Customer</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="ranking mb-30">
                                                            <ul>
                                                                <li>No.1 Vendor Rankings</li>
                                                                <li>Annual Sales $5,000,00</li>
                                                            </ul>
                                                        </div>
                                                        <div class="vendor-services">
                                                            <ul>
                                                                <li>
                                                                    <h2 class="title">+/- 5 hr</h2>
                                                                    <p>Response Time</p>
                                                                </li>
                                                                <li>
                                                                    <h2 class="title">200,00+</h2>
                                                                    <p>Transtctions</p>
                                                                </li>
                                                                <li>
                                                                    <h2 class="title">100%</h2>
                                                                    <p>On-time delivery</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-7 col-lg-12">
                                                    <div class="vendor-product-wrap">
                                                        <ul>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product05.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">Gloves $9.08</a></h2>
                                                                    <span>15 (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product06.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">watch $8.08</a></h2>
                                                                    <span>15k+ (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product07.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">Shoes $9.08</a></h2>
                                                                    <span>03 (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product08.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">Cap $5.08</a></h2>
                                                                    <span>15k+ (Sale)</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="shoes" role="tabpanel" aria-labelledby="shoes-tab">
                                <div class="row mb-20">
                                    <div class="col-xl-12">
                                        <div class="vendor-wrap">
                                            <div class="row">
                                                <div class="col-xl-5 col-lg-8">
                                                    <div class="vendor-content">
                                                        <div class="content-top mb-20">
                                                            <div class="icon">
                                                                <i class="fa-solid fa-shield"></i>
                                                            </div>
                                                            <div class="content">
                                                                <h2 class="title"><a href="#">Olle Technology.Ltd</a></h2>
                                                                <ul>
                                                                    <li>1 year</li>
                                                                    <li><a href="#">Verified <img src="{{ asset('frontend_assets/img/icon/verified_icon.png') }}" alt=""></a>
                                                                    </li>
                                                                    <li>13k Customer</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="ranking mb-30">
                                                            <ul>
                                                                <li>No.1 Vendor Rankings</li>
                                                                <li>Annual Sales $5,000,00</li>
                                                            </ul>
                                                        </div>
                                                        <div class="vendor-services">
                                                            <ul>
                                                                <li>
                                                                    <h2 class="title">+/- 5 hr</h2>
                                                                    <p>Response Time</p>
                                                                </li>
                                                                <li>
                                                                    <h2 class="title">200,00+</h2>
                                                                    <p>Transtctions</p>
                                                                </li>
                                                                <li>
                                                                    <h2 class="title">100%</h2>
                                                                    <p>On-time delivery</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-7 col-lg-12">
                                                    <div class="vendor-product-wrap">
                                                        <ul>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product05.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">Gloves $9.08</a></h2>
                                                                    <span>15 (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product06.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">watch $8.08</a></h2>
                                                                    <span>15k+ (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product07.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">Shoes $9.08</a></h2>
                                                                    <span>03 (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product08.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">Cap $5.08</a></h2>
                                                                    <span>15k+ (Sale)</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="vendor-wrap">
                                            <div class="row">
                                                <div class="col-xl-5 col-lg-8">
                                                    <div class="vendor-content">
                                                        <div class="content-top mb-20">
                                                            <div class="icon">
                                                                <i class="fa-solid fa-sliders"></i>
                                                            </div>
                                                            <div class="content">
                                                                <h2 class="title"><a href="#">Theme Beyond Technology.Ltd</a>
                                                                </h2>
                                                                <ul>
                                                                    <li>2 year</li>
                                                                    <li><a href="#">Verified <img src="{{ asset('frontend_assets/img/icon/verified_icon.png') }}" alt=""></a>
                                                                    </li>
                                                                    <li>40k Customer</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="ranking mb-30">
                                                            <ul>
                                                                <li>No.1 Vendor Rankings</li>
                                                                <li>Annual Sales $45,000,00</li>
                                                            </ul>
                                                        </div>
                                                        <div class="vendor-services">
                                                            <ul>
                                                                <li>
                                                                    <h2 class="title">+/- 5 hr</h2>
                                                                    <p>Response Time</p>
                                                                </li>
                                                                <li>
                                                                    <h2 class="title">5,000,00+</h2>
                                                                    <p>Transtctions</p>
                                                                </li>
                                                                <li>
                                                                    <h2 class="title">100%</h2>
                                                                    <p>On-time delivery</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-7 col-lg-12">
                                                    <div class="vendor-product-wrap">
                                                        <ul>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product01.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">Gloves $9.08</a></h2>
                                                                    <span>15 (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product02.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">watch $8.08</a></h2>
                                                                    <span>15k+ (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product03.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">Shoes $9.08</a></h2>
                                                                    <span>03 (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product04.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">Cap $5.08</a></h2>
                                                                    <span>15k+ (Sale)</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sports" role="tabpanel" aria-labelledby="sports-tab">
                                <div class="row mb-20">
                                    <div class="col-xl-12">
                                        <div class="vendor-wrap">
                                            <div class="row">
                                                <div class="col-xl-5 col-lg-8">
                                                    <div class="vendor-content">
                                                        <div class="content-top mb-20">
                                                            <div class="icon">
                                                                <i class="fa-solid fa-shield"></i>
                                                            </div>
                                                            <div class="content">
                                                                <h2 class="title"><a href="#">Fashion Max</a></h2>
                                                                <ul>
                                                                    <li>1 year</li>
                                                                    <li><a href="#">Verified <img src="{{ asset('frontend_assets/img/icon/verified_icon.png') }}" alt=""></a>
                                                                    </li>
                                                                    <li>13k Customer</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="ranking mb-30">
                                                            <ul>
                                                                <li>No.1 Vendor Rankings</li>
                                                                <li>Annual Sales $5,000,00</li>
                                                            </ul>
                                                        </div>
                                                        <div class="vendor-services">
                                                            <ul>
                                                                <li>
                                                                    <h2 class="title">+/- 5 hr</h2>
                                                                    <p>Response Time</p>
                                                                </li>
                                                                <li>
                                                                    <h2 class="title">200,00+</h2>
                                                                    <p>Transtctions</p>
                                                                </li>
                                                                <li>
                                                                    <h2 class="title">100%</h2>
                                                                    <p>On-time delivery</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-7 col-lg-12">
                                                    <div class="vendor-product-wrap">
                                                        <ul>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="blog-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product09.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="blog-details.html">Shoes $9.08</a></h2>
                                                                    <span>15 (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="blog-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product10.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="blog-details.html">cap $8.08</a></h2>
                                                                    <span>15k+ (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="blog-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product11.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="blog-details.html">watch $9.08</a></h2>
                                                                    <span>03 (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="blog-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product12.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="blog-details.html">watch $5.08</a></h2>
                                                                    <span>15k+ (Sale)</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="vendor-wrap">
                                            <div class="row">
                                                <div class="col-xl-5 col-lg-8">
                                                    <div class="vendor-content">
                                                        <div class="content-top mb-20">
                                                            <div class="icon">
                                                                <i class="fa-solid fa-shield"></i>
                                                            </div>
                                                            <div class="content">
                                                                <h2 class="title"><a href="#">Olle Technology.Ltd</a></h2>
                                                                <ul>
                                                                    <li>1 year</li>
                                                                    <li><a href="#">Verified <img src="{{ asset('frontend_assets/img/icon/verified_icon.png') }}" alt=""></a>
                                                                    </li>
                                                                    <li>13k Customer</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="ranking mb-30">
                                                            <ul>
                                                                <li>No.1 Vendor Rankings</li>
                                                                <li>Annual Sales $5,000,00</li>
                                                            </ul>
                                                        </div>
                                                        <div class="vendor-services">
                                                            <ul>
                                                                <li>
                                                                    <h2 class="title">+/- 5 hr</h2>
                                                                    <p>Response Time</p>
                                                                </li>
                                                                <li>
                                                                    <h2 class="title">200,00+</h2>
                                                                    <p>Transtctions</p>
                                                                </li>
                                                                <li>
                                                                    <h2 class="title">100%</h2>
                                                                    <p>On-time delivery</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-7 col-lg-12">
                                                    <div class="vendor-product-wrap">
                                                        <ul>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product05.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">Gloves $9.08</a></h2>
                                                                    <span>15 (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product06.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">watch $8.08</a></h2>
                                                                    <span>15k+ (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product07.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">Shoes $9.08</a></h2>
                                                                    <span>03 (Sale)</span>
                                                                </div>
                                                            </li>
                                                            <li class="vendor-product">
                                                                <div class="thumb">
                                                                    <a href="shop-details.html"><img src="{{ asset('frontend_assets/img/product/vendor_product08.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="content">
                                                                    <h2 class="title"><a href="shop-details.html">Cap $5.08</a></h2>
                                                                    <span>15k+ (Sale)</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- best-sell-product-area-end -->

        <!-- features-area -->
        <section class="features-area pt-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="features-item mb-30">
                            <div class="features-thumb">
                                <img src="{{ asset('frontend_assets/img/features/features_img01.jpg') }}" alt="">
                            </div>
                            <div class="features-content">
                                <span>35% discount</span>
                                <h2 class="title"><a href="shop.html">Smart home mixer</a></h2>
                                <p>Giving information on origins random Lipsum generator.</p>
                                <a href="shop.html" class="btn">shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10">
                        <div class="features-item mb-30">
                            <div class="features-thumb">
                                <img src="{{ asset('frontend_assets/img/features/features_img02.jpg') }}" alt="">
                            </div>
                            <div class="features-content white-content">
                                <span>35% discount</span>
                                <h2 class="title"><a href="shop.html">Smart home mixer</a></h2>
                                <p>Giving information on origins random Lipsum generator.</p>
                                <a href="shop.html" class="btn">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features-area-end -->

        <!-- blog-area -->
        <section class="blog-area pt-55 pb-60">
            <div class="container">
                <div class="row mb-40">
                    <div class="col-lg-6 col-md-6">
                        <div class="section-title">
                            <h2 class="title">Most Popular Blog</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="view-btn text-end">
                            <a href="blog.html">View All Post<i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach ($blogs as $blog)
                       @include('frontend.partials.blog-item') 
                    @endforeach
                </div>
            </div>
        </section>
        <!-- blog-area-end -->

        <!-- newsletter-area -->
        <section class="newsletter-area pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="newsletter-wrap">
                            <div class="newsletter-content">
                                <h2 class="title">Sign Up for Weekly <span>Newsletter</span></h2>
                                <p>Get 10% off new collection special Investigationes demonstraverunt</p>
                            </div>
                            <div class="newsletter-form">
                                <form action="#">
                                    <input type="text" placeholder="Your email here...">
                                    <button type="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- newsletter-area-end -->
    </main>
    <!-- main-area-end -->
@endsection
