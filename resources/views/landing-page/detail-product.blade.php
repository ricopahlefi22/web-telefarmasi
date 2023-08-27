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
                                            placeholder="Cari Obatmu..." />
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
                                @include('landing-page.sections.middle-header')
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
        <div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
            <div class="ltn__utilize-menu-head">
                <span class="ltn__utilize-menu-title">Keranjang</span>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div id="cartWrapper" class="ltn__utilize-menu-inner ltn__scrollbar">

                @include('landing-page.sections.cart')
            </div>
        </div>
        <!-- Utilize Cart Menu End -->

        <!-- Utilize Mobile Menu Start -->
        @include('landing-page.sections.navbar-mobile')
        <!-- Utilize Mobile Menu End -->

        <div class="ltn__utilize-overlay"></div>

        <!-- BREADCRUMB AREA START -->
        <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image"
            data-bs-bg="{{ asset('assets-landing/img/slider/slider-1.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__breadcrumb-inner">
                            <h1 class="page-title">Detail Produk</h1>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li>
                                        <a href="{{ url('/') }}">
                                            <span class="ltn__secondary-color">
                                                <i class="fas fa-home"></i>
                                            </span> Beranda
                                        </a>
                                    </li>
                                    <li>Produk</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB AREA END -->

        <!-- SHOP DETAILS AREA START -->
        <div class="ltn__shop-details-area pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="ltn__shop-details-inner mb-20">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="ltn__shop-details-img-gallery">
                                        <div class="ltn__shop-details-large-img">
                                            <div class="single-large-img">
                                                <a href="{{ asset($product->image) }}"
                                                    data-rel="lightcase:myCollection">
                                                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="modal-product-info shop-details-info pl-0">
                                        <h1>{{ $product->name }}</h1>
                                        <div class="product-price">
                                            <span>Rp. {{ $product->price }}</span>
                                        </div>
                                        <div class="modal-product-meta ltn__product-details-menu-1">
                                            <ul>
                                                <li>
                                                    <strong>Kategori:</strong>
                                                    <span>
                                                        <a
                                                            href="{{ url('products/category', Str::slug($product->category->category)) }}">{{ $product->category->category }}</a>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ltn__product-details-menu-2">
                                            <ul>
                                                <li>
                                                    <div class="cart-plus-minus">
                                                        <input type="text" value="01" name="qtybutton"
                                                            class="cart-plus-minus-box">
                                                    </div>
                                                </li>
                                                <li>
                                                    @if (Auth::check())
                                                        <a href="javascript:void(0)" title="Tambah Ke Keranjang"
                                                            class="add-product-to-cart theme-btn-1 btn btn-effect-1"
                                                            data-id="{{ $product->id }}" data-quantity="1">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span>Tambah Ke Keranjang</span>
                                                        </a>
                                                    @else
                                                        <a href="{{ url('login') }}"
                                                            class="theme-btn-1 btn btn-effect-1"
                                                            onclick="confirm('Sebelum melanjutkan, loginlah terlebih dahulu!')"
                                                            title="Tambah Ke Keranjang">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span>Tambah Ke Keranjang</span>
                                                        </a>
                                                    @endif
                                                </li>
                                            </ul>
                                        </div>
                                        <hr>
                                        <div class="ltn__social-media">
                                            <ul>
                                                <li>Bagikan:</li>
                                                <li>
                                                    <a href="#" title="Facebook">
                                                        <i class="fab fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Whatsapp">
                                                        <i class="fab fa-whatsapp"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Instagram">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Shop Tab Start -->
                        <div class="ltn__shop-details-tab-inner ltn__shop-details-tab-inner-2">
                            <div class="ltn__shop-details-tab-menu">
                                <div class="nav">
                                    <a class="active show" data-bs-toggle="tab"
                                        href="#liton_tab_details_1_1">Deskripsi</a>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="liton_tab_details_1_1">
                                    <div class="ltn__shop-details-tab-content-inner">
                                        {!! nl2br($product->description) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Shop Tab End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- SHOP DETAILS AREA END -->

        <!-- PRODUCT SLIDER AREA START -->
        <div class="ltn__product-slider-area ltn__product-gutter pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2">
                            <h4 class="title-2">Produk Terkait<span>.</span></h1>
                        </div>
                    </div>
                </div>
                <div class="row ltn__related-product-slider-one-active slick-arrow-1">
                    @foreach ($related_products as $product)
                        <!-- ltn__product-item -->
                        <div class="col-lg-12">
                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                <div class="product-img">
                                    <a href="{{ url('products/detail', $product->id) }}">
                                        <img src="{{ asset($product->image) }}" alt="#">
                                    </a>

                                    @if (Carbon\Carbon::parse($product->created_at)->diffInDays() < 1)
                                        <div class="product-badge">
                                            <ul>
                                                <li class="sale-badge">Baru</li>
                                            </ul>
                                        </div>
                                    @endif

                                    <div class="product-hover-action">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" title="Lihat Produk" class="quick-view"
                                                    data-id="{{ $product->id }}">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                @if (Auth::check())
                                                    <a href="javascript:void(0)" title="Tambah Ke Keranjang"
                                                        class="add-product-to-cart" data-id="{{ $product->id }}"
                                                        data-quantity="1">
                                                        <i class="fas fa-shopping-cart"></i>
                                                    </a>
                                                @else
                                                    <a href="{{ url('login') }}" title="Tambah Ke Keranjang">
                                                        <i class="fas fa-shopping-cart"></i>
                                                    </a>
                                                @endif
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h2 class="product-title">
                                        <a href="{{ url('products/detail', $product->id) }}">{{ $product->name }}</a>
                                    </h2>
                                    <div class="product-price">
                                        <span>{{ formatRupiah($product->price) }}</span>
                                    </div>
                                </div>
                                @if (Auth::check())
                                    <a href="javascript:void(0)" title="Tambah Ke Keranjang"
                                        class="add-product-to-cart theme-btn-1 btn mt-2 btn-block btn-effect-1"
                                        data-id="{{ $product->id }}" data-quantity="1">
                                        Tambah Ke Keranjang
                                    </a>
                                @else
                                    <a href="{{ url('login') }}"
                                        onclick="confirm('Sebelum melanjutkan, loginlah terlebih dahulu!')"
                                        title="Tambah Ke Keranjang"
                                        class="theme-btn-1 btn mt-2 btn-block btn-effect-1">
                                        Tambah Ke Keranjang
                                    </a>
                                @endif
                            </div>
                        </div>
                        <!--  -->
                    @endforeach

                </div>
            </div>
        </div>
        <!-- PRODUCT SLIDER AREA END -->

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

        <!-- MODAL AREA START (Quick View Modal) -->
        @include('landing-page.sections.quick-view')
        <!-- MODAL AREA END -->

        <!-- MODAL AREA START (Add To Cart Modal) -->
        @include('landing-page.sections.add-to-cart')
        <!-- MODAL AREA END -->
    </div>
    <!-- Body main wrapper end -->

    @include('landing-page.sections.script')
</body>

</html>
