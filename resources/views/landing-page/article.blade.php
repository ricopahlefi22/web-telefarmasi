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
                            <h1 class="page-title">
                                {{ empty($article_category->category) ? 'Artikel' : $article_category->category }}
                            </h1>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li>
                                        <a href="{{ url('/') }}">
                                            <span class="ltn__secondary-color">
                                                <i class="fas fa-home"></i>
                                            </span> Beranda
                                        </a>
                                    </li>
                                    <li>
                                        {{ empty($article_category->category) ? 'Artikel' : $article_category->category }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB AREA END -->

        <!-- BLOG AREA START -->
        <div class="ltn__blog-area ltn__blog-item-3-normal mb-100">
            <div class="container">
                <div class="row">
                    @forelse($list_article as $article)
                        <!-- Blog Item -->
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="ltn__blog-item ltn__blog-item-3">
                                <div class="ltn__blog-img">
                                    <a href="{{ url('articles', $article->slug) }}">
                                        <img src="{{ asset($article->image) }}" alt="Image">
                                    </a>
                                </div>
                                <div class="ltn__blog-brief">
                                    <h3 class="ltn__blog-title">
                                        <a href="{{ url('articles', $article->slug) }}">
                                            {{ $article->title }}
                                        </a>
                                    </h3>
                                    <div class="ltn__blog-meta-btn">
                                        <div class="ltn__blog-meta">
                                            <ul>
                                                <li class="ltn__blog-date">
                                                    <i class="far fa-calendar-alt"></i>
                                                    {{ Carbon\Carbon::parse($article->published_at)->diffForHumans() }}
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ltn__blog-btn">
                                            <a href="{{ url('articles', $article->slug) }}">
                                                Lebih Lengkap
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-center">Tidak Ada Artikel Tersedia</p>
                    @endforelse
                </div>
            </div>
        </div>
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
