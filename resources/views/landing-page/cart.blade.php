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
                            <form id="form" action="make-order" method="POST">
                                @csrf
                                <div class="shoping-cart-table table-responsive">
                                    <table class="table">
                                        <tbody>
                                            @forelse ($carts as $cart)
                                                <input type="hidden" name="product_id[]"
                                                    value="{{ $cart->product->id }}">
                                                <tr>
                                                    <td class="cart-product-remove">
                                                        <button type="button" data-id="{{ $cart->id }}"
                                                            class="delete">x</button>
                                                    </td>
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
                                                        <p>
                                                            Harga Satuan: Rp.
                                                            {{ str_replace(',', '.', number_format($cart->product->price)) }}
                                                        </p>
                                                    </td>
                                                    <td class="cart-product-price">
                                                        Jumlah Produk:<br>
                                                        <div class="cart-plus-minus">
                                                            <input type="text" value="{{ $cart->quantity }}"
                                                                name="quantities[]" class="cart-plus-minus-box">
                                                        </div>

                                                    </td>
                                                    <td class="cart-product-subtotal">
                                                        Jumlah:<br> Rp.
                                                        {{ str_replace(',', '.', number_format($cart->quantity * $cart->product->price)) }}
                                                    </td>
                                                </tr>
                                            @empty
                                                <p class="text-center">Keranjang Kosong</p>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                @if ($carts->isNotEmpty())
                                    <div class="mt-50">
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="d-flex gap-2">
                                                    <label id="falseDeliveryCard" for="falseDelivery">
                                                        <div style="border: 1px solid rgb(38, 39, 38);"
                                                            class="rounded p-2">
                                                            <input id="falseDelivery" type="radio" name="delivery"
                                                                value="false">
                                                            <span class="fw-bold fs-5 text-dark">
                                                                Ambil di Tempat
                                                            </span>
                                                            <p>
                                                                Pengambilan barang yang dilakukan sendiri di alamat
                                                                kami
                                                                <b>{{ App\Models\WebConfig::first()->address }}</b>
                                                            </p>
                                                        </div>
                                                    </label>
                                                    <label id="trueDeliveryCard" for="trueDelivery">
                                                        <div style="border: 1px solid rgb(38, 39, 38);"
                                                            class="rounded p-2">
                                                            <input id="trueDelivery" type="radio" name="delivery"
                                                                value="true" checked>
                                                            <span class="fw-bold fs-5 text-dark">
                                                                Antar Ke Alamatmu
                                                            </span>
                                                            <p>
                                                                Pengantaran obat ke alamatmu akan dikenakan tarif
                                                                berdasarkan jarak apotek ke alamatmu
                                                            </p>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <label for="note">Catatan (Optional): </label>
                                                    <textarea name="note" id="note"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-5 px-4">
                                                <label for="name">Nama Pemesan:</label>
                                                <p id="name"><strong>{{ Auth::user()->name }}
                                                        ({{ Auth::user()->phone_number }})</strong></p>
                                                <div>
                                                    <label for="address">Alamat: </label>
                                                    <a href="{{ url('edit-profile') }}"
                                                        class="text-warning float-right">Ubah</a>
                                                </div>
                                                <p id="address"><strong>{{ Auth::user()->address }}</strong></p>
                                                <div class="shoping-cart-total">
                                                    <table class="table">
                                                        @php
                                                            $totalOngkir = $ongkir;
                                                            $quantityProduct = 0;
                                                            $subTotal = 0;
                                                            $total = 0;

                                                            foreach ($carts as $cart) {
                                                                $quantityProduct = $cart->quantity;
                                                                $subTotal += $cart->quantity * $cart->product->price;
                                                                $total += $cart->quantity * $cart->product->price;
                                                            }
                                                        @endphp
                                                        <tbody id="trueDeliveryPrice">
                                                            <tr>
                                                                <td>Keranjang ({{ $quantityProduct }})</td>
                                                                <td class="text-right">
                                                                    {{ formatRupiah($subTotal) }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Ongkos Kirim</td>
                                                                <td class="text-right">
                                                                    {{ formatRupiah($totalOngkir) }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Total</strong></td>
                                                                <td class="text-right">
                                                                    <strong>{{ formatRupiah($total + $totalOngkir) }}</strong>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <tbody id="falseDeliveryPrice" class="d-none">
                                                            <tr>
                                                                <td>Jumlah Produk ({{ $quantityProduct }})</td>
                                                                <td class="text-right">
                                                                    {{ formatRupiah($subTotal) }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Total</strong></td>
                                                                <td class="text-right">
                                                                    <strong>{{ formatRupiah($total) }}</strong>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="btn-wrapper text-right">
                                                        <input type="hidden" name="user_id"
                                                            value="{{ Auth::user()->id }}">
                                                        <input type="hidden" name="ongkir"
                                                            value="{{ $totalOngkir }}">
                                                        <input type="hidden" name="total_price"
                                                            value="{{ $total }}">
                                                        <input type="hidden" name="total_price_with_ongkir"
                                                            value="{{ $total + $totalOngkir }}">
                                                        <button id="submit" type="submit"
                                                            class="theme-btn-1 btn mt-2 btn-block btn-effect-1">
                                                            Buat Pesanan
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
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

                if (confirm(
                        'Jika anda telah mengubah jumlah produk maka total harga akan mengikuti jumlah pesanan yang telah ditetapkan. Ingin melanjutkan pembayaran?'
                        ) === true) {
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
                            $("#submit").html('Buat Pesanan');

                            Swal.fire({
                                icon: "success",
                                title: response.status,
                                text: response.message,
                                confirmButtonColor: "#59C4BC",
                                confirmButtonText: "Lanjut",
                                backdrop: true,
                                allowOutsideClick: () => {
                                    console.log("Klik Tombol Lanjut");
                                },
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = response.route;
                                }
                            });
                            // var order_id = response.order.id;
                            // var user_id = response.user.id;

                            // window.snap.pay(response.snapToken, {
                            //     onSuccess: function(result) {
                            //         /* You may add your own implementation here */
                            //         console.log(result);
                            //         $.ajax({
                            //             url: 'change-order-status',
                            //             method: 'POST',
                            //             data: {
                            //                 order_id: order_id,
                            //                 user_id: user_id,
                            //             },
                            //             success: function(response) {
                            //                 console.log(response);
                            //                 $("#submit").html(
                            //                     'Bayar<i class="far fa-long-arrow-right"></i>'
                            //                 );
                            //                 Swal.fire({
                            //                     type: "success",
                            //                     title: response
                            //                         .status,
                            //                     text: response
                            //                         .message,
                            //                     confirmButtonColor: "#59C4BC",
                            //                     confirmButtonText: "Lanjut",
                            //                     backdrop: true,
                            //                     allowOutsideClick: () => {
                            //                         console.log(
                            //                             "Klik Tombol Lanjut"
                            //                         );
                            //                     },
                            //                 }).then((result) => {
                            //                     if (result.value ==
                            //                         true) {
                            //                         window.location
                            //                             .href = '/';
                            //                     }
                            //                 });
                            //             },
                            //             error: function(error) {
                            //                 console.log(error)
                            //             }
                            //         })
                            //     },
                            //     onPending: function(result) {
                            //         /* You may add your own implementation here */
                            //         console.log(result);
                            //         Swal.fire({
                            //             type: "warning",
                            //             title: "Mohon Segera Dibayar",
                            //             text: "Kami Masih Menunggu Pembayaranmu",
                            //         });
                            //         $("#submit").html('Bayar');
                            //     },
                            //     onError: function(result) {
                            //         /* You may add your own implementation here */
                            //         console.log(result);
                            //         Swal.fire({
                            //             type: "error",
                            //             title: "Transaksi Gagal",
                            //             text: "Coba Lagi Dalam Beberapa Saat",
                            //         });
                            //         $("#submit").html('Bayar');
                            //     },
                            //     onClose: function() {
                            //         /* You may add your own implementation here */
                            //         alert(
                            //             'Kamu menutup pembayaran'
                            //         );
                            //         $("#submit").html('Bayar');
                            //     }
                            // });
                        },
                        error: function(error) {
                            $("#submit").html('Buat Pesanan');

                            console.error(error);
                        },
                    });
                }
            });

            $("body").on('click', '.delete', function() {
                $.ajax({
                    url: 'products/delete-to-cart',
                    method: 'POST',
                    data: {
                        id: $(this).data('id')
                    },
                    success: function(response) {
                        console.log(response);
                        Swal.fire({
                            icon: "success",
                            title: response.status,
                            text: response.message,
                            confirmButtonColor: "#59C4BC",
                            confirmButtonText: "Lanjut",
                            backdrop: true,
                            allowOutsideClick: () => {
                                console.log("Klik Tombol Lanjut");
                            },
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.reload();
                            }
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>
