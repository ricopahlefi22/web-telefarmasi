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
                            <h1 class="page-title">Daftar</h1>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li>
                                        <a href="{{ url('/') }}">
                                            <span class="ltn__secondary-color">
                                                <i class="fas fa-home"></i>
                                            </span> Beranda
                                        </a>
                                    </li>
                                    <li>Daftar</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB AREA END -->

        <!-- LOGIN AREA START (Register) -->
        <div class="ltn__login-area pb-110">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area text-center">
                            <h1 class="section-title">Buat Akun</h1>
                            <p>Silahkan daftar untuk menggunakan lebih banyak layanan kami.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="account-login-inner">
                            <form id="form" action="register" class="ltn__form-box" method="POST">
                                <div>
                                    <label for="form-label">
                                        Nama Lengkap<span class="text-danger">*</span>
                                        <span id="nameError" class="text-danger"></span>
                                    </label>
                                    <input type="text" name="name" placeholder="Nama Lengkap">
                                </div>
                                <div>
                                    <label for="form-label">
                                        Email<span class="text-danger">*</span>
                                        <span id="emailError" class="text-danger"></span>
                                    </label>
                                    <input type="text" name="email" placeholder="Email">
                                </div>
                                <div>
                                    <label for="form-label">
                                        Nomor Handphone<span class="text-danger">*</span>
                                        <span id="phoneNumberError" class="text-danger"></span>
                                    </label>
                                    <input type="text" name="phone_number" placeholder="Nomor Handphone">
                                </div>
                                <div>
                                    <label for="form-label">
                                        Alamat<span class="text-danger">*</span>
                                        <span id="addressError" class="text-danger"></span>
                                    </label>
                                    <input type="text" name="address" placeholder="Alamat">
                                </div>
                                <div>
                                    <label for="form-label">
                                        Kata Sandi<span class="text-danger">*</span>
                                        <span id="passwordError" class="text-danger"></span>
                                    </label>
                                    <input type="password" name="password" placeholder="Kata Sandi">
                                </div>
                                <div>
                                    <label for="form-label">
                                        Konfirmasi Kata Sandi<span class="text-danger">*</span>
                                        <span id="confirmPasswordError" class="text-danger"></span>
                                    </label>
                                    <input type="password" name="confirm_password" placeholder="Konfirmasi Kata Sandi">
                                </div>

                                <div class="btn-wrapper">
                                    <button id="submit" class="theme-btn-1 btn reverse-color btn-block"
                                        type="submit">
                                        Daftar
                                    </button>
                                </div>
                            </form>
                            <div class="by-agree text-center">
                                <div class="go-to-btn mt-20">
                                    <a href="{{ url('login') }}">Sudah Punya Akun?</a>
                                </div>
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

    <script src="{{ asset('js/register.js') }}"></script>
</body>

</html>
