<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
    <meta name="author" content="Rico Pahlefi, Kayong Developer">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }} | Admin Apotek Desta Farma</title>
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon">

    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/charts-c3/plugin.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/sweetalert2/sweetalert2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/jquery-datatable/dataTables.bootstrap4.min.css') }}">

    <!-- MAIN Project CSS file -->
    <link rel="stylesheet" href="{{ asset('assets-admin/css/main.css') }}">

    @stack('style')
</head>

<body data-theme="light" class="font-nunito">
    <div id="wrapper" class="theme-cyan">

        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30">
                    <img src="{{ asset('favicon.png') }}" width="48" height="48"
                        alt="Iconic">
                </div>
                <p>Mohon Tunggu...</p>
            </div>
        </div>

        @include('admin.template.sections.navbar')

        @include('admin.template.sections.sidebar')

        @include('admin.template.sections.rightbar')

        @yield('content')

    </div>
    <!-- Javascript -->
    <script src="{{ asset('assets-admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendor/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets-admin/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets-admin/bundles/vendorscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets-admin/bundles/datatablescripts.bundle.js') }}"></script>

    <!-- page vendor js file -->
    <script src="{{ asset('assets-admin/vendor/toastr/toastr.js') }}"></script>
    <script src="{{ asset('assets-admin/bundles/c3.bundle.js') }}"></script>

    <!-- page js file -->
    <script src="{{ asset('assets-admin/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets-admin/js/index.js') }}"></script>

    @stack('script')
</body>

</html>
