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
                            <h1 class="page-title">{{ $article->category->category }}</h1>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li>
                                        <a href="{{ url('/') }}">
                                            <span class="ltn__secondary-color">
                                                <i class="fas fa-home"></i>
                                            </span> Beranda
                                        </a>
                                    </li>
                                    <li>Artikel</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB AREA END -->

        <!-- PAGE DETAILS AREA START (blog-details) -->
        <div class="ltn__page-details-area ltn__blog-details-area mb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__blog-details-wrap">
                            <div class="ltn__page-details-inner ltn__blog-details-inner">
                                <img src="{{ asset($article->image) }}" class="mb-3" alt="">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-category">
                                            <a href="#">{{ $article->category->category }}</a>
                                        </li>
                                    </ul>
                                </div>
                                <h2 class="ltn__blog-title">
                                    {{ $article->title }}
                                </h2>
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date">
                                            <i class="far fa-calendar-alt"></i>{{ $article->published_at }}
                                        </li>
                                    </ul>
                                </div>
                                {!! nl2br($article->body) !!}

                            </div>
                            <hr>
                            <!-- related-post -->
                            <div class="related-post-area mb-50">
                                <h4 class="title-2">Artikel Terkait</h4>
                                <div class="row">
                                    @foreach ($related_articles as $article)
                                        <div class="col-md-6">
                                            <!-- Blog Item -->
                                            <div class="ltn__blog-item ltn__blog-item-6">
                                                <div class="ltn__blog-img">
                                                    <a href="{{ url('articles', $article->slug) }}">
                                                        <img src="{{ asset($article->image) }}" alt="Image">
                                                    </a>
                                                </div>
                                                <div class="ltn__blog-brief">
                                                    <div class="ltn__blog-meta">
                                                        <ul>
                                                            <li class="ltn__blog-date ltn__secondary-color">
                                                                <i class="far fa-calendar-alt"></i>
                                                                {{ $article->published_at }}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <h3 class="ltn__blog-title">
                                                        <a href="{{ url('articles', $article->slug) }}">
                                                            {{ $article->title }}
                                                        </a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- comment-area -->
                            {{-- <div class="ltn__comment-area mb-50">

                                <h4 class="title-2">03 Comments</h4>
                                <div class="ltn__comment-inner">
                                    <ul>
                                        <li>
                                            <div class="ltn__comment-item clearfix">
                                                <div class="ltn__commenter-img">
                                                    <img src="{{ asset('assets-landing/img/testimonial/1.jpg') }}"
                                                        alt="Image">
                                                </div>
                                                <div class="ltn__commenter-comment">
                                                    <h6><a href="#">Adam Smit</a></h6>
                                                    <span class="comment-date">20th May 2020</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                    <a href="#" class="ltn__comment-reply-btn"><i
                                                            class="icon-reply-1"></i>Reply</a>
                                                </div>
                                            </div>
                                            <ul>
                                                <li>
                                                    <div class="ltn__comment-item clearfix">
                                                        <div class="ltn__commenter-img">
                                                            <img src="{{ asset('assets-landing/img/testimonial/3.jpg') }}"
                                                                alt="Image">
                                                        </div>
                                                        <div class="ltn__commenter-comment">
                                                            <h6><a href="#">Adam Smit</a></h6>
                                                            <span class="comment-date">21th May 2020</span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                            <a href="#" class="ltn__comment-reply-btn"><i
                                                                    class="icon-reply-1"></i>Reply</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="ltn__comment-item clearfix">
                                                <div class="ltn__commenter-img">
                                                    <img src="{{ asset('assets-landing/img/testimonial/4.jpg') }}"
                                                        alt="Image">
                                                </div>
                                                <div class="ltn__commenter-comment">
                                                    <h6><a href="#">Adam Smit</a></h6>
                                                    <span class="comment-date">25th May 2020</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                    <a href="#" class="ltn__comment-reply-btn"><i
                                                            class="icon-reply-1"></i>Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div> --}}
                            {{-- <hr> --}}
                            <!-- comment-reply -->
                            {{-- <div class="ltn__comment-reply-area ltn__form-box mb-60---">
                                <h4 class="title-2">Post Comment</h4>
                                <form action="#">
                                    <div class="input-item input-item-textarea ltn__custom-icon">
                                        <textarea placeholder="Type your comments...."></textarea>
                                    </div>
                                    <div class="input-item input-item-name ltn__custom-icon">
                                        <input type="text" placeholder="Type your name....">
                                    </div>
                                    <div class="input-item input-item-email ltn__custom-icon">
                                        <input type="email" placeholder="Type your email....">
                                    </div>
                                    <div class="input-item input-item-website ltn__custom-icon">
                                        <input type="text" name="website" placeholder="Type your website....">
                                    </div>
                                    <label class="mb-0 input-info-save"><input type="checkbox" name="agree"> Save
                                        my name, email, and website in this browser for the next time I comment.</label>
                                    <div class="btn-wrapper">
                                        <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit"><i
                                                class="far fa-comments"></i> Post Comment</button>
                                    </div>
                                </form>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PAGE DETAILS AREA END -->

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
