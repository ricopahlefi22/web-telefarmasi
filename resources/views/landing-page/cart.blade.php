@include('landing-page.sections.head')

<body>
    <div class="body-wrapper">
        <header class="ltn__header-area ltn__header-3">
            <div class="ltn__header-top-area border-bottom">
                @include('landing-page.sections.header')
            </div>
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
        </div> <!-- Utilize Cart Menu End -->

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
                            <h1 class="page-title">Keranjang</h1>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li>
                                        <a href="{{ url('/') }}">
                                            <span class="ltn__secondary-color"><i class="fas fa-home"></i></span>
                                            Beranda
                                        </a>
                                    </li>
                                    <li>Keranjang</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB AREA END -->

        <!-- SHOPING CART AREA START -->
        <div class="liton__shoping-cart-area mb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shoping-cart-inner">
                            <form id="form" action="checkout" method="POST">
                                <div class="shoping-cart-table table-responsive">
                                    <table class="table">
                                        <tbody>
                                            @foreach ($carts as $cart)
                                                <tr>
                                                    <td class="cart-product-remove">x</td>
                                                    <td class="cart-product-image">
                                                        <a href="{{ url('products/detail', $cart->product->id) }}">
                                                            <img src="{{ asset($cart->product->image) }}"
                                                                alt="Gambar Produk">
                                                        </a>
                                                    </td>
                                                    <td class="cart-product-info">
                                                        <h4>
                                                            <a href="{{ url('products/detail', $cart->product->id) }}">
                                                                {{ $cart->product->name }}
                                                            </a>
                                                        </h4>
                                                    </td>
                                                    <td class="cart-product-price">{{ $cart->product->price }}</td>
                                                    <td class="cart-product-quantity">
                                                        <div class="cart-plus-minus">
                                                            <input type="hidden" name="product_id[]"
                                                                value="{{ $cart->product->id }}">
                                                            <input type="number" value="{{ $cart->quantity }}"
                                                                name="product_quantity[]" class="cart-plus-minus-box">
                                                        </div>
                                                    </td>
                                                    <td class="cart-product-subtotal">
                                                        {{ $cart->quantity * $cart->product->price }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="shoping-cart-total mt-50">
                                    <table class="table">
                                        @php
                                            $subtotal = 0;
                                            $ongkir = 0;

                                            foreach ($carts as $cart) {
                                                $subtotal += $cart->quantity * $cart->product->price;
                                            }
                                        @endphp
                                        <tbody>
                                            <tr>
                                                <td>Subtotal Keranjang</td>
                                                <td>Rp. {{ $subtotal }}</td>
                                            </tr>
                                            <tr>
                                                <td>Ongkos Kirim</td>
                                                <td>Rp. {{ $ongkir }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Total</strong></td>
                                                <td><strong>Rp. {{ $subtotal + $ongkir }}</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="btn-wrapper text-right">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="total_price" value="{{ $subtotal + $ongkir }}">
                                        <button type="submit" class="theme-btn-1 btn mt-2 btn-block btn-effect-1">
                                            Bayar
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SHOPING CART AREA END -->

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

    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>

    <!-- All JS Plugins -->
    <script src="{{ asset('assets-landing/js/plugins.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets-landing/js/main.js') }}"></script>

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });

            $("#form").on("submit", function(e) {
                e.preventDefault();

                $.ajax({
                    url: $(this).attr("action"),
                    method: $(this).attr("method"),
                    data: new FormData(this),
                    processData: false,
                    dataType: "json",
                    contentType: false,
                    beforeSend: function() {
                        $("#submit").html(
                            '<div class="text-center"><div class="spinner-border spinner-border-sm text-white"></div></div>'
                        );
                    },
                    success: function(response) {
                        console.log(response);
                        window.snap.pay(response.snapToken, {
                            onSuccess: function(result) {
                                /* You may add your own implementation here */
                                alert("payment success!");
                                console.log(result);
                            },
                            onPending: function(result) {
                                /* You may add your own implementation here */
                                alert("wating your payment!");
                                console.log(result);
                            },
                            onError: function(result) {
                                /* You may add your own implementation here */
                                alert("payment failed!");
                                console.log(result);
                            },
                            onClose: function() {
                                /* You may add your own implementation here */
                                alert(
                                    'you closed the popup without finishing the payment'
                                );
                            }
                        });
                    },
                    error: function(error) {
                        console.error(error);
                    },
                });

            });
        });
    </script>
</body>

</html>
