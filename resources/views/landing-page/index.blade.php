@include('landing-page.sections.head')

<body>
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
                                    @include('landing-page.sections.logo')
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
                            <!-- user-menu -->
                            <div class="ltn__drop-menu user-menu">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)"><i class="icon-user"></i></a>
                                        <ul>
                                            @if (Auth::check())
                                                <li><a href="{{ url('logout') }}">Keluar</a></li>
                                            @else
                                                <li><a href="{{ url('login') }}">Login</a></li>
                                            @endif
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- mini-cart -->
                            @if (Auth::check())
                                <div class="mini-cart-icon">
                                    <a href="#ltn__utilize-cart-menu" class="ltn__utilize-toggle">
                                        <i class="icon-shopping-cart"></i>
                                        {{-- <sup>2</sup> --}}
                                    </a>
                                </div>
                            @endif
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
        @include('landing-page.sections.cart')
        <!-- Utilize Cart Menu End -->

        <!-- Utilize Mobile Menu Start -->
        @include('landing-page.sections.navbar-mobile')

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
                                            <h1 class="slide-title animated ">Stok Obat Lengkap</h1>
                                            <div class="slide-brief animated">
                                                <p>Kami punya ribuan jenis obat yang tersedia di apotek untuk berbagai
                                                    keperluan.</p>
                                            </div>
                                            <div class="btn-wrapper animated">
                                                <a href="{{ url('products') }}"
                                                    class="theme-btn-1 btn btn-effect-1">Cari Obat</a>
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
                                            <h1 class="slide-title animated ">Berbagi Wawasan Melalui Artikel</h1>
                                            <div class="slide-brief animated">
                                                <p>Banyak bahasan menarik mengenai kesehatan, gaya hidup sehat hingga
                                                    penggunaan obat..</p>
                                            </div>
                                            <div class="btn-wrapper animated">
                                                <a href="{{ url('articles') }}" class="theme-btn-1 btn btn-effect-1">
                                                    Baca Artikel
                                                </a>
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
                                            <h1 class="slide-title animated ">Konsultasi Obat Bersama Apoteker</h1>
                                            <div class="slide-brief animated">
                                                <p>Kami menyediakan layanan konsultasi mengenai obat yang tepat dengan
                                                    keluhan atau masalah anda.</p>
                                            </div>
                                            <div class="btn-wrapper animated">
                                                <a href="#" class="theme-btn-1 btn btn-effect-1">Konsultasi</a>
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
                    @foreach ($product_categories as $category)
                        <div class="col-12">
                            <div class="ltn__category-item ltn__category-item-6 text-center">
                                <div class="ltn__category-item-name">
                                    <h6><a
                                            href="{{ url('products/category', Str::slug($category->category)) }}">{{ $category->category }}</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- CATEGORY AREA END -->

        <!-- PRODUCT AREA START (product-item-3) -->
        <div class="ltn__product-area ltn__product-gutter  no-product-ratting pt-20 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2 text-center">
                            <h1 class="section-title">Yang Mungkin Kamu Cari</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-12 col-sm-6">
                                <div class="ltn__banner-item">
                                    <div class="ltn__banner-img">
                                        <img src="{{ asset('assets-landing/img/banner/banner-1.jpg') }}"
                                            alt="Banner Image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-6">
                                <div class="ltn__banner-item">
                                    <div class="ltn__banner-img">
                                        <img src="{{ asset('assets-landing/img/banner/banner-2.jpg') }}"
                                            alt="Banner Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row ltn__tab-product-slider-one-active--- slick-arrow-1">
                            @foreach ($random_products as $product)
                                <!-- ltn__product-item -->
                                <div class="col-lg-3--- col-md-4 col-sm-6 col-6">
                                    <div class="ltn__product-item ltn__product-item-2 text-left">
                                        <div class="product-img">
                                            <a href="{{ url('products/detail', $product->id) }}"><img
                                                    src="{{ asset($product->image) }}" alt="#"></a>
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
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h2 class="product-title">
                                                <a href="{{ url('products/detail', $product->id) }}">
                                                    {{ $product->name }}
                                                </a>
                                            </h2>
                                            <div class="product-price">
                                                <span>Rp {{ $product->price }}</span>
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
                                <h1 class="section-title">Konsultasi Dengan Apoteker Kami!</h1>
                                <p>Tanya apoteker kami jika kamu bingung dengan obat yang kamu butuhkan.</p>
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
                                <a href="{{ url('chat') }}"
                                    class="ltn__secondary-color text-uppercase text-decoration-underline">
                                    Konsultasi
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT US AREA END -->

        <!-- PRODUCT AREA START (product-item-3) -->
        <div class="ltn__product-area ltn__product-gutter pt-115 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2 text-center">
                            <h1 class="section-title">Produk Terbaru</h1>
                        </div>
                    </div>
                </div>
                <div class="row ltn__tab-product-slider-one-active--- slick-arrow-1">
                    @foreach ($latest_products as $product)
                        <!-- ltn__product-item -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                            <div class="ltn__product-item ltn__product-item-3 text-left">
                                <div class="product-img">
                                    <a href="{{ url('products/detail', $product->id) }}"><img
                                            src="{{ asset($product->image) }}" alt="#"></a>
                                    <div class="product-badge">
                                        <ul>
                                            <li class="sale-badge">Baru</li>
                                        </ul>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" title="Quick View"
                                                    data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" title="Add to Cart"
                                                    data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                    <i class="fas fa-shopping-cart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h2 class="product-title"><a
                                            href="{{ url('products/detail', $product->id) }}">{{ $product->name }}</a>
                                    </h2>
                                    <div class="product-price">
                                        <span>Rp. {{ $product->price }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- PRODUCT AREA END -->

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
                                    <h4>Gratis Ongkir</h4>
                                    <p>Setiap Pembelian <br> diatas 100.000 Rupiah </p>
                                </div>
                            </div>
                            <div class="ltn__feature-item ltn__feature-item-8">
                                <div class="ltn__feature-icon">
                                    <img src="{{ asset('assets-landing/img/icons/svg/9-money.svg') }}"
                                        alt="#">
                                </div>
                                <div class="ltn__feature-info">
                                    <h4>Uang Kembali</h4>
                                    <p>Jika Produk <br>Kami Tidak Sampai</p>
                                </div>
                            </div>
                            <div class="ltn__feature-item ltn__feature-item-8">
                                <div class="ltn__feature-icon">
                                    <img src="{{ asset('assets-landing/img/icons/svg/10-credit-card.svg') }}"
                                        alt="#">
                                </div>
                                <div class="ltn__feature-info">
                                    <h4>Transaksi Aman</h4>
                                    <p>Pelayanan Terbaik Untuk <br>Setiap Transaksi Anda</p>
                                </div>
                            </div>
                            <div class="ltn__feature-item ltn__feature-item-8">
                                <div class="ltn__feature-icon">
                                    <img src="{{ asset('assets-landing/img/icons/svg/11-gift-card.svg') }}"
                                        alt="#">
                                </div>
                                <div class="ltn__feature-info">
                                    <h4>Penawaran Terbaik</h4>
                                    <p>Untuk Setiap <br>Kebutuhan Anda</p>
                                </div>
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

        <!-- FOOTER AREA START -->
        <footer class="ltn__footer-area">
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
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li class="review-total"> <a href="#"> ( 95 Reviews
                                                                )</a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="{{ url('products/detail', $product->id) }}">Digital
                                                        Stethoscope</a></h3>
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
                                                                <input type="text" value="02" name="qtybutton"
                                                                    class="cart-plus-minus-box">
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
                                                        href="{{ url('products/detail', $product->id) }}"><small>View
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
                                                <h5><a href="{{ url('products/detail', $product->id) }}">Digital
                                                        Stethoscope</a></h5>
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
                                                <h5><a href="{{ url('products/detail', $product->id) }}">Digital
                                                        Stethoscope</a></h5>
                                                <p class="added-cart"><i class="fa fa-check-circle"></i>
                                                    Successfully added to your Wishlist</p>
                                                <div class="btn-wrapper">
                                                    <a href="wishlist.html" class="theme-btn-1 btn btn-effect-1">View
                                                        Wishlist</a>
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
