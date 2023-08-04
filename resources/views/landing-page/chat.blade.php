<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Rico Pahlefi, Kayong Developer">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Konsultasi - Apotek Desta Farma</title>
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/font-awesome/css/font-awesome.min.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('assets-admin/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/css/chatapp.css') }}">
</head>

<body data-theme="light" class="font-nunito">
    <div id="wrapper" class="theme-cyan">
        <div class="chat" style="height: 80%;">
            <div class="chat-header clearfix bg-white" style="position: absolute; top: 0; left: 0; right: 0;z-index: 1000;">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset('favicon.png') }}" alt="avatar" />
                        <div class="chat-about">
                            <h5 class="mb-0">Apoteker Desta Farma</h5>
                            <small>Buka dari jam 08.00 - 21.00</small>
                        </div>
                    </div>
                    <div class="col-lg-6 hidden-sm text-right">
                        <a href="{{ url()->previous() }}" class="btn btn-dark">
                            <i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                </div>
            </div>
            <div id="messageBody" class="chat-history" style="height: 100vh;padding-top: 100px;padding-bottom: 50px;overflow: scroll;">
                <ul id="chatWrapper">
                </ul>
            </div>
            <div style="position: absolute; bottom: 0; left: 0; right: 0;">
                <form id="chatForm" action="chat/store" method="POST">
                    <div class="chat-message clearfix">
                        <div class="input-group mb-0">
                            <input type="hidden" name="status" value="user">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input id="message" type="text" name="message" class="form-control"
                                placeholder="Ketikkan Pesanmu">
                            <div class="input-group-prepend">
                                <button id="submit" type="submit"
                                    class="input-group-text bg-secondary text-white" disabled>
                                    <i class="icon-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Javascript -->
    <script src="{{ asset('assets-admin/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets-admin/bundles/vendorscripts.bundle.js') }}"></script>

    <script src="{{ asset('assets-admin/bundles/easypiechart.bundle.js') }}"></script> <!-- easypiechart Plugin Js -->
    <script src="{{ asset('assets-admin/vendor/sweetalert/sweetalert.min.js') }}"></script> <!-- SweetAlert Plugin Js -->

    <script src="{{ asset('js/chat.js') }}"></script>
</body>

</html>
