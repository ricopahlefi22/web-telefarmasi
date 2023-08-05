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
                                @include('landing-page.sections.search')
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
                            <h1 class="page-title">Login</h1>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li>
                                        <a href="{{ url('/') }}">
                                            <span class="ltn__secondary-color">
                                                <i class="fas fa-home"></i>
                                            </span> Beranda
                                        </a>
                                    </li>
                                    <li>Akun</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB AREA END -->

        <!-- LOGIN AREA START -->
        <div class="ltn__login-area pb-65">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area text-center">
                            <h1 class="section-title">Masuk ke Akunmu</h1>
                            <p>Kamu perlu login terlebih dahulu untuk menggunakan lebih banyak layanan.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="account-login-inner">
                            <form id="form" action="login" class="ltn__form-box contact-form-box" method="POST">
                                <div>
                                    <label for="form-label">
                                        Email<span class="text-danger">*</span>
                                        <span id="emailError" class="text-danger"></span>
                                    </label>
                                    <input type="text" name="email" placeholder="Email">
                                </div>
                                <div>
                                    <label for="form-label">
                                        Kata Sandi<span class="text-danger">*</span>
                                        <span id="passwordError" class="text-danger"></span>
                                    </label>
                                    <input type="password" name="password" placeholder="Kata Sandi">
                                </div>
                                <div class="btn-wrapper mt-0">
                                    <button id="submit" class="theme-btn-1 btn btn-block"
                                        type="submit">Masuk</button>
                                </div>
                                <div class="go-to-btn mt-20">
                                    <a href="{{ url('forgot-password') }}"><small>Lupa Password?</small></a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        {{-- <div class="py-5">
                            <p>
                                <span>atau menggunakan: </span>
                                <a href="{{ url('auth/google') }}" style="margin: 0 20px 0 20px">
                                    <img src="{{ asset('assets-landing/img/google.png') }}" height="30">
                                </a>
                                <a href="{{ url('auth/facebook') }}">
                                    <img src="{{ asset('assets-landing/img/facebook.png') }}" height="30">
                                </a>
                            </p>
                        </div> --}}
                        <div class="account-create text-center pt-50">
                            <h4>Belum Punya Akun?</h4>
                            <p>Buatlah akun terlebih dahulu untuk dapat menggunakan seluruh fasilitas kami</p>
                            <div class="btn-wrapper">
                                <a href="{{ url('register') }}" class="theme-btn-1 btn black-btn">Buat Akun</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- LOGIN AREA END -->

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

    <script src="{{ asset('assets-admin/vendor/sweetalert2/sweetalert2.min.js') }}"></script>

    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>
