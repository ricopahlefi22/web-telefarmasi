@include('landing-page.sections.head')

<body>
    <div class="body-wrapper">

        <!-- HEADER AREA START (header-3) -->
        <header class="ltn__header-area ltn__header-3">
            <!-- ltn__header-top-area start -->
            <div class="ltn__header-top-area border-bottom">
                @include('landing-page.sections.header')

            </div>
            <!-- ltn__header-top-area end -->
            <!-- ltn__header-middle-area start -->
            <div class="ltn__header-middle-area">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="site-logo">
                                @include('landing-page.sections.logo')
                            </div>
                        </div>
                        <div class="col header-contact-serarch-column d-none d-lg-block">
                            <div class="header-contact-search">
                                <!-- header-search-2 -->
                                <div class="header-search-2">
                                    <form id="#123" method="get" action="#">
                                        <input type="text" name="search" value=""
                                            placeholder="Search here..." />
                                        <button type="submit">
                                            <span><i class="icon-search"></i></span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <!-- header-options -->
                            <div class="ltn__header-options">
                                <ul>
                                    @include('landing-page.sections.middle-header')

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__header-middle-area end -->
            <!-- header-bottom-area start -->
            <div
                class="header-bottom-area ltn__border-top ltn__header-sticky  ltn__sticky-bg-white--- ltn__sticky-bg-secondary ltn__secondary-bg section-bg-1 menu-color-white d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col header-menu-column justify-content-center">
                            <div class="sticky-logo">
                                <div class="site-logo">
                                    @include('landing-page.sections.logo')
                                </div>
                            </div>
                            <div class="header-menu header-menu-2">
                                <nav>
                                    <div class="ltn__main-menu">
                                        @include('landing-page.sections.navbar')

                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-bottom-area end -->
        </header>
        <!-- HEADER AREA END -->

        <!-- MOBILE MENU START -->
        @include('landing-page.sections.menu')
        <!-- MOBILE MENU END -->

        <!-- Utilize Cart Menu Start -->
        @include('landing-page.sections.cart')

        <!-- Utilize Cart Menu End -->

        <!-- Utilize Mobile Menu Start -->
        @include('landing-page.sections.navbar-mobile')

        <!-- Utilize Mobile Menu End -->

        <div class="ltn__utilize-overlay"></div>

        <!-- BREADCRUMB AREA START -->
        <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "
            data-bs-bg="{{ asset('assets-landing/img/slider/slider-1.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__breadcrumb-inner">
                            <h1 class="page-title">Tentang Kami</h1>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li><a href="index.html"><span class="ltn__secondary-color"><i
                                                    class="fas fa-home"></i></span> Beranda</a></li>
                                    <li>Tentang Kami</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB AREA END -->

        <!-- ABOUT US AREA START -->
        <div class="ltn__about-us-area pt-25 pb-120 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="about-us-img-wrap about-img-left">
                            <img src="{{ asset('assets-landing/img/dokter.png') }}" alt="About Us Image">
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="about-us-info-wrap">
                            <div class="section-title-area ltn__section-title-2--- mb-30">
                                <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color d-none">About Us
                                </h6>
                                <h1 class="section-title">Kami Rekan Terbaik untuk kebutuhan Obatmu</h1>
                                <p>Houzez allow you to design unlimited panels and real estate custom
                                    forms to capture leads and keep record of all information</p>
                            </div>
                            <ul class="ltn__list-item-1 ltn__list-item-1-before--- clearfix">
                                <li><i class="fas fa-check-square"></i> Layanan antar obat gratis.</li>
                                <li><i class="fas fa-check-square"></i> Harga termurah.</li>
                                <li><i class="fas fa-check-square"></i> Bisa melalui online.</li>
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
                                                <h4 class="mb-0">Teman Vika Khairunnisa</h4>
                                                <small>Apoteker</small>
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

        <!-- FEATURE AREA START ( Feature - 6) -->
        <div class="ltn__feature-area pt-90 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2--- text-center">
                            <h1 class="section-title">Core Features</h1>
                        </div>
                    </div>
                </div>
                <div class="row ltn__custom-gutter">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-6 text-center">
                            <div class="ltn__feature-icon">
                                <!-- <span><i class="flaticon-apartment"></i></span> -->
                                <img src="{{ asset('assets-landing/img/icons/icon-img/24.png') }}" alt="#">
                            </div>
                            <div class="ltn__feature-info">
                                <h4><a href="service-details.html">Free Delivery</a></h4>
                                <p>Lorem ipsum dolor sit ame it, consectetur adipisicing elit, sed do eiusmod te mp or
                                    incididunt ut labore.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-6 text-center active">
                            <div class="ltn__feature-icon">
                                <!-- <span><i class="flaticon-park"></i></span> -->
                                <img src="{{ asset('assets-landing/img/icons/icon-img/25.png') }}" alt="#">
                            </div>
                            <div class="ltn__feature-info">
                                <h4><a href="service-details.html">100% Cash Back</a></h4>
                                <p>Lorem ipsum dolor sit ame it, consectetur adipisicing elit, sed do eiusmod te mp or
                                    incididunt ut labore.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-6 text-center">
                            <div class="ltn__feature-icon">
                                <!-- <span><i class="flaticon-maps-and-location"></i></span> -->
                                <img src="{{ asset('assets-landing/img/icons/icon-img/26.png') }}" alt="#">
                            </div>
                            <div class="ltn__feature-info">
                                <h4><a href="service-details.html">Quality Product</a></h4>
                                <p>Lorem ipsum dolor sit ame it, consectetur adipisicing elit, sed do eiusmod te mp or
                                    incididunt ut labore.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-6 text-center">
                            <div class="ltn__feature-icon">
                                <!-- <span><i class="flaticon-excavator"></i></span> -->
                                <img src="{{ asset('assets-landing/img/icons/icon-img/27.png') }}" alt="#">
                            </div>
                            <div class="ltn__feature-info">
                                <h4><a href="service-details.html">24/7 Support</a></h4>
                                <p>Lorem ipsum dolor sit ame it, consectetur adipisicing elit, sed do eiusmod te mp or
                                    incididunt ut labore.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FEATURE AREA END -->

        <!-- PROGRESS BAR AREA START -->
        <div class="ltn__progress-bar-area section-bg-1 pt-120 pb-10 mb-120 d-none">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__progress-bar-wrap">
                            <div class="ltn__progress-bar-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="ltn__progress-bar-item-2 text-center">
                                            <div class="progress" data-value='78'>
                                                <span class="progress-left">
                                                    <span class="progress-bar border-primary"></span>
                                                </span>
                                                <span class="progress-right">
                                                    <span class="progress-bar border-primary"></span>
                                                </span>
                                                <div class="progress-value">
                                                    <div class="progress-count">78<sup class="small">%</sup></div>
                                                </div>
                                            </div>
                                            <div class="ltn__progress-info">
                                                <h3>Project Done</h3>
                                                <p>Construction Simulator</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="ltn__progress-bar-item-2 text-center">
                                            <div class="progress" data-value='62'>
                                                <span class="progress-left">
                                                    <span class="progress-bar border-danger"></span>
                                                </span>
                                                <span class="progress-right">
                                                    <span class="progress-bar border-danger"></span>
                                                </span>
                                                <div class="progress-value">
                                                    <div class="progress-count">62<sup class="small">%</sup></div>
                                                </div>
                                            </div>
                                            <div class="ltn__progress-info">
                                                <h3>Country Cover</h3>
                                                <p>Construction Simulator</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="ltn__progress-bar-item-2 text-center">
                                            <div class="progress" data-value='50'>
                                                <span class="progress-left">
                                                    <span class="progress-bar border-success"></span>
                                                </span>
                                                <span class="progress-right">
                                                    <span class="progress-bar border-success"></span>
                                                </span>
                                                <div class="progress-value">
                                                    <div class="progress-count">50<sup class="small">%</sup></div>
                                                </div>
                                            </div>
                                            <div class="ltn__progress-info">
                                                <h3>Completed Co.</h3>
                                                <p>Construction Simulator</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="ltn__progress-bar-item-2 text-center">
                                            <div class="progress" data-value='90'>
                                                <span class="progress-left">
                                                    <span class="progress-bar border-warning"></span>
                                                </span>
                                                <span class="progress-right">
                                                    <span class="progress-bar border-warning"></span>
                                                </span>
                                                <div class="progress-value">
                                                    <div class="progress-count">90<sup class="small">%</sup></div>
                                                </div>
                                            </div>
                                            <div class="ltn__progress-info">
                                                <h3>Happy Clients</h3>
                                                <p>Construction Simulator</p>
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
        <!-- PROGRESS BAR AREA END -->

        <!-- COUNTER UP AREA START -->
        <div class="ltn__counterup-area section-bg-1 bg-image bg-overlay-theme-black-80--- pt-115 pb-70"
            data-bs-bg="img/bg/30.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 align-self-center">
                        <div class="ltn__counterup-item text-center">
                            <div class="counter-icon">
                                <!-- <img src="{{ asset('assets-landing/img/icons/icon-img/2.png') }}" alt="#">  -->
                                <i class="flaticon-add-user-1"></i>
                            </div>
                            <h1><span class="counter">733</span><span class="counterUp-icon">+</span> </h1>
                            <h6>Active Clients</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 align-self-center">
                        <div class="ltn__counterup-item text-center">
                            <div class="counter-icon">
                                <!-- <img src="{{ asset('assets-landing/img/icons/icon-img/3.png') }}" alt="#">  -->
                                <i class="flaticon-dining-table-with-chairs"></i>
                            </div>
                            <h1><span class="counter">33</span><span class="counterUp-letter">K</span><span
                                    class="counterUp-icon">+</span> </h1>
                            <h6>Cup Of Coffee</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 align-self-center">
                        <div class="ltn__counterup-item text-center">
                            <div class="counter-icon">
                                <!-- <img src="{{ asset('assets-landing/img/icons/icon-img/3.png') }}" alt="#">  -->
                                <i class="flaticon-package"></i>
                            </div>
                            <h1><span class="counter">100</span><span class="counterUp-icon">+</span> </h1>
                            <h6>Get Rewards</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 align-self-center">
                        <div class="ltn__counterup-item text-center">
                            <div class="counter-icon">
                                <!-- <img src="{{ asset('assets-landing/img/icons/icon-img/3.png') }}" alt="#">  -->
                                <i class="flaticon-maps-and-location"></i>
                            </div>
                            <h1><span class="counter">21</span><span class="counterUp-icon">+</span> </h1>
                            <h6>Country Cover</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- COUNTER UP AREA END -->

        <!-- TESTIMONIAL AREA START (testimonial-4) -->
        <div class="ltn__testimonial-area section-bg-1 pt-290 pb-70">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2 text-center">
                            <h1 class="section-title">Clients Feedbacks<span>.</span></h1>
                        </div>
                    </div>
                </div>
                <div class="row ltn__testimonial-slider-3-active slick-arrow-1 slick-arrow-1-inner">
                    <div class="col-lg-12">
                        <div class="ltn__testimonial-item ltn__testimonial-item-4">
                            <div class="ltn__testimoni-img">
                                <img src="{{ asset('assets-landing/img/testimonial/6.jpg') }}" alt="#">
                            </div>
                            <div class="ltn__testimoni-info">
                                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. </p>
                                <h4>Rosalina D. William</h4>
                                <h6>Founder</h6>
                            </div>
                            <div class="ltn__testimoni-bg-icon">
                                <i class="far fa-comments"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__testimonial-item ltn__testimonial-item-4">
                            <div class="ltn__testimoni-img">
                                <img src="{{ asset('assets-landing/img/testimonial/7.jpg') }}" alt="#">
                            </div>
                            <div class="ltn__testimoni-info">
                                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. </p>
                                <h4>Rosalina D. William</h4>
                                <h6>Founder</h6>
                            </div>
                            <div class="ltn__testimoni-bg-icon">
                                <i class="far fa-comments"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__testimonial-item ltn__testimonial-item-4">
                            <div class="ltn__testimoni-img">
                                <img src="{{ asset('assets-landing/img/testimonial/1.jpg') }}" alt="#">
                            </div>
                            <div class="ltn__testimoni-info">
                                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. </p>
                                <h4>Rosalina D. William</h4>
                                <h6>Founder</h6>
                            </div>
                            <div class="ltn__testimoni-bg-icon">
                                <i class="far fa-comments"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__testimonial-item ltn__testimonial-item-4">
                            <div class="ltn__testimoni-img">
                                <img src="{{ asset('assets-landing/img/testimonial/2.jpg') }}" alt="#">
                            </div>
                            <div class="ltn__testimoni-info">
                                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. </p>
                                <h4>Rosalina D. William</h4>
                                <h6>Founder</h6>
                            </div>
                            <div class="ltn__testimoni-bg-icon">
                                <i class="far fa-comments"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__testimonial-item ltn__testimonial-item-4">
                            <div class="ltn__testimoni-img">
                                <img src="{{ asset('assets-landing/img/testimonial/5.jpg') }}" alt="#">
                            </div>
                            <div class="ltn__testimoni-info">
                                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. </p>
                                <h4>Rosalina D. William</h4>
                                <h6>Founder</h6>
                            </div>
                            <div class="ltn__testimoni-bg-icon">
                                <i class="far fa-comments"></i>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
            </div>
        </div>
        <!-- TESTIMONIAL AREA END -->

        <!-- FAQ AREA START (faq-2) (ID > accordion_2) -->
        <div class="ltn__faq-area pt-115 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2 text-center">
                            <h1 class="section-title white-color---">Some Questions</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ltn__faq-inner ltn__faq-inner-2">
                            <div id="accordion_2">
                                <!-- card -->
                                <div class="card">
                                    <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                        data-bs-target="#faq-item-2-1" aria-expanded="false">
                                        How to buy a product?
                                    </h6>
                                    <div id="faq-item-2-1" class="collapse" data-bs-parent="#accordion_2">
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Scelerisque eleifend
                                                donec pretium vulputate sapien nec sagittis. Proin libero nunc consequat
                                                interdum. Condimentum lacinia quis vel eros donec ac.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- card -->
                                <div class="card">
                                    <h6 class="ltn__card-title" data-bs-toggle="collapse"
                                        data-bs-target="#faq-item-2-2" aria-expanded="true">
                                        How can i make refund from your website?
                                    </h6>
                                    <div id="faq-item-2-2" class="collapse show" data-bs-parent="#accordion_2">
                                        <div class="card-body">
                                            <div class="ltn__video-img alignleft">
                                                <img src="{{ asset('assets-landing/img/bg/17.jpg') }}"
                                                    alt="video popup bg image">
                                                <a class="ltn__video-icon-2 ltn__video-icon-2-small ltn__video-icon-2-border----"
                                                    href="https://www.youtube.com/embed/Cr4LFOgRGeo?autoplay=1&showinfo=0"
                                                    data-rel="lightcase:myCollection">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Scelerisque </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- card -->
                                <div class="card">
                                    <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                        data-bs-target="#faq-item-2-3" aria-expanded="false">
                                        I am a new user. How should I start?
                                    </h6>
                                    <div id="faq-item-2-3" class="collapse" data-bs-parent="#accordion_2">
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Scelerisque eleifend
                                                donec pretium vulputate sapien nec sagittis. Proin libero nunc consequat
                                                interdum. Condimentum lacinia quis vel eros donec ac.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- card -->
                                <div class="card">
                                    <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                        data-bs-target="#faq-item-2-4" aria-expanded="false">
                                        Returns and refunds
                                    </h6>
                                    <div id="faq-item-2-4" class="collapse" data-bs-parent="#accordion_2">
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Scelerisque eleifend
                                                donec pretium vulputate sapien nec sagittis. Proin libero nunc consequat
                                                interdum. Condimentum lacinia quis vel eros donec ac.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- card -->
                                <div class="card">
                                    <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                        data-bs-target="#faq-item-2-5" aria-expanded="false">
                                        Are my details secured?
                                    </h6>
                                    <div id="faq-item-2-5" class="collapse" data-bs-parent="#accordion_2">
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Scelerisque eleifend
                                                donec pretium vulputate sapien nec sagittis. Proin libero nunc consequat
                                                interdum. Condimentum lacinia quis vel eros donec ac.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <aside class="about-us-img-wrap about-img-right">
                            <img src="{{ asset('assets-landing/img/others/100.jpg') }}" alt="Banner Image">
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQ AREA START -->

        <!-- FEATURE AREA START ( Feature - 6) -->
        <div class="ltn__feature-area section-bg-1 pt-115 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2 text-center">
                            <h1 class="section-title">Layanan Kami<span>.</span></h1>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-7">
                            <div class="ltn__feature-icon-title">
                                <div class="ltn__feature-icon">
                                    <span><i class="fas fa-hand-holding-medical"></i> </span>
                                </div>
                                <h3><a href="service-details.html">All Kind Brand</a></h3>
                            </div>
                            <div class="ltn__feature-info">
                                <p>Lorem ipsum dolor sit ame it, consectetur adipisicing elit, sed do eiusmod te mp or
                                    incididunt ut labore.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-7">
                            <div class="ltn__feature-icon-title">
                                <div class="ltn__feature-icon">
                                    <span><i class="fas fa-microscope"></i> </span>
                                </div>
                                <h3><a href="service-details.html">Curated Products</a></h3>
                            </div>
                            <div class="ltn__feature-info">
                                <p>Lorem ipsum dolor sit ame it, consectetur adipisicing elit, sed do eiusmod te mp or
                                    incididunt ut labore.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-7">
                            <div class="ltn__feature-icon-title">
                                <div class="ltn__feature-icon">
                                    <span><i class="fas fa-stethoscope"></i> </span>
                                </div>
                                <h3><a href="service-details.html">Pesticide Free Goods</a></h3>
                            </div>
                            <div class="ltn__feature-info">
                                <p>Lorem ipsum dolor sit ame it, consectetur adipisicing elit, sed do eiusmod te mp or
                                    incididunt ut labore.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FEATURE AREA END -->

        <!-- BLOG AREA START (blog-3) -->
        @if (count($articles) >= 5)
        <div class="ltn__blog-area pt-115 pb-45">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2--- text-center">
                            <h1 class="section-title">Artikel Terbaru</h1>
                        </div>
                    </div>
                </div>
                <div class="row  ltn__blog-slider-one-active slick-arrow-1 ltn__blog-item-3-normal">
                    @foreach ($articles as $article)
                        <div class="col-lg-12">
                            <div class="ltn__blog-item ltn__blog-item-3">
                                <div class="ltn__blog-img" style="height: 200px;">
                                    <a href="{{ url('articles', $article->slug) }}">
                                        @if (empty($article->image))
                                            <img src="{{ asset('assets-landing/img/slider/slider-1.jpg') }}"
                                                style="background-size:cover;">
                                        @else
                                            <img src="{{ asset($article->image) }}"
                                                style="background-size:cover;">
                                        @endif
                                    </a>
                                </div>
                                <div class="ltn__blog-brief">
                                    <div class="ltn__blog-meta">
                                        <ul>
                                            <li class="ltn__blog-tags">
                                                <a href="#">
                                                    <i class="fas fa-tags"></i>{{ $article->category->category }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="ltn__blog-title">
                                        <a href="{{ url('articles', $article->slug) }}">{{ $article->title }}</a>
                                    </h3>
                                    <div class="ltn__blog-meta-btn">
                                        <div class="ltn__blog-meta">
                                            <ul>
                                                <li class="ltn__blog-date">
                                                    {{ $article->published_at }}
                                                </li>
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
    @endif
        <!-- BLOG AREA END -->

        <!-- CALL TO ACTION START (call-to-action-6) -->
        @include('landing-page.sections.cta')
        <!-- CALL TO ACTION END -->

        <!-- FOOTER AREA START -->
        <footer class="ltn__footer-area  ">
            <div class="footer-top-area  section-bg-2 plr--5">
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

    </div>
    <!-- Body main wrapper end -->

    <!-- All JS Plugins -->
    <script src="{{ asset('assets-landing/js/plugins.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets-landing/js/main.js') }}"></script>

</body>

</html>
