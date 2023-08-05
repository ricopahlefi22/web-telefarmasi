<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
    <meta name="author" content="Rico Pahlefi, Kayong Developer">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Reset Password - Admin Apotek Desta Farma</title>

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
                            <h5><strong>Reset Password</strong></h5>
                            <p>atur ulang kata sandimu untuk dapat masuk ke dalam sistem.</p>
                        </div>
                        <div class="body">
                            <form id="form" class="form-auth-small" action="reset-password" method="POST">
                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="form-group">
                                    <label for="password" class="control-label sr-only">Password</label>
                                    <input id="password" type="password" name="password" class="form-control" placeholder="Password">
                                    <span id="passwordError" class="invalid-feedback"></span>
                                </div>
                                <div class="form-group">
                                    <label for="confirmPassword" class="control-label sr-only">Konfirmasi Password</label>
                                    <input id="confirmPassword" type="password" name="confirm_password" class="form-control" placeholder="Konfirmasi Password">
                                    <span id="confirmPasswordError" class="invalid-feedback"></span>
                                </div>
                                <button id="submit" type="submit"
                                    class="btn btn-primary btn-lg btn-block">Ganti</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->

    <script src="{{ asset('assets-admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendor/sweetalert2/sweetalert2.min.js') }}"></script>

    <script src="{{ asset('js/reset-password.js') }}"></script>
</body>

</html>
