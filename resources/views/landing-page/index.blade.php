<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Apotek Desta Farma</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{ asset('assets-landing/css/font-icons.css') }}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{ asset('assets-landing/css/plugins.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets-landing/css/style.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('assets-landing/css/responsive.css') }}">
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

    <!-- Body main wrapper start -->
    <div class="body-wrapper">

        <!-- HEADER AREA START (header-5) -->
        <header
            class="ltn__header-area ltn__header-5 ltn__header-logo-and-mobile-menu-in-mobile--- ltn__header-logo-and-mobile-menu--- ltn__header-transparent gradient-color-4---">
            <!-- ltn__header-top-area start -->
            <div class="ltn__header-top-area border-bottom top-area-color-white---">
                @include('landing-page.sections.header')
            </div>
            <!-- ltn__header-top-area end -->
            <!-- ltn__header-middle-area start -->
            <div
                class="ltn__header-middle-area ltn__logo-right-menu-option ltn__header-row-bg-white ltn__header-padding ltn__header-sticky ltn__sticky-bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="site-logo-wrap">
                                <div class="site-logo">
                                    <a href="{{ asset('/') }}"><img src="{{ asset('logo.jpeg') }}" width="200px"
                                            alt="Logo"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col header-menu-column menu-color-white---">
                            <div class="header-menu d-none d-xl-block">
                                <nav>
                                    <div class="ltn__main-menu">
                                        @include('landing-page.sections.navbar')
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="col--- ltn__header-options ltn__header-options-2 mb-sm-20">
                            <!-- header-search-1 -->
                            <div class="header-search-wrap">
                                <div class="header-search-1">
                                    <div class="search-icon">
                                        <i class="icon-search for-search-show"></i>
                                        <i class="icon-cancel  for-search-close"></i>
                                    </div>
                                </div>
                                <div class="header-search-1-form">
                                    <form id="#" method="get" action="#">
                                        <input type="text" name="search" value=""
                                            placeholder="Search here..." />
                                        <button type="submit">
                                            <span><i class="icon-search"></i></span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <!-- user-menu -->
                            <div class="ltn__drop-menu user-menu">
                                <ul>
                                    <li>
                                        <a href="#"><i class="icon-user"></i></a>
                                        <ul>
                                            <li><a href="login.html">Sign in</a></li>
                                            <li><a href="register.html">Register</a></li>
                                            <li><a href="account.html">My Account</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- mini-cart -->
                            <div class="mini-cart-icon">
                                <a href="#ltn__utilize-cart-menu" class="ltn__utilize-toggle">
                                    <i class="icon-shopping-cart"></i>
                                    <sup>2</sup>
                                </a>
                            </div>
                            <!-- mini-cart -->
                            <!-- Mobile Menu Button -->
                            <div class="mobile-menu-toggle d-xl-none">
                                <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                    <svg viewBox="0 0 800 600">
                                        <path
                                            d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                            id="top"></path>
                                        <path d="M300,320 L540,320" id="middle"></path>
                                        <path
                                            d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                            id="bottom"
                                            transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__header-middle-area end -->
        </header>
        <!-- HEADER AREA END -->

        <!-- Utilize Cart Menu Start -->
        <div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
            <div class="ltn__utilize-menu-inner ltn__scrollbar">
                <div class="ltn__utilize-menu-head">
                    <span class="ltn__utilize-menu-title">Cart</span>
                    <button class="ltn__utilize-close">×</button>
                </div>
                <div class="mini-cart-product-area ltn__scrollbar">
                    <div class="mini-cart-item clearfix">
                        <div class="mini-cart-img">
                            <a href="#"><img src="{{ asset('assets-landing/img/product/1.png') }}"
                                    alt="Image"></a>
                            <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                        </div>
                        <div class="mini-cart-info">
                            <h6><a href="#">Antiseptic Spray</a></h6>
                            <span class="mini-cart-quantity">1 x $65.00</span>
                        </div>
                    </div>
                    <div class="mini-cart-item clearfix">
                        <div class="mini-cart-img">
                            <a href="#"><img src="{{ asset('assets-landing/img/product/2.png') }}"
                                    alt="Image"></a>
                            <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                        </div>
                        <div class="mini-cart-info">
                            <h6><a href="#">Digital Stethoscope</a></h6>
                            <span class="mini-cart-quantity">1 x $85.00</span>
                        </div>
                    </div>
                    <div class="mini-cart-item clearfix">
                        <div class="mini-cart-img">
                            <a href="#"><img src="{{ asset('assets-landing/img/product/3.png') }}"
                                    alt="Image"></a>
                            <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                        </div>
                        <div class="mini-cart-info">
                            <h6><a href="#">Cosmetic Containers</a></h6>
                            <span class="mini-cart-quantity">1 x $92.00</span>
                        </div>
                    </div>
                    <div class="mini-cart-item clearfix">
                        <div class="mini-cart-img">
                            <a href="#"><img src="{{ asset('assets-landing/img/product/4.png') }}"
                                    alt="Image"></a>
                            <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                        </div>
                        <div class="mini-cart-info">
                            <h6><a href="#">Thermometer Gun</a></h6>
                            <span class="mini-cart-quantity">1 x $68.00</span>
                        </div>
                    </div>
                </div>
                <div class="mini-cart-footer">
                    <div class="mini-cart-sub-total">
                        <h5>Subtotal: <span>$310.00</span></h5>
                    </div>
                    <div class="btn-wrapper">
                        <a href="cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                        <a href="cart.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                    </div>
                    <p>Free Shipping on All Orders Over $100!</p>
                </div>

            </div>
        </div>
        <!-- Utilize Cart Menu End -->

        <!-- Utilize Mobile Menu Start -->
        <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
            <div class="ltn__utilize-menu-inner ltn__scrollbar">
                <div class="ltn__utilize-menu-head">
                    <div class="site-logo">
                        <a href="index.html"><img src="{{ asset('logo.jpeg') }}" alt="Logo"></a>
                    </div>
                    <button class="ltn__utilize-close">×</button>
                </div>
                <div class="ltn__utilize-menu-search-form">
                    <form action="#">
                        <input type="text" placeholder="Search...">
                        <button><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="ltn__utilize-menu">
                    @include('landing-page.sections.navbar')
                </div>
                <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
                    <ul>
                        <li>
                            <a href="account.html" title="My Account">
                                <span class="utilize-btn-icon">
                                    <i class="far fa-user"></i>
                                </span>
                                My Account
                            </a>
                        </li>
                        <li>
                            <a href="wishlist.html" title="Wishlist">
                                <span class="utilize-btn-icon">
                                    <i class="far fa-heart"></i>
                                    <sup>3</sup>
                                </span>
                                Wishlist
                            </a>
                        </li>
                        <li>
                            <a href="cart.html" title="Shoping Cart">
                                <span class="utilize-btn-icon">
                                    <i class="fas fa-shopping-cart"></i>
                                    <sup>5</sup>
                                </span>
                                Shoping Cart
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="ltn__social-media-2">
                    <ul>
                        <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Utilize Mobile Menu End -->

        <div class="ltn__utilize-overlay"></div>

        <!-- SLIDER AREA START (slider-3) -->
        <div class="ltn__slider-area ltn__slider-3  section-bg-1">
            <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
                <!-- ltn__slide-item -->
                <div class="ltn__slide-item ltn__slide-item-2  ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60---"
                    data-bs-bg="{{ asset('assets-landing/img/slider/slider-1.jpg') }}">
                    <div class="ltn__slide-item-inner  text-left">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 align-self-center">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <h6 class="slide-sub-title white-color--- animated"><span><i
                                                        class="fas fa-syringe"></i></span> 100% genuine Products</h6>
                                            <h1 class="slide-title animated ">Get 20% Discount <br>Of N95 Mask</h1>
                                            <div class="slide-brief animated">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore.</p>
                                            </div>
                                            <div class="btn-wrapper animated">
                                                <a href="shop.html" class="theme-btn-1 btn btn-effect-1">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ltn__slide-item -->
                <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60---"
                    data-bs-bg="{{ asset('assets-landing/img/slider/slider-2.jpg') }}">
                    <div class="ltn__slide-item-inner text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 align-self-center">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <div class="slide-video mb-50 d-none">
                                                <a class="ltn__video-icon-2 ltn__video-icon-2-border"
                                                    href="https://www.youtube.com/embed/tlThdr3O5Qo"
                                                    data-rel="lightcase:myCollection">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>
                                            <h6 class="slide-sub-title white-color--- animated"><span><i
                                                        class="fas fa-syringe"></i></span> 100% genuine Products</h6>
                                            <h1 class="slide-title animated ">Get 20% Discount <br>Of N95 Mask</h1>
                                            <div class="slide-brief animated">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore.</p>
                                            </div>
                                            <div class="btn-wrapper animated">
                                                <a href="shop.html" class="theme-btn-1 btn btn-effect-1">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ltn__slide-item -->
                <div class="ltn__slide-item ltn__slide-item-2  ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60---"
                    data-bs-bg="{{ asset('assets-landing/img/slider/slider-3.jpg') }}">
                    <div class="ltn__slide-item-inner  text-right text-end">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 align-self-center">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <h6 class="slide-sub-title white-color--- animated"><span><i
                                                        class="fas fa-syringe"></i></span> 100% genuine Products</h6>
                                            <h1 class="slide-title animated ">Get 20% Discount <br>Of N95 Mask</h1>
                                            <div class="slide-brief animated">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore.</p>
                                            </div>
                                            <div class="btn-wrapper animated">
                                                <a href="shop.html" class="theme-btn-1 btn btn-effect-1">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
        <!-- SLIDER AREA END -->

        <!-- CATEGORY AREA START -->
        <div class="ltn__category-area section-bg-1-- pt-50 pb-90">
            <div class="container">
                <div class="row ltn__category-slider-active-six slick-arrow-1 border-bottom">
                    <div class="col-12">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a href="shop.html">
                                    <i class="fas fa-notes-medical"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a href="shop.html">Best Deals</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a href="shop.html">
                                    <i class="fas fa-box-tissue"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a href="shop.html">Germs Pads</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a href="shop.html">
                                    <i class="fas fa-pump-medical"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a href="shop.html">Accessories</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a href="shop.html">
                                    <i class="fas fa-bong"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a href="shop.html">Medicine Cap</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a href="shop.html">
                                    <i class="fas fa-tooth"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a href="shop.html">Dental Item</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a href="shop.html">
                                    <i class="fas fa-microscope"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a href="shop.html">Best Deals</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a href="shop.html">
                                    <i class="fas fa-syringe"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a href="shop.html">All Products</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a href="shop.html">
                                    <i class="fas fa-stethoscope"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a href="shop.html">Germs Pads</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a href="shop.html">
                                    <i class="fas fa-hand-holding-medical"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a href="shop.html">Accessories</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a href="shop.html">
                                    <i class="fas fa-procedures"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a href="shop.html">Medicine Cap</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CATEGORY AREA END -->

        <!-- ABOUT US AREA START -->
        <div class="ltn__about-us-area pt-25 pb-120 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="about-us-img-wrap about-img-left">
                            <img src="{{ asset('assets-landing/img/others/9.png') }}" alt="About Us Image">
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="about-us-info-wrap">
                            <div class="section-title-area ltn__section-title-2--- mb-30">
                                <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color d-none">About Us
                                </h6>
                                <h1 class="section-title">Your faithful partners Medical Goods</h1>
                                <p>Houzez allow you to design unlimited panels and real estate custom
                                    forms to capture leads and keep record of all information</p>
                            </div>
                            <ul class="ltn__list-item-1 ltn__list-item-1-before--- clearfix">
                                <li><i class="fas fa-check-square"></i> Better security for patient privacy and
                                    information.</li>
                                <li><i class="fas fa-check-square"></i> More products at lower prices.</li>
                                <li><i class="fas fa-check-square"></i> connect customers with the power of eCommerce
                                    at all.</li>
                            </ul>
                            <div class="about-author-info-2 border-top mt-30 pt-20">
                                <ul>
                                    <li>
                                        <div class="about-author-info-2-brief  d-flex">
                                            <div class="author-img">
                                                <img src="{{ asset('assets-landing/img/blog/author.jpg') }}"
                                                    alt="#">
                                            </div>
                                            <div class="author-name-designation">
                                                <h4 class="mb-0">Jerry Henson</h4>
                                                <small>Medical Specialist</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-author-info-2-contact  d-flex">
                                            <div class="about-contact-icon d-flex align-self-center mr-10">
                                                <i class="icon-call"></i>
                                            </div>
                                            <div class="about-author-info-2-contact-info">
                                                <small>Get Support</small>
                                                <h6 class="mb-0">123-456-789-10</h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT US AREA END -->

        <!-- BANNER AREA START -->
        <div class="ltn__banner-area mt-120---">
            <div class="container">
                <div class="row ltn__custom-gutter--- justify-content-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="ltn__banner-item">
                            <div class="ltn__banner-img">
                                <a href="shop.html"><img src="{{ asset('assets-landing/img/banner/1.jpg') }}"
                                        alt="Banner Image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="ltn__banner-item">
                            <div class="ltn__banner-img">
                                <a href="shop.html"><img src="{{ asset('assets-landing/img/banner/2.jpg') }}"
                                        alt="Banner Image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="ltn__banner-item">
                            <div class="ltn__banner-img">
                                <a href="shop.html"><img src="{{ asset('assets-landing/img/banner/3.jpg') }}"
                                        alt="Banner Image"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BANNER AREA END -->

        <!-- PRODUCT AREA START (product-item-3) -->
        <div class="ltn__product-area ltn__product-gutter  no-product-ratting pt-85 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2 text-center">
                            <h1 class="section-title">Featured Products</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-12 col-sm-6">
                                <div class="ltn__banner-item">
                                    <div class="ltn__banner-img">
                                        <a href="shop.html"><img
                                                src="{{ asset('assets-landing/img/banner/11.jpg') }}"
                                                alt="Banner Image"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-6">
                                <div class="ltn__banner-item">
                                    <div class="ltn__banner-img">
                                        <a href="shop.html"><img
                                                src="{{ asset('assets-landing/img/banner/12.jpg') }}"
                                                alt="Banner Image"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row ltn__tab-product-slider-one-active--- slick-arrow-1">
                            <!-- ltn__product-item -->
                            <div class="col-lg-3--- col-md-4 col-sm-6 col-6">
                                <div class="ltn__product-item ltn__product-item-2 text-left">
                                    <div class="product-img">
                                        <a href="product-details.html"><img
                                                src="{{ asset('assets-landing/img/product/1.png') }}"
                                                alt="#"></a>
                                        <div class="product-badge">
                                            <ul>
                                                <li class="sale-badge">New</li>
                                            </ul>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#quick_view_modal">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                        data-bs-target="#add_to_cart_modal">
                                                        <i class="fas fa-shopping-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                        data-bs-target="#liton_wishlist_modal">
                                                        <i class="far fa-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h2 class="product-title"><a href="product-details.html">Antiseptic Spray</a>
                                        </h2>
                                        <div class="product-price">
                                            <span>$32.00</span>
                                            <del>$46.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ltn__product-item -->
                            <div class="col-lg-3--- col-md-4 col-sm-6 col-6">
                                <div class="ltn__product-item ltn__product-item-2 text-left">
                                    <div class="product-img">
                                        <a href="product-details.html"><img
                                                src="{{ asset('assets-landing/img/product/2.png') }}"
                                                alt="#"></a>
                                        <div class="product-hover-action">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#quick_view_modal">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                        data-bs-target="#add_to_cart_modal">
                                                        <i class="fas fa-shopping-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                        data-bs-target="#liton_wishlist_modal">
                                                        <i class="far fa-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h2 class="product-title"><a href="product-details.html">Digital
                                                Stethoscope</a></h2>
                                        <div class="product-price">
                                            <span>$25.00</span>
                                            <del>$35.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ltn__product-item -->
                            <div class="col-lg-3--- col-md-4 col-sm-6 col-6">
                                <div class="ltn__product-item ltn__product-item-2 text-left">
                                    <div class="pr oduct-img">
                                        <a href="product-details.html"><img
                                                src="{{ asset('assets-landing/img/product/3.png') }}"
                                                alt="#"></a>
                                        <div class="product-badge">
                                            <ul>
                                                <li class="sale-badge">New</li>
                                            </ul>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#quick_view_modal">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                        data-bs-target="#add_to_cart_modal">
                                                        <i class="fas fa-shopping-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                        data-bs-target="#liton_wishlist_modal">
                                                        <i class="far fa-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h2 class="product-title"><a href="product-details.html">Cosmetic
                                                Containers</a></h2>
                                        <div class="product-price">
                                            <span>$75.00</span>
                                            <del>$92.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ltn__product-item -->
                            <div class="col-lg-3--- col-md-4 col-sm-6 col-6">
                                <div class="ltn__product-item ltn__product-item-2 text-left">
                                    <div class="product-img">
                                        <a href="product-details.html"><img
                                                src="{{ asset('assets-landing/img/product/4.png') }}"
                                                alt="#"></a>
                                        <div class="product-badge">
                                            <ul>
                                                <li class="sale-badge">New</li>
                                            </ul>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#quick_view_modal">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                        data-bs-target="#add_to_cart_modal">
                                                        <i class="fas fa-shopping-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                        data-bs-target="#liton_wishlist_modal">
                                                        <i class="far fa-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h2 class="product-title"><a href="product-details.html">Cosmetic
                                                Containers</a></h2>
                                        <div class="product-price">
                                            <span>$78.00</span>
                                            <del>$85.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ltn__product-item -->
                            <div class="col-lg-3--- col-md-4 col-sm-6 col-6">
                                <div class=" ltn__product-item ltn__product-item-2 text-left">
                                    <div class="product-img">
                                        <a href="product-details.html"><img
                                                src="{{ asset('assets-landing/img/product/5.png') }}"
                                                alt="#"></a>
                                        <div class="product-badge">
                                            <ul>
                                                <li class="sale-badge">New</li>
                                            </ul>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#quick_view_modal">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                        data-bs-target="#add_to_cart_modal">
                                                        <i class="fas fa-shopping-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                        data-bs-target="#liton_wishlist_modal">
                                                        <i class="far fa-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h2 class="product-title"><a href="product-details.html">Blue Hand Gloves</a>
                                        </h2>
                                        <div class="product-price">
                                            <span>$150.00</span>
                                            <del>$180.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ltn__product-item -->
                            <div class="col-lg-3--- col-md-4 col-sm-6 co l-6">
                                <div class="ltn__product-item ltn__product-item-2 text-left">
                                    <div class="product-img">
                                        <a href="product-details.html"><img
                                                src="{{ asset('assets-landing/img/product/6.png') }}"
                                                alt="#"></a>
                                        <div class="product-badge">
                                            <ul>
                                                <li class="sale-badge">New</li>
                                            </ul>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#quick_view_modal">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                        data-bs-target="#add_to_cart_modal">
                                                        <i class="fas fa-shopping-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                        data-bs-target="#liton_wishlist_modal">
                                                        <i class="far fa-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h2 class="product-title"><a href="product-details.html">Thermometer Gun</a>
                                        </h2>
                                        <div class="product-price">
                                            <span>$150.00</span>
                                            <del>$180.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PRODUCT AREA END -->

        <!-- COUNTDOWN AREA START -->
        <div class="ltn__call-to-action-area section-bg-1 bg-image pt-120 pb-120"
            data-bs-bg="{{ asset('assets-landing/img/bg/25.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="call-to-action-inner text-color-white--- text-center---">
                            <div class="section-title-area ltn__section-title-2--- text-center---">
                                <h6 class="ltn__secondary-color">Todays Hot Offer</h6>
                                <h1 class="section-title">Free Covid-19 Vaccine<br>Campaign Ticket</h1>
                                <p>Cur tantas regiones barbarorum obiit, tot maria transmist <br>
                                    summo bono fruitur id est voluptate barbarorum </p>
                            </div>
                            <div class="ltn__countdown ltn__countdown-3 bg-white--" data-countdown="2021/12/28"></div>
                            <div class="btn-wrapper animated">
                                <a href="contact.html" class="theme-btn-1 btn btn-effect-1 text-uppercase">Book
                                    Now</a>
                                <a href="shop.html" class="ltn__secondary-color text-decoration-underline">Deal of The
                                    Day</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <!-- <img src="img/banner/15.png" alt="#"> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- COUNTDOWN AREA END -->

        <!-- PRODUCT AREA START (product-item-3) -->
        <div class="ltn__product-area ltn__product-gutter pt-115 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2 text-center">
                            <h1 class="section-title">Leatest Product</h1>
                        </div>
                    </div>
                </div>
                <div class="row ltn__tab-product-slider-one-active--- slick-arrow-1">
                    <!-- ltn__product-item -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="ltn__product-item ltn__product-item-3 text-left">
                            <div class="product-img">
                                <a href="product-details.html"><img
                                        src="{{ asset('assets-landing/img/product-2/1.png') }}" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge">New</li>
                                    </ul>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#quick_view_modal">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                data-bs-target="#add_to_cart_modal">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                data-bs-target="#liton_wishlist_modal">
                                                <i class="far fa-heart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-ratting">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h2 class="product-title"><a href="product-details.html">Antiseptic Spray</a></h2>
                                <div class="product-price">
                                    <span>$32.00</span>
                                    <del>$46.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="ltn__product-item ltn__product-item-3 text-left">
                            <div class="product-img">
                                <a href="product-details.html"><img
                                        src="{{ asset('assets-landing/img/product-2/2.png') }}" alt="#"></a>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#quick_view_modal">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                data-bs-target="#add_to_cart_modal">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                data-bs-target="#liton_wishlist_modal">
                                                <i class="far fa-heart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-ratting">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h2 class="product-title"><a href="product-details.html">Digital Stethoscope</a></h2>
                                <div class="product-price">
                                    <span>$25.00</span>
                                    <del>$35.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="ltn__product-item ltn__product-item-3 text-left">
                            <div class="product-img">
                                <a href="product-details.html"><img
                                        src="{{ asset('assets-landing/img/product-2/3.png') }}" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge">New</li>
                                    </ul>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#quick_view_modal">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                data-bs-target="#add_to_cart_modal">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                data-bs-target="#liton_wishlist_modal">
                                                <i class="far fa-heart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-ratting">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h2 class="product-title"><a href="product-details.html">Cosmetic Containers</a></h2>
                                <div class="product-price">
                                    <span>$75.00</span>
                                    <del>$92.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="ltn__product-item ltn__product-item-3 text-left">
                            <div class="product-img">
                                <a href="product-details.html"><img
                                        src="{{ asset('assets-landing/img/product-2/4.png') }}" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge">New</li>
                                    </ul>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#quick_view_modal">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                data-bs-target="#add_to_cart_modal">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                data-bs-target="#liton_wishlist_modal">
                                                <i class="far fa-heart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-ratting">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h2 class="product-title"><a href="product-details.html">Cosmetic Containers</a></h2>
                                <div class="product-price">
                                    <span>$78.00</span>
                                    <del>$85.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="ltn__product-item ltn__product-item-3 text-left">
                            <div class="product-img">
                                <a href="product-details.html"><img
                                        src="{{ asset('assets-landing/img/product-2/5.png') }}" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge">New</li>
                                    </ul>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#quick_view_modal">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                data-bs-target="#add_to_cart_modal">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                data-bs-target="#liton_wishlist_modal">
                                                <i class="far fa-heart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-ratting">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h2 class="product-title"><a href="product-details.html">Blue Hand Gloves</a></h2>
                                <div class="product-price">
                                    <span>$150.00</span>
                                    <del>$180.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="ltn__product-item ltn__product-item-3 text-left">
                            <div class="product-img">
                                <a href="product-details.html"><img
                                        src="{{ asset('assets-landing/img/product-2/6.png') }}" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge">New</li>
                                    </ul>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#quick_view_modal">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                data-bs-target="#add_to_cart_modal">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                data-bs-target="#liton_wishlist_modal">
                                                <i class="far fa-heart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-ratting">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h2 class="product-title"><a href="product-details.html">Thermometer Gun</a></h2>
                                <div class="product-price">
                                    <span>$150.00</span>
                                    <del>$180.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="ltn__product-item ltn__product-item-3 text-left">
                            <div class="product-img">
                                <a href="product-details.html"><img
                                        src="{{ asset('assets-landing/img/product-2/7.png') }}" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge">New</li>
                                    </ul>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#quick_view_modal">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                data-bs-target="#add_to_cart_modal">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                data-bs-target="#liton_wishlist_modal">
                                                <i class="far fa-heart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-ratting">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h2 class="product-title"><a href="product-details.html">Cosmetic Containers</a>
                                </h2>
                                <div class="product-price">
                                    <span>$75.00</span>
                                    <del>$92.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="ltn__product-item ltn__product-item-3 text-left">
                            <div class="product-img">
                                <a href="product-details.html"><img
                                        src="{{ asset('assets-landing/img/product-2/8.png') }}" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge">New</li>
                                    </ul>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#quick_view_modal">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                data-bs-target="#add_to_cart_modal">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                data-bs-target="#liton_wishlist_modal">
                                                <i class="far fa-heart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-ratting">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h2 class="product-title"><a href="product-details.html">Cosmetic Containers</a>
                                </h2>
                                <div class="product-price">
                                    <span>$78.00</span>
                                    <del>$85.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
            </div>
        </div>
        <!-- PRODUCT AREA END -->

        <!-- ABOUT US AREA START -->
        <div class="ltn__about-us-area section-bg-1 bg-image-left-before pt-115 pb-115">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="about-us-img-wrap about-img-left---">

                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="about-us-info-wrap">
                            <div class="section-title-area ltn__section-title-2--- mb-20">
                                <h6 class="section-subtitle section-subtitle-2--- ltn__secondary-color">N95 Facial
                                    Covering Mask</h6>
                                <h1 class="section-title">Grade A Safety Masks
                                    For Sale. Haurry Up!</h1>
                                <p>Over 39,000 people work for us in more than 70 countries all over the
                                    This breadth of global coverage, combined with specialist services</p>
                            </div>
                            <ul class="ltn__list-item-half clearfix">
                                <li>
                                    <i class="flaticon-home-2"></i>
                                    Activated Carbon
                                </li>
                                <li>
                                    <i class="flaticon-mountain"></i>
                                    Breathing Valve
                                </li>
                                <li>
                                    <i class="flaticon-heart"></i>
                                    6 Layer Filteration
                                </li>
                                <li>
                                    <i class="flaticon-secure"></i>
                                    Rewashes & Reusable
                                </li>
                            </ul>
                            <div class="btn-wrapper animated">
                                <a href="service.html"
                                    class="ltn__secondary-color text-uppercase text-decoration-underline">View
                                    Products</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT US AREA END -->

        <!-- ABOUT US AREA START -->
        <div class="ltn__about-us-area bg-overlay-white-90--- bg-image pt-115 pb-110 d-none"
            data-bs-bg="img/bg/26.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="about-us-img-wrap about-img-left">
                            <!-- <img src="img/others/7.png" alt="About Us Image"> -->
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="about-us-info-wrap">
                            <div class="section-title-area ltn__section-title-2--- mb-20">
                                <h6 class="section-subtitle section-subtitle-2--- ltn__secondary-color">N95 Facial
                                    Covering Mask</h6>
                                <h1 class="section-title">Grade A Safety Masks
                                    For Sale. Haurry Up!</h1>
                                <p>Over 39,000 people work for us in more than 70 countries all over the
                                    This breadth of global coverage, combined with specialist services</p>
                            </div>
                            <ul class="ltn__list-item-half clearfix">
                                <li>
                                    <i class="flaticon-home-2"></i>
                                    Activated Carbon
                                </li>
                                <li>
                                    <i class="flaticon-mountain"></i>
                                    Breathing Valve
                                </li>
                                <li>
                                    <i class="flaticon-heart"></i>
                                    6 Layer Filteration
                                </li>
                                <li>
                                    <i class="flaticon-secure"></i>
                                    Rewashes & Reusable
                                </li>
                            </ul>
                            <div class="btn-wrapper animated">
                                <a href="service.html"
                                    class="ltn__secondary-color text-uppercase text-decoration-underline">View
                                    Products</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT US AREA END -->

        <!-- PRODUCT AREA START (product-item-3) -->
        <div class="ltn__product-area ltn__product-gutter  no-product-ratting pt-115 pb-70---">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2 text-center">
                            <h1 class="section-title">Trending Products</h1>
                        </div>
                    </div>
                </div>
                <div class="row ltn__tab-product-slider-one-active--- slick-arrow-1">
                    <!-- ltn__product-item -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="ltn__product-item ltn__product-item-3 text-center">
                            <div class="product-img">
                                <a href="product-details.html"><img
                                        src="{{ asset('assets-landing/img/product/1.png') }}" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge">New</li>
                                    </ul>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#quick_view_modal">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                data-bs-target="#add_to_cart_modal">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                data-bs-target="#liton_wishlist_modal">
                                                <i class="far fa-heart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-ratting">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h2 class="product-title"><a href="product-details.html">Antiseptic Spray</a></h2>
                                <div class="product-price">
                                    <span>$32.00</span>
                                    <del>$46.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="ltn__product-item ltn__product-item-3 text-center">
                            <div class="product-img">
                                <a href="product-details.html"><img
                                        src="{{ asset('assets-landing/img/product/2.png') }}" alt="#"></a>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#quick_view_modal">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                data-bs-target="#add_to_cart_modal">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                data-bs-target="#liton_wishlist_modal">
                                                <i class="far fa-heart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-ratting">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h2 class="product-title"><a href="product-details.html">Digital Stethoscope</a>
                                </h2>
                                <div class="product-price">
                                    <span>$25.00</span>
                                    <del>$35.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="ltn__product-item ltn__product-item-3 text-center">
                            <div class="product-img">
                                <a href="product-details.html"><img
                                        src="{{ asset('assets-landing/img/product/3.png') }}" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge">New</li>
                                    </ul>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#quick_view_modal">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                data-bs-target="#add_to_cart_modal">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                data-bs-target="#liton_wishlist_modal">
                                                <i class="far fa-heart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-ratting">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h2 class="product-title"><a href="product-details.html">Cosmetic Containers</a>
                                </h2>
                                <div class="product-price">
                                    <span>$75.00</span>
                                    <del>$92.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="ltn__product-item ltn__product-item-3 text-center">
                            <div class="product-img">
                                <a href="product-details.html"><img
                                        src="{{ asset('assets-landing/img/product/4.png') }}" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge">New</li>
                                    </ul>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#quick_view_modal">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                data-bs-target="#add_to_cart_modal">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                data-bs-target="#liton_wishlist_modal">
                                                <i class="far fa-heart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-ratting">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h2 class="product-title"><a href="product-details.html">Cosmetic Containers</a>
                                </h2>
                                <div class="product-price">
                                    <span>$78.00</span>
                                    <del>$85.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
            </div>
        </div>
        <!-- PRODUCT AREA END -->

        <!-- BANNER AREA START -->
        <div class="ltn__banner-area mt-120---">
            <div class="container">
                <div class="row ltn__custom-gutter--- justify-content-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="ltn__banner-item">
                            <div class="ltn__banner-img">
                                <a href="shop.html"><img src="{{ asset('assets-landing/img/banner/23.jpg') }}"
                                        alt="Banner Image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="ltn__banner-item">
                            <div class="ltn__banner-img">
                                <a href="shop.html"><img src="{{ asset('assets-landing/img/banner/22.jpg') }}"
                                        alt="Banner Image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="ltn__banner-item">
                            <div class="ltn__banner-img">
                                <a href="shop.html"><img src="{{ asset('assets-landing/img/banner/21.jpg') }}"
                                        alt="Banner Image"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BANNER AREA END -->

        <!-- FEATURE AREA START ( Feature - 3) -->
        <div class="ltn__feature-area section-bg-1 mt-90 pt-30 pb-30 mt--65---">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div
                            class="ltn__feature-item-box-wrap ltn__feature-item-box-wrap-2 ltn__border--- section-bg-1">
                            <div class="ltn__feature-item ltn__feature-item-8">
                                <div class="ltn__feature-icon">
                                    <img src="{{ asset('assets-landing/img/icons/svg/8-trolley.svg') }}"
                                        alt="#">
                                </div>
                                <div class="ltn__feature-info">
                                    <h4>Free shipping</h4>
                                    <p>On all orders over $49.00</p>
                                </div>
                            </div>
                            <div class="ltn__feature-item ltn__feature-item-8">
                                <div class="ltn__feature-icon">
                                    <img src="{{ asset('assets-landing/img/icons/svg/9-money.svg') }}"
                                        alt="#">
                                </div>
                                <div class="ltn__feature-info">
                                    <h4>15 days returns</h4>
                                    <p>Moneyback guarantee</p>
                                </div>
                            </div>
                            <div class="ltn__feature-item ltn__feature-item-8">
                                <div class="ltn__feature-icon">
                                    <img src="{{ asset('assets-landing/img/icons/svg/10-credit-card.svg') }}"
                                        alt="#">
                                </div>
                                <div class="ltn__feature-info">
                                    <h4>Secure checkout</h4>
                                    <p>Protected by Paypal</p>
                                </div>
                            </div>
                            <div class="ltn__feature-item ltn__feature-item-8">
                                <div class="ltn__feature-icon">
                                    <img src="{{ asset('assets-landing/img/icons/svg/11-gift-card.svg') }}"
                                        alt="#">
                                </div>
                                <div class="ltn__feature-info">
                                    <h4>Offer & gift here</h4>
                                    <p>On all orders over</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FEATURE AREA END -->

        <!-- BLOG AREA START (blog-3) -->
        <div class="ltn__blog-area pt-115 pb-45">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2--- text-center">
                            <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color d-none">News & Blogs
                            </h6>
                            <h1 class="section-title">Artikel Terbaru</h1>
                        </div>
                    </div>
                </div>
                <div class="row  ltn__blog-slider-one-active slick-arrow-1 ltn__blog-item-3-normal">
                    @foreach ($articles as $article)
                        <div class="col-lg-12">
                            <div class="ltn__blog-item ltn__blog-item-3">
                                <div class="ltn__blog-img" style="height: 200px;">
                                    <a href="blog-details.html">
                                        <img src="{{ asset('assets-landing/img/slider/slider-' . $loop->iteration . '.jpg') }}"
                                            style="background-size:cover;">
                                    </a>
                                </div>
                                <div class="ltn__blog-brief">
                                    <div class="ltn__blog-meta">
                                        <ul>
                                            <li class="ltn__blog-author">
                                                <a href="#"><i class="far fa-user"></i>Admin</a>
                                            </li>
                                            <li class="ltn__blog-tags">
                                                <a href="#"><i class="fas fa-tags"></i>Kategori</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="ltn__blog-title">
                                        <a href="blog-details.html">{{ $article->title }}</a>
                                    </h3>
                                    <div class="ltn__blog-meta-btn">
                                        <div class="ltn__blog-meta">
                                            <ul>
                                                <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June
                                                    24,
                                                    2021</li>
                                            </ul>
                                        </div>
                                        <div class="ltn__blog-btn">
                                            <a href="{{ url('articles', $article->slug) }}">Lanjut Baca</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- BLOG AREA END -->

        <!-- BRAND LOGO AREA START -->
        <div class="ltn__brand-logo-area ltn__brand-logo-1 section-bg-1--- pt-110--- pb-95 plr--9--- d-none---">
            <div class="container">
                <div class="row ltn__brand-logo-active">
                    <div class="col-lg-12">
                        <div class="ltn__brand-logo-item">
                            <img src="{{ asset('assets-landing/img/brand-logo/1.png') }}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__brand-logo-item">
                            <img src="{{ asset('assets-landing/img/brand-logo/2.png') }}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__brand-logo-item">
                            <img src="{{ asset('assets-landing/img/brand-logo/3.png') }}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__brand-logo-item">
                            <img src="{{ asset('assets-landing/img/brand-logo/4.png') }}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__brand-logo-item">
                            <img src="{{ asset('assets-landing/img/brand-logo/5.png') }}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__brand-logo-item">
                            <img src="{{ asset('assets-landing/img/brand-logo/3.png') }}" alt="Brand Logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BRAND LOGO AREA END -->

        <!-- PRODUCT AREA START (product-item-3) -->
        <div class="ltn__product-area ltn__product-gutter pt-85 pb-70 d-none">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2 text-center">
                            <h1 class="section-title">Featured Products</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ltn__banner-item">
                                    <div class="ltn__banner-img">
                                        <a href="shop.html"><img
                                                src="{{ asset('assets-landing/img/banner/13.jpg') }}"
                                                alt="Banner Image"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="ltn__banner-item">
                                    <div class="ltn__banner-img">
                                        <a href="shop.html"><img
                                                src="{{ asset('assets-landing/img/banner/12.jpg') }}"
                                                alt="Banner Image"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row ltn__tab-product-slider-one-active--- slick-arrow-1">
                            <!-- ltn__product-item -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="ltn__product-item ltn__product-item-2 text-left">
                                    <div class="product-img">
                                        <a href="product-details.html"><img
                                                src="{{ asset('assets-landing/img/product/1.png') }}"
                                                alt="#"></a>
                                        <div class="product-badge">
                                            <ul>
                                                <li class="sale-badge">New</li>
                                            </ul>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#quick_view_modal">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                        data-bs-target="#add_to_cart_modal">
                                                        <i class="fas fa-shopping-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                        data-bs-target="#liton_wishlist_modal">
                                                        <i class="far fa-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h2 class="product-title"><a href="product-details.html">Antiseptic
                                                Spray</a></h2>
                                        <div class="product-price">
                                            <span>$32.00</span>
                                            <del>$46.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ltn__product-item -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="ltn__product-item ltn__product-item-2 text-left">
                                    <div class="product-img">
                                        <a href="product-details.html"><img
                                                src="{{ asset('assets-landing/img/product/2.png') }}"
                                                alt="#"></a>
                                        <div class="product-hover-action">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#quick_view_modal">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                        data-bs-target="#add_to_cart_modal">
                                                        <i class="fas fa-shopping-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                        data-bs-target="#liton_wishlist_modal">
                                                        <i class="far fa-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h2 class="product-title"><a href="product-details.html">Digital
                                                Stethoscope</a></h2>
                                        <div class="product-price">
                                            <span>$25.00</span>
                                            <del>$35.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ltn__product-item -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="ltn__product-item ltn__product-item-2 text-left">
                                    <div class="product-img">
                                        <a href="product-details.html"><img
                                                src="{{ asset('assets-landing/img/product/3.png') }}"
                                                alt="#"></a>
                                        <div class="product-badge">
                                            <ul>
                                                <li class="sale-badge">New</li>
                                            </ul>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#quick_view_modal">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                        data-bs-target="#add_to_cart_modal">
                                                        <i class="fas fa-shopping-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                        data-bs-target="#liton_wishlist_modal">
                                                        <i class="far fa-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h2 class="product-title"><a href="product-details.html">Cosmetic
                                                Containers</a></h2>
                                        <div class="product-price">
                                            <span>$75.00</span>
                                            <del>$92.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ltn__product-item -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="ltn__product-item ltn__product-item-2 text-left">
                                    <div class="product-img">
                                        <a href="product-details.html"><img
                                                src="{{ asset('assets-landing/img/product/4.png') }}"
                                                alt="#"></a>
                                        <div class="product-badge">
                                            <ul>
                                                <li class="sale-badge">New</li>
                                            </ul>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#quick_view_modal">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                        data-bs-target="#add_to_cart_modal">
                                                        <i class="fas fa-shopping-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                        data-bs-target="#liton_wishlist_modal">
                                                        <i class="far fa-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h2 class="product-title"><a href="product-details.html">Cosmetic
                                                Containers</a></h2>
                                        <div class="product-price">
                                            <span>$78.00</span>
                                            <del>$85.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ltn__product-item -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="ltn__product-item ltn__product-item-2 text-left">
                                    <div class="product-img">
                                        <a href="product-details.html"><img
                                                src="{{ asset('assets-landing/img/product/5.png') }}"
                                                alt="#"></a>
                                        <div class="product-badge">
                                            <ul>
                                                <li class="sale-badge">New</li>
                                            </ul>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#quick_view_modal">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                        data-bs-target="#add_to_cart_modal">
                                                        <i class="fas fa-shopping-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                        data-bs-target="#liton_wishlist_modal">
                                                        <i class="far fa-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h2 class="product-title"><a href="product-details.html">Blue Hand
                                                Gloves</a></h2>
                                        <div class="product-price">
                                            <span>$150.00</span>
                                            <del>$180.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ltn__product-item -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="ltn__product-item ltn__product-item-2 text-left">
                                    <div class="product-img">
                                        <a href="product-details.html"><img
                                                src="{{ asset('assets-landing/img/product/6.png') }}"
                                                alt="#"></a>
                                        <div class="product-badge">
                                            <ul>
                                                <li class="sale-badge">New</li>
                                            </ul>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#quick_view_modal">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                        data-bs-target="#add_to_cart_modal">
                                                        <i class="fas fa-shopping-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                        data-bs-target="#liton_wishlist_modal">
                                                        <i class="far fa-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h2 class="product-title"><a href="product-details.html">Thermometer Gun</a>
                                        </h2>
                                        <div class="product-price">
                                            <span>$150.00</span>
                                            <del>$180.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ltn__product-item -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="ltn__product-item ltn__product-item-2 text-left">
                                    <div class="product-img">
                                        <a href="product-details.html"><img
                                                src="{{ asset('assets-landing/img/product/7.png') }}"
                                                alt="#"></a>
                                        <div class="product-badge">
                                            <ul>
                                                <li class="sale-badge">New</li>
                                            </ul>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#quick_view_modal">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                        data-bs-target="#add_to_cart_modal">
                                                        <i class="fas fa-shopping-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                        data-bs-target="#liton_wishlist_modal">
                                                        <i class="far fa-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h2 class="product-title"><a href="product-details.html">Cosmetic
                                                Containers</a></h2>
                                        <div class="product-price">
                                            <span>$75.00</span>
                                            <del>$92.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ltn__product-item -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="ltn__product-item ltn__product-item-2 text-left">
                                    <div class="product-img">
                                        <a href="product-details.html"><img
                                                src="{{ asset('assets-landing/img/product/8.png') }}"
                                                alt="#"></a>
                                        <div class="product-badge">
                                            <ul>
                                                <li class="sale-badge">New</li>
                                            </ul>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                        data-bs-target="#quick_view_modal">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                        data-bs-target="#add_to_cart_modal">
                                                        <i class="fas fa-shopping-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                        data-bs-target="#liton_wishlist_modal">
                                                        <i class="far fa-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h2 class="product-title"><a href="product-details.html">Cosmetic
                                                Containers</a></h2>
                                        <div class="product-price">
                                            <span>$78.00</span>
                                            <del>$85.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PRODUCT AREA END -->

        <!-- PRODUCT AREA START (product-item-3) -->
        <div class="ltn__product-area ltn__product-gutter pt-85 pb-70 d-none">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2 text-center">
                            <h1 class="section-title">Featured Products</h1>
                        </div>
                    </div>
                </div>
                <div class="row ltn__tab-product-slider-one-active--- slick-arrow-1">
                    <!-- ltn__product-item -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="ltn__product-item ltn__product-item-3 text-center">
                            <div class="product-img">
                                <a href="product-details.html"><img
                                        src="{{ asset('assets-landing/img/product/1.png') }}" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge">New</li>
                                    </ul>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#quick_view_modal">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                data-bs-target="#add_to_cart_modal">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                data-bs-target="#liton_wishlist_modal">
                                                <i class="far fa-heart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-ratting">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h2 class="product-title"><a href="product-details.html">Antiseptic Spray</a></h2>
                                <div class="product-price">
                                    <span>$32.00</span>
                                    <del>$46.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="ltn__product-item ltn__product-item-3 text-center">
                            <div class="product-img">
                                <a href="product-details.html"><img
                                        src="{{ asset('assets-landing/img/product/2.png') }}" alt="#"></a>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#quick_view_modal">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                data-bs-target="#add_to_cart_modal">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                data-bs-target="#liton_wishlist_modal">
                                                <i class="far fa-heart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-ratting">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h2 class="product-title"><a href="product-details.html">Digital Stethoscope</a>
                                </h2>
                                <div class="product-price">
                                    <span>$25.00</span>
                                    <del>$35.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="ltn__product-item ltn__product-item-3 text-center">
                            <div class="product-img">
                                <a href="product-details.html"><img
                                        src="{{ asset('assets-landing/img/product/3.png') }}" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge">New</li>
                                    </ul>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#quick_view_modal">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                data-bs-target="#add_to_cart_modal">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                data-bs-target="#liton_wishlist_modal">
                                                <i class="far fa-heart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-ratting">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h2 class="product-title"><a href="product-details.html">Cosmetic Containers</a>
                                </h2>
                                <div class="product-price">
                                    <span>$75.00</span>
                                    <del>$92.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="ltn__product-item ltn__product-item-3 text-center">
                            <div class="product-img">
                                <a href="product-details.html"><img
                                        src="{{ asset('assets-landing/img/product/4.png') }}" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge">New</li>
                                    </ul>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#quick_view_modal">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                data-bs-target="#add_to_cart_modal">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                data-bs-target="#liton_wishlist_modal">
                                                <i class="far fa-heart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-ratting">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h2 class="product-title"><a href="product-details.html">Cosmetic Containers</a>
                                </h2>
                                <div class="product-price">
                                    <span>$78.00</span>
                                    <del>$85.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="ltn__product-item ltn__product-item-3 text-center">
                            <div class="product-img">
                                <a href="product-details.html"><img
                                        src="{{ asset('assets-landing/img/product/5.png') }}" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge">New</li>
                                    </ul>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#quick_view_modal">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                data-bs-target="#add_to_cart_modal">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                data-bs-target="#liton_wishlist_modal">
                                                <i class="far fa-heart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-ratting">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h2 class="product-title"><a href="product-details.html">Blue Hand Gloves</a></h2>
                                <div class="product-price">
                                    <span>$150.00</span>
                                    <del>$180.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="ltn__product-item ltn__product-item-3 text-center">
                            <div class="product-img">
                                <a href="product-details.html"><img
                                        src="{{ asset('assets-landing/img/product/6.png') }}" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge">New</li>
                                    </ul>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#quick_view_modal">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                data-bs-target="#add_to_cart_modal">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                data-bs-target="#liton_wishlist_modal">
                                                <i class="far fa-heart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-ratting">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h2 class="product-title"><a href="product-details.html">Thermometer Gun</a></h2>
                                <div class="product-price">
                                    <span>$150.00</span>
                                    <del>$180.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="ltn__product-item ltn__product-item-3 text-center">
                            <div class="product-img">
                                <a href="product-details.html"><img
                                        src="{{ asset('assets-landing/img/product/7.png') }}" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge">New</li>
                                    </ul>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#quick_view_modal">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                data-bs-target="#add_to_cart_modal">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                data-bs-target="#liton_wishlist_modal">
                                                <i class="far fa-heart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-ratting">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h2 class="product-title"><a href="product-details.html">Cosmetic Containers</a>
                                </h2>
                                <div class="product-price">
                                    <span>$75.00</span>
                                    <del>$92.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="ltn__product-item ltn__product-item-3 text-center">
                            <div class="product-img">
                                <a href="product-details.html"><img
                                        src="{{ asset('assets-landing/img/product/8.png') }}" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge">New</li>
                                    </ul>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-bs-toggle="modal"
                                                data-bs-target="#quick_view_modal">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                data-bs-target="#add_to_cart_modal">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Wishlist" data-bs-toggle="modal"
                                                data-bs-target="#liton_wishlist_modal">
                                                <i class="far fa-heart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-ratting">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h2 class="product-title"><a href="product-details.html">Cosmetic Containers</a>
                                </h2>
                                <div class="product-price">
                                    <span>$78.00</span>
                                    <del>$85.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
            </div>
        </div>
        <!-- PRODUCT AREA END -->

        <!-- CALL TO ACTION START (call-to-action-6) -->
        <div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom d-none" data-bs-bg="img/1.jpg--">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div
                            class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg position-relative text-center---">
                            <div class="coll-to-info text-color-white">
                                <h1>Buy medical disposable face mask <br> to protect your loved ones</h1>
                            </div>
                            <div class="btn-wrapper">
                                <a class="btn btn-effect-3 btn-white" href="shop.html">Explore Products <i
                                        class="icon-next"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CALL TO ACTION END -->

        <!-- FOOTER AREA START -->
        <footer class="ltn__footer-area  ">
            <div class="footer-top-area  section-bg-1 plr--5">
                <div class="container-fluid">
                    @include('landing-page.sections.footer')
                </div>
            </div>
            <div class="ltn__copyright-area ltn__copyright-2 section-bg-7  plr--5">
                <div class="container-fluid ltn__border-top-2">
                    @include('landing-page.sections.copyright')
                </div>
            </div>
        </footer>
        <!-- FOOTER AREA END -->

        <!-- MODAL AREA START (Quick View Modal) -->
        <div class="ltn__modal-area ltn__quick-view-modal-area">
            <div class="modal fade" id="quick_view_modal" tabindex="-1">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <!-- <i class="fas fa-times"></i> -->
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="ltn__quick-view-modal-inner">
                                <div class="modal-product-item">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="modal-product-img">
                                                <img src="{{ asset('assets-landing/img/product/4.png') }}"
                                                    alt="#">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="modal-product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i
                                                                    class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li class="review-total"> <a href="#"> ( 95 Reviews
                                                                )</a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Digital Stethoscope</a></h3>
                                                <div class="product-price">
                                                    <span>$15.00</span>
                                                    <del>$25.00</del>
                                                </div>
                                                <hr>
                                                <div class="modal-product-brief">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Dignissimos repellendus repudiandae incidunt quidem pariatur
                                                        expedita, quo quis modi tempore non.</p>
                                                </div>
                                                <div class="modal-product-meta ltn__product-details-menu-1 d-none">
                                                    <ul>
                                                        <li>
                                                            <strong>Categories:</strong>
                                                            <span>
                                                                <a href="#">Parts</a>
                                                                <a href="#">Car</a>
                                                                <a href="#">Seat</a>
                                                                <a href="#">Cover</a>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="ltn__product-details-menu-2 d-none">
                                                    <ul>
                                                        <li>
                                                            <div class="cart-plus-minus">
                                                                <input type="text" value="02"
                                                                    name="qtybutton" class="cart-plus-minus-box">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="theme-btn-1 btn btn-effect-1"
                                                                title="Add to Cart" data-bs-toggle="modal"
                                                                data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                                <span>ADD TO CART</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- <hr> -->
                                                <div class="ltn__product-details-menu-3">
                                                    <ul>
                                                        <li>
                                                            <a href="#" class="" title="Wishlist"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i>
                                                                <span>Add to Wishlist</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="" title="Compare"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#quick_view_modal">
                                                                <i class="fas fa-exchange-alt"></i>
                                                                <span>Compare</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <hr>
                                                <div class="ltn__social-media">
                                                    <ul>
                                                        <li>Share:</li>
                                                        <li><a href="#" title="Facebook"><i
                                                                    class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#" title="Twitter"><i
                                                                    class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#" title="Linkedin"><i
                                                                    class="fab fa-linkedin"></i></a></li>
                                                        <li><a href="#" title="Instagram"><i
                                                                    class="fab fa-instagram"></i></a></li>

                                                    </ul>
                                                </div>
                                                <label class="float-end mb-0"><a class="text-decoration"
                                                        href="product-details.html"><small>View
                                                            Details</small></a></label>
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
        <!-- MODAL AREA END -->

        <!-- MODAL AREA START (Add To Cart Modal) -->
        <div class="ltn__modal-area ltn__add-to-cart-modal-area">
            <div class="modal fade" id="add_to_cart_modal" tabindex="-1">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="ltn__quick-view-modal-inner">
                                <div class="modal-product-item">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="modal-product-img">
                                                <img src="{{ asset('assets-landing/img/product/1.png') }}"
                                                    alt="#">
                                            </div>
                                            <div class="modal-product-info">
                                                <h5><a href="product-details.html">Digital Stethoscope</a></h5>
                                                <p class="added-cart"><i class="fa fa-check-circle"></i>
                                                    Successfully added to your Cart</p>
                                                <div class="btn-wrapper">
                                                    <a href="cart.html" class="theme-btn-1 btn btn-effect-1">View
                                                        Cart</a>
                                                    <a href="checkout.html"
                                                        class="theme-btn-2 btn btn-effect-2">Checkout</a>
                                                </div>
                                            </div>
                                            <!-- additional-info -->
                                            <div class="additional-info d-none">
                                                <p>We want to give you <b>10% discount</b> for your first order, <br>
                                                    Use discount code at checkout</p>
                                                <div class="payment-method">
                                                    <img src="{{ asset('assets-landing/img/icons/payment.png') }}"
                                                        alt="#">
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
        <!-- MODAL AREA END -->

        <!-- MODAL AREA START (Wishlist Modal) -->
        <div class="ltn__modal-area ltn__add-to-cart-modal-area">
            <div class="modal fade" id="liton_wishlist_modal" tabindex="-1">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="ltn__quick-view-modal-inner">
                                <div class="modal-product-item">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="modal-product-img">
                                                <img src="{{ asset('assets-landing/img/product/7.png') }}"
                                                    alt="#">
                                            </div>
                                            <div class="modal-product-info">
                                                <h5><a href="product-details.html">Digital Stethoscope</a></h5>
                                                <p class="added-cart"><i class="fa fa-check-circle"></i>
                                                    Successfully added to your Wishlist</p>
                                                <div class="btn-wrapper">
                                                    <a href="wishlist.html"
                                                        class="theme-btn-1 btn btn-effect-1">View Wishlist</a>
                                                </div>
                                            </div>
                                            <!-- additional-info -->
                                            <div class="additional-info d-none">
                                                <p>We want to give you <b>10% discount</b> for your first order, <br>
                                                    Use discount code at checkout</p>
                                                <div class="payment-method">
                                                    <img src="img/icons/payment.png" alt="#">
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
        <!-- MODAL AREA END -->

    </div>
    <!-- Body main wrapper end -->

    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- All JS Plugins -->
    <script src="{{ asset('assets-landing/js/plugins.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets-landing/js/main.js') }}"></script>

</body>

</html>