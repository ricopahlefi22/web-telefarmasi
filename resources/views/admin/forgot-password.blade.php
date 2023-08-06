<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
    <meta name="author" content="Rico Pahlefi, Kayong Developer">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Lupa Password - Admin Apotek Desta Farma</title>

    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/sweetalert2/sweetalert2.min.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('assets-admin/css/main.css') }}">

</head>

<body data-theme="light" class="font-nunito">
    <!-- WRAPPER -->
    <div id="wrapper" class="theme-cyan">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle auth-main">
                <div class="auth-box">
                    <div class="card">
                        <div class="header">
                            <h5><strong>Lupa Kata Sandi</strong></h5>
                            <p>Kami akan mengirimu kode OTP melalui whatsapp.</p>
                        </div>
                        <div class="body">
                            <form id="form" class="form-auth-small" action="forgot-password" method="POST">
                                <div class="form-group">
                                    <label for="phoneNumber" class="control-label sr-only">Email</label>
                                    <input id="phoneNumber" type="text" name="phone_number" class="form-control"
                                        placeholder="Nomor Handphone (Whatsapp)">
                                    <span id="phoneNumberError" class="invalid-feedback"></span>
                                </div>
                                <button id="submit" type="submit" class="btn btn-primary btn-lg btn-block">Kirim
                                    OTP</button>
                                <div class="bottom">
                                    <span class="helper-text m-b-10">
                                        <i class="fa fa-lock"></i>
                                        <a href="{{ url('login') }}" class="text-dark">Sudah Ingat Kata Sandimu?</a>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="otpModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div id="modalHeader" class="modal-header">
                    <h4 class="modal-title fs-5" id="modalTitle">Masukkan OTP</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="otpForm" method="POST">
                    <input id="token" type="hidden" name="token">
                    <div class="modal-body">
                        <div class="mb-2">
                            <input type="text" class="form-control" id="otp" name="otp"
                                placeholder="Masukkan OTP">
                            <span id="otpError" class="invalid-feedback"></span>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button id="otpSubmit" type="submit" class="btn btn-dark">Lanjut</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets-admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendor/sweetalert2/sweetalert2.min.js') }}"></script>

    <script src="{{ asset('assets-admin/bundles/libscripts.bundle.js') }}"></script>

    <script src="{{ asset('js/forgot-password.js') }}"></script>
</body>

</html>
