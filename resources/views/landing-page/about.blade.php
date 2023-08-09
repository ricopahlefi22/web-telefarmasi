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
                                <p>Inilah keunggulan-keunggulan kami dibanding apotek lainnya.</p>
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
                                            <div class="author-name-designation">
                                                <h4 class="mb-0">Alim Rahman Hakim</h4>
                                                <small>Pemilik Apotek Desta Farma</small>
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
        <div class="ltn__feature-area pt-40 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2--- text-center">
                            <h1 class="section-title">Layanan Kami</h1>
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
                                <h4><a href="javascript:void(0)">Gratis Antar</a></h4>
                                <p>Kami antar gratis seputar area Ketapang Kota.</p>
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
                                <h4><a href="javascript:void(0)">100% Uang Kembali</a></h4>
                                <p>Kami akan kembalikan uangmu secara utuh jika obat tidak diantarkan.</p>
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
                                <h4><a href="javascript:void(0)">Produk Berkualitas</a></h4>
                                <p>Semua produk kami berasal dari sumber terbaik dan dirawat dengan baik.</p>
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
                                <h4><a href="javascript:void(0)">Layanan 24/7</a></h4>
                                <p>Layanan konsultasi kami tersedia setiap hari dan 24 jam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FEATURE AREA END -->

        <!-- BLOG AREA START (blog-3) -->
        @if (count($articles) >= 5)
            <div class="ltn__blog-area pt-40 pb-45">
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
                                                    <a
                                                        href="{{ url('articles/category', Str::slug($article->category->category)) }}">
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
                                                        {{ Carbon\Carbon::parse($article->published_at)->diffForHumans() }}
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

    @include('landing-page.sections.script')
</body>

</html>
