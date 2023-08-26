@include('landing-page.sections.head')

<body>
    <div class="body-wrapper">
        <header class="ltn__header-area ltn__header-3">
            <!-- ltn__header-top-area start -->
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
                            <h1 class="page-title">{{ $title }}</h1>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li>
                                        <a href="{{ url('/') }}">
                                            <span class="ltn__secondary-color"><i class="fas fa-home"></i></span>
                                            Beranda
                                        </a>
                                    </li>
                                    <li>{{ $title }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB AREA END -->

        <!-- WISHLIST AREA START -->
        <div class="liton__wishlist-area pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- PRODUCT TAB AREA START -->
                        <div class="ltn__product-tab-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="ltn__tab-menu-list mb-50">
                                            <div class="nav">
                                                <a class="{{ Route::current()->uri == 'profile' ? 'active show' : null }}"
                                                    data-bs-toggle="tab" href="#liton_tab_1_1">Profil
                                                    <i class="fas fa-home"></i></a>
                                                <a class="{{ Route::current()->uri == 'orders' ? 'active show' : null }}"
                                                    data-bs-toggle="tab" href="#liton_tab_1_2">Pesanan Saya<i
                                                        class="fas fa-file-alt"></i></a>
                                                <a data-bs-toggle="tab" href="#liton_tab_1_3">Edit Profil <i
                                                        class="fas fa-edit"></i></a>
                                                <a data-bs-toggle="tab" href="#liton_tab_1_4">Ganti Password <i
                                                        class="fas fa-key"></i></a>
                                                <a href="{{ url('logout') }}"
                                                    onclick="confirm('Yakin ingin keluar?')">Keluar <i
                                                        class="fas fa-sign-out-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="tab-content">
                                            <div class="tab-pane fade {{ Route::current()->uri == 'profile' ? 'active show' : null }}"
                                                id="liton_tab_1_1">
                                                <div class="ltn__myaccount-tab-content-inner">
                                                    <p>Hi <strong>{{ Auth::user()->name }}</strong> (bukan
                                                        <strong>{{ Auth::user()->name }}</strong>?
                                                        <small><a href="{{ url('logout') }}">Keluar</a></small> )
                                                    </p>
                                                    <p>
                                                        <span>Nama : {{ Auth::user()->name }}</span><br>
                                                        <span>Email : {{ Auth::user()->email }}</span><br>
                                                        <span>No. Handphone :
                                                            {{ Auth::user()->phone_number }}</span><br>
                                                        <span>Alamat :
                                                            {{ Auth::user()->address }}</span><br>
                                                        <span>Bergabung Sejak :
                                                            {{ Auth::user()->created_at }}</span><br>
                                                        <span>Terakhir Kali Edit Data :
                                                            {{ Auth::user()->updated_at }}</span><br>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade {{ Route::current()->uri == 'orders' ? 'active show' : null }}"
                                                id="liton_tab_1_2">
                                                <div class="ltn__myaccount-tab-content-inner">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Produk Yang Dipesan</th>
                                                                    <th>Status</th>
                                                                    <th>Harga</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @forelse ($orders as $order)
                                                                    <tr>
                                                                        <td>
                                                                            <ul>
                                                                                @foreach (json_decode($order->products, true) as $product)
                                                                                    <li>
                                                                                        {{ App\Models\Product::findOrFail($product['product_id'])->name }}
                                                                                        ({{ $product['quantity'] }}
                                                                                        Buah)
                                                                                    </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </td>
                                                                        <td>{{ $order->status }}</td>
                                                                        <td>{{ formatRupiah($order->total_price) }}
                                                                        </td>
                                                                        <td><a href="{{ url('orders/invoice', $order->id) }}"
                                                                                class="btn btn-sm btn-dark"
                                                                                target="_blank">Lihat
                                                                                Bukti</a></td>
                                                                    </tr>
                                                                @empty
                                                                    <tr>
                                                                        <td colspan="4" class="text-center">Belum ada
                                                                            pesanan tersedia</td>
                                                                    </tr>
                                                                @endforelse
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade {{ Route::current()->uri == 'edit-profile' ? 'active show' : null }}"
                                                id="liton_tab_1_3">
                                                <div class="ltn__myaccount-tab-content-inner">
                                                    <div class="ltn__form-box">
                                                        <form id="editProfileForm" action="{{ url('edit-profile') }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            <input type="hidden" name="id"
                                                                value="{{ Auth::user()->id }}">

                                                            <div>
                                                                <label for="form-label">
                                                                    Nama Lengkap
                                                                    <span id="nameError" class="text-danger"></span>
                                                                </label>
                                                                <input type="text" name="name"
                                                                    value="{{ Auth::user()->name }}"
                                                                    placeholder="Nama Lengkap">
                                                            </div>
                                                            <div>
                                                                <label for="form-label">
                                                                    Email
                                                                    <span id="emailError" class="text-danger"></span>
                                                                </label>
                                                                <input type="text" name="email"
                                                                    value="{{ Auth::user()->email }}"
                                                                    placeholder="Email">
                                                            </div>
                                                            <div>
                                                                <label for="form-label">
                                                                    Nomor Handphone
                                                                    <span id="phoneNumberError"
                                                                        class="text-danger"></span>
                                                                </label>
                                                                <input type="text" name="phone_number"
                                                                    value="{{ Auth::user()->phone_number }}"
                                                                    placeholder="Nomor Handphone">
                                                            </div>
                                                            <div>
                                                                <label for="form-label">
                                                                    Alamat
                                                                    <span id="addressError"
                                                                        class="text-danger"></span>
                                                                </label>
                                                                <input type="text" name="address"
                                                                    value="{{ Auth::user()->address }}"
                                                                    placeholder="Alamat">
                                                            </div>
                                                            <div id="map-canvas" style="height: 200px;"></div>
                                                            <input id="latitude" type="hidden" name="latitude">
                                                            <input id="longitude" type="hidden" name="longitude">
                                                            <div class="btn-wrapper">
                                                                <button type="submit"
                                                                    class="btn theme-btn-1 btn-effect-1 text-uppercase">
                                                                    Simpan Perubahan
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="liton_tab_1_4">
                                                <div class="ltn__myaccount-tab-content-inner">
                                                    <p>Kosongkan kolom jika tidak ingin mengganti kata sandimu</p>
                                                    <div class="ltn__form-box">
                                                        <form id="changePasswordForm" action="change-password"
                                                            method="POST" enctype="multipart/form-data">
                                                            <input type="hidden" id="id" name="id"
                                                                value="{{ Auth::user()->id }}">
                                                            <div>
                                                                <label for="form-label">
                                                                    Kata Sandi Baru
                                                                    <span id="passwordError"
                                                                        class="text-danger"></span>
                                                                </label>
                                                                <input type="password" name="password"
                                                                    placeholder="Kata Sandi">
                                                            </div>
                                                            <div>
                                                                <label for="form-label">
                                                                    Konfirmasi Kata Sandi Baru
                                                                    <span id="confirmPasswordError"
                                                                        class="text-danger"></span>
                                                                </label>
                                                                <input type="password" name="confirm_password"
                                                                    placeholder="Konfirmasi Kata Sandi">
                                                            </div>
                                                            <div class="btn-wrapper">
                                                                <button type="submit"
                                                                    class="btn theme-btn-1 btn-effect-1 text-uppercase">
                                                                    Ganti
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- PRODUCT TAB AREA END -->
                    </div>
                </div>
            </div>
        </div>
        <!-- WISHLIST AREA START -->

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

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1MgLuZuyqR_OGY3ob3M52N46TDBRI_9k&" async defer></script>

    <script src="{{ asset('assets-admin/vendor/sweetalert2/sweetalert2.min.js') }}"></script>

    <script>
        var map, marker, myLatLng;

        $(document).ready(function() {
            initMap();

            var Toast = Swal.mixin({
                toast: true,
                position: "bottom-end",
                showConfirmButton: false,
                timer: 3000,
            });

            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });

            $("#editProfileForm").on("submit", function(e) {
                e.preventDefault();

                $.ajax({
                    url: $(this).attr("action"),
                    method: $(this).attr("method"),
                    data: new FormData(this),
                    processData: false,
                    dataType: "json",
                    contentType: false,
                    beforeSend: function() {
                        $("#name").removeClass("is-invalid");
                        $("#email").removeClass("is-invalid");
                        $("#phoneNumber").removeClass("is-invalid");

                        $("#button").html(
                            '<div class="text-center"><div class="spinner-border spinner-border-sm text-white"></div> Memproses...</div>'
                        );
                    },
                    success: function(response) {
                        $("#button").html("Simpan");

                        Swal.fire({
                            icon: "success",
                            title: response.status,
                            text: response.message,
                            confirmButtonText: "Lanjut",
                            confirmButtonColor: "#59C4BC",
                            backdrop: true,
                            allowOutsideClick: () => {
                                console.log("Klik Tombol Lanjut");
                            },
                        }).then((result) => {
                            if (result.value == true) {
                                window.location.href = '/edit-profile';
                            }
                        });
                    },
                    error: function(error) {
                        console.log(error);
                        $("#button").html("Simpan");

                        if (error.status == 422) {
                            var responseError = error["responseJSON"]["errors"];
                            $("#nameError").html(responseError["name"]);
                            $("#emailError").html(responseError["email"]);
                            $("#phoneNumberError").html(responseError["phone_number"]);

                            if (responseError["phone_number"]) {
                                $("#phoneNumber").addClass("is-invalid").focus();
                            }

                            if (responseError["email"]) {
                                $("#email").addClass("is-invalid").focus();
                            }

                            if (responseError["name"]) {
                                $("#name").addClass("is-invalid").focus();
                            }
                        } else {
                            Toast.fire({
                                icon: "error",
                                title: "Error " + error.status + "! \nTerjadi masalah",
                            });
                        }
                    },
                });
            });

            $("#changePasswordForm").on("submit", function(e) {
                e.preventDefault();

                $.ajax({
                    url: $(this).attr("action"),
                    method: $(this).attr("method"),
                    data: new FormData(this),
                    processData: false,
                    dataType: "json",
                    contentType: false,
                    beforeSend: function() {
                        $("#passwordError").html("");
                        $("#confirmPasswordError").html("");

                        $("#changePasswordButton").html(
                            '<div class="text-center"><div class="spinner-border spinner-border-sm text-white"></div> Memproses...</div>'
                        );
                    },
                    success: function(response) {
                        Swal.fire({
                            icon: "success",
                            title: response.status,
                            text: response.message,
                            confirmButtonText: "Lanjut",
                            confirmButtonColor: "#007BFF",
                            backdrop: true,
                            allowOutsideClick: () => {
                                console.log("Klik Tombol Lanjut");
                            },
                        }).then((result) => {
                            if (result.value == true) {
                                window.location.reload();
                            }
                        });
                    },
                    error: function(error) {
                        console.log(error);
                        $("#changePasswordButton").html("Simpan");

                        if (error.status == 422) {
                            var responseError = error["responseJSON"]["errors"];
                            $("#passwordError").html(responseError["password"]);
                            $("#confirmPasswordError").html(responseError["confirm_password"]);

                            if (responseError["confirm_password"]) {
                                $("#confirmPassword").addClass("is-invalid").focus();
                            }

                            if (responseError["new_password"]) {
                                $("#newPassword").addClass("is-invalid").focus();
                            }

                            if (responseError["old_password"]) {
                                $("#oldPassword").addClass("is-invalid").focus();
                            }
                        } else {
                            Toast.fire({
                                icon: "error",
                                title: "Error " + error.status + "! \nTerjadi masalah",
                            });
                        }
                    },
                });
            });
        });

        function initMap() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(success, fail);
            } else {
                alert("Browser anda tidak mendukung untuk menampilkan peta kami.");
            }
        }

        function success(position) {
            @if (empty(Auth::user()->latitude))
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;
            @else
                var latitude = {{ Auth::user()->latitude }};
                var longitude = {{ Auth::user()->longitude }};
            @endif
            $("#latitude").val(latitude);
            $("#longitude").val(longitude);
            myLatLng = new google.maps.LatLng(latitude, longitude);
            createMap(myLatLng);
        }

        function fail() {
            alert("Gagal menampilkan peta, cobalah periksa koneksi internetmu");
        }

        function createMap(myLatLng) {
            map = new google.maps.Map(document.getElementById("map-canvas"), {
                center: myLatLng,
                zoom: 12,
            });
            marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                draggable: true,
            });
            google.maps.event.addListener(marker, "position_changed", function() {
                let lat = marker.position.lat();
                let lng = marker.position.lng();
                $("#latitude").val(lat);
                $("#longitude").val(lng);
            });
        }
    </script>
</body>

</html>
