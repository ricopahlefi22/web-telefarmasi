<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
    <meta name="author" content="Rico Pahlefi, Kayong Developer">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login - Admin Apotek Desta Farma</title>

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
                            <h5><strong>Login</strong></h5>
                            <p>masukkan email dan passwordmu untuk memastikan identitasmu.</p>
                        </div>
                        <div class="body">
                            <form id="form" class="form-auth-small" action="login" method="POST">
                                <div class="form-group">
                                    <label for="email" class="control-label sr-only">Email</label>
                                    <input id="email" type="text" name="email" class="form-control" placeholder="Email">
                                    <span id="emailError" class="invalid-feedback"></span   >
                                </div>
                                <div class="form-group">
                                    <label for="password" class="control-label sr-only">Password</label>
                                    <input id="password" type="password" name="password" class="form-control" placeholder="Password">
                                    <span id="passwordError" class="invalid-feedback"></span>
                                </div>
                                <button id="submit" type="submit"
                                    class="btn btn-primary btn-lg btn-block">Masuk</button>
                                <div class="bottom">
                                    <span class="helper-text m-b-10">
                                        <i class="fa fa-lock"></i>
                                        <a href="{{ url('forgot-password') }}" class="text-dark">Lupa Kata Sandi?</a>
                                    </span>
                                </div>
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

    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>
