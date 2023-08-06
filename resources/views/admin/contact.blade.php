@extends('admin.template.base')

@push('style')
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/dropify/css/dropify.min.css') }}">
@endpush

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <form id="form" action="{{ url('contact/store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="block-header">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h2>Kontak</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('dashboard') }}">
                                        <i class="fa fa-dashboard"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">Konten Website</li>
                                <li class="breadcrumb-item active">Kontak</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="d-flex flex-row-reverse">
                                <div class="page_action">
                                    <button id="submit" type="submit" class="btn btn-secondary">
                                        <i class="fa fa-send"></i> Perbarui
                                    </button>
                                </div>
                                <div class="p-2 d-flex">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <label for="name" class="form-label">
                                                Nama Apotek<strong class="text-danger" title="Wajib Diisi">*</strong>
                                            </label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                value="{{ $web_config->name }}">
                                            <span id="nameError" class="invalid-feedback"></span>
                                        </div>
                                        <div class="mb-2">
                                            <label for="address" class="form-label">
                                                Alamat<strong class="text-danger" title="Wajib Diisi">*</strong>
                                            </label>
                                            <input type="text" class="form-control" id="address" name="address"
                                                value="{{ $web_config->address }}">
                                            <span id="addressError" class="invalid-feedback"></span>
                                        </div>
                                        <div class="mb-2">
                                            <label for="email" class="form-label">
                                                Email<strong class="text-danger" title="Wajib Diisi">*</strong>
                                            </label>
                                            <input type="text" class="form-control" id="email" name="email"
                                                value="{{ $web_config->email }}">
                                            <span id="emailError" class="invalid-feedback"></span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <label for="phoneNumber" class="form-label">
                                                Nomor Handphone<strong class="text-danger" title="Wajib Diisi">*</strong>
                                            </label>
                                            <input type="text" class="form-control" id="phoneNumber" name="phone_number"
                                                value="{{ $web_config->phone_number }}">
                                            <span id="phoneNumberError" class="invalid-feedback"></span>
                                        </div>
                                        <div class="mb-2">
                                            <label for="facebook" class="form-label">
                                                URL Facebook
                                            </label>
                                            <input type="text" class="form-control" id="facebook" name="facebook"
                                                value="{{ $web_config->facebook }}">
                                        </div>
                                        <div class="mb-2">
                                            <label for="instagram" class="form-label">
                                                URL Instagram
                                            </label>
                                            <input type="text" class="form-control" id="instagram" name="instagram"
                                                value="{{ $web_config->instagram }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('script')
    <script src="{{ asset('assets-admin/vendor/summernote/dist/summernote.js') }}"></script>
    <script src="{{ asset('assets-admin/vendor/dropify/js/dropify.min.js') }}"></script>

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
                    method: $(this).attr("method"),
                    url: $(this).attr("action"),
                    data: new FormData(this),
                    processData: false,
                    dataType: "json",
                    contentType: false,
                    beforeSend: function() {
                        $("#name").removeClass('is-invalid');
                        $("#address").removeClass('is-invalid');
                        $("#email").removeClass('is-invalid');
                        $("#phoneNumber").removeClass('is-invalid');

                        $("#submit").html(
                            '<div class="text-center"><div class="spinner-border spinner-border-sm text-white"></div> Memproses...</div>'
                        );
                    },
                    success: function(response) {
                        $("#submit").html('<i class="fa fa-send"></i> Perbarui');

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
                                window.location.href = "/contact";
                            }
                        });
                    },
                    error: function(error) {
                        $("#submit").html('<i class="fa fa-send"></i> Perbarui');

                        console.error(error);
                        if (error.status == 422) {
                            var responseError = error["responseJSON"]["errors"];

                            if (responseError["phone_number"]) {
                                $("#phoneNumber").addClass('is-invalid').focus();
                                $("#phoneNumberError").html(responseError["phone_number"]);
                            }

                            if (responseError["email"]) {
                                $("#email").addClass('is-invalid').focus();
                                $("#emailError").html(responseError["email"]);
                            }

                            if (responseError["address"]) {
                                $("#address").addClass('is-invalid').focus();
                                $("#addressError").html(responseError["address"]);
                            }

                            if (responseError["name"]) {
                                $("#name").addClass('is-invalid').focus();
                                $("#nameError").html(responseError["name"]);
                            }
                        }
                    },
                });
            });
        });
    </script>
@endpush
