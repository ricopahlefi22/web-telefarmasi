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
                            <h1 class="page-title">Pembayaran</h1>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li>
                                        <a href="{{ url('/') }}">
                                            <span class="ltn__secondary-color"><i class="fas fa-home"></i></span>
                                            Beranda
                                        </a>
                                    </li>
                                    <li>Pesanan</li>
                                    <li>Pembayaran</li>
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
                            <form id="form" action="/post-checkout" method="POST">
                                <input type="hidden" name="order_id" value="{{ $order->id }}">
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <div class="row">
                                    <div class="col-6">
                                        @foreach (json_decode($order->products, true) as $product)
                                            <div
                                                class="row mt-4 d-flex align-items-center justify-content-center text-center">
                                                <div class="col-1">
                                                    {{ $loop->iteration }}.
                                                </div>
                                                <div class="col-2">
                                                    <img
                                                        src="{{ asset(App\Models\Product::findOrFail($product['product_id'])->image) }}">
                                                </div>
                                                <div class="col-3 text-dark fw-bold">
                                                    {{ App\Models\Product::findOrFail($product['product_id'])->name }}
                                                </div>
                                                <div class="col-3">
                                                    {{ $product['quantity'] }} Buah
                                                </div>
                                                <div class="col-3">
                                                    {{ formatRupiah(App\Models\Product::findOrFail($product['product_id'])->price * $product['quantity']) }}
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="col-6">
                                        <div class="shoping-cart-total">
                                            <table class="table">
                                                @php
                                                    $subtotal = 0;
                                                    $quantityProduct = 0;

                                                    foreach (json_decode($order->products, true) as $product) {
                                                        $quantityProduct += $product['quantity'];
                                                        $subtotal += App\Models\Product::findOrFail($product['product_id'])->price * $product['quantity'];
                                                    }
                                                @endphp
                                                <tbody>
                                                    <tr>
                                                        <td>Jumlah Produk ({{ $quantityProduct }} Buah)</td>
                                                        <td class="text-right">
                                                            {{ formatRupiah($subtotal) }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ongkos Kirim</td>
                                                        <td class="text-right">{{ formatRupiah($order->ongkir_price) }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Total</strong></td>
                                                        <td class="text-right">
                                                            <strong>{{ formatRupiah($order->total_price) }}</strong>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="btn-wrapper text-right">
                                                <button id="submit" type="submit"
                                                    class="theme-btn-1 btn mt-2 btn-block btn-effect-1">
                                                    Bayar
                                                </button>
                                            </div>
                                        </div>
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

    <script src="{{ asset('assets-admin/vendor/sweetalert2/sweetalert2.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });

            $("input[name='delivery']").on('change', function() {
                console.log($(this).val());
                if ($(this).val() == 'true') {
                    $("#trueDeliveryPrice").removeClass('d-none');
                    $("#falseDeliveryPrice").addClass('d-none');
                } else {
                    $("#falseDeliveryPrice").removeClass('d-none');
                    $("#trueDeliveryPrice").addClass('d-none');
                }
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
                        $("#submit").html('Bayar');
                        console.log(response);
                        var order_id = response.order.id;
                        var user_id = response.user.id;

                        window.snap.pay(response.snapToken, {
                            onSuccess: function(result) {
                                console.log(result);
                                $.ajax({
                                    url: '/change-order-status',
                                    method: 'POST',
                                    data: {
                                        order_id: order_id,
                                        user_id: user_id,
                                    },
                                    success: function(response) {
                                        console.log(response);
                                        $("#submit").html(
                                            'Bayar<i class="far fa-long-arrow-right"></i>'
                                        );
                                        Swal.fire({
                                            icon: "success",
                                            title: response
                                                .status,
                                            text: response
                                                .message,
                                            confirmButtonColor: "#59C4BC",
                                            confirmButtonText: "Lanjut",
                                            backdrop: true,
                                            allowOutsideClick: () => {
                                                console.log(
                                                    "Klik Tombol Lanjut"
                                                );
                                            },
                                        }).then((result) => {
                                            if (result.value ==
                                                true) {
                                                window.location.reload();
                                            }
                                        });
                                    },
                                    error: function(error) {
                                        console.log(error)
                                    }
                                })
                            },
                            onPending: function(result) {
                                /* You may add your own implementation here */
                                console.log(result);
                                Swal.fire({
                                    icon: "warning",
                                    title: "Mohon Segera Dibayar",
                                    text: "Kami Masih Menunggu Pembayaranmu",
                                });
                                $("#submit").html('Bayar');
                            },
                            onError: function(result) {
                                /* You may add your own implementation here */
                                console.log(result);
                                Swal.fire({
                                    icon: "error",
                                    title: "Transaksi Gagal",
                                    text: "Coba Lagi Dalam Beberapa Saat",
                                });
                                $("#submit").html('Bayar');
                            },
                            onClose: function() {
                                /* You may add your own implementation here */
                                alert(
                                    'Kamu menutup pembayaran'
                                );
                                $("#submit").html('Bayar');
                            }
                        });
                    },
                    error: function(error) {
                        $("#submit").html('Bayar');

                        console.error(error);
                    },
                });
            });
        });
    </script>
</body>

</html>
