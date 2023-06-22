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
                                    <button type="submit" class="btn btn-secondary">
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
                                            <label for="title" class="form-label">Logo</label>
                                            <input type="text" name="hidden_image"
                                                value="{{ empty($web_config->logo) ? null : $web_config->logo }}">
                                            <input id="image" type="file" class="dropify" name="image"
                                                data-default-file="{{ empty($web_config->logo) ? null : asset($web_config->logo) }}"
                                                data-allowed-file-extensions="jpeg jpg png" data-max-file-size="1000K">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <label for="name" class="form-label">
                                                Nama Apotek<strong class="text-danger" title="Wajib Diisi">*</strong>
                                            </label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                value="{{ $web_config->name }}">
                                            <span id="titleError" class="invalid-feedback"></span>
                                        </div>
                                        <div class="mb-2">
                                            <label for="address" class="form-label">
                                                Alamat<strong class="text-danger" title="Wajib Diisi">*</strong>
                                            </label>
                                            <input type="text" class="form-control" id="address" name="address"
                                                value="{{ $web_config->address }}">
                                            <span id="titleError" class="invalid-feedback"></span>
                                        </div>
                                        <div class="mb-2">
                                            <label for="email" class="form-label">
                                                Email<strong class="text-danger" title="Wajib Diisi">*</strong>
                                            </label>
                                            <input type="text" class="form-control" id="email" name="email"
                                                value="{{ $web_config->email }}">
                                            <span id="titleError" class="invalid-feedback"></span>
                                        </div>
                                        <div class="mb-2">
                                            <label for="phoneNumber" class="form-label">
                                                Nomor Handphone<strong class="text-danger" title="Wajib Diisi">*</strong>
                                            </label>
                                            <input type="text" class="form-control" id="phoneNumber" name="phone_number"
                                                value="{{ $web_config->phone_number }}">
                                            <span id="titleError" class="invalid-feedback"></span>
                                        </div>
                                        <div class="mb-2">
                                            <label for="facebook" class="form-label">
                                                URL Facebook<strong class="text-danger" title="Wajib Diisi">*</strong>
                                            </label>
                                            <input type="text" class="form-control" id="facebook" name="facebook"
                                                value="{{ $web_config->facebook }}">
                                            <span id="titleError" class="invalid-feedback"></span>
                                        </div>
                                        <div class="mb-2">
                                            <label for="instagram" class="form-label">
                                                URL Instagram<strong class="text-danger" title="Wajib Diisi">*</strong>
                                            </label>
                                            <input type="text" class="form-control" id="instagram" name="instagram"
                                                value="{{ $web_config->instagram }}">
                                            <span id="titleError" class="invalid-feedback"></span>
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

            $('.dropify').dropify({
                messages: {
                    default: 'Klik atau seret gambar ke sini',
                    replace: 'Klik atau seret untuk mengubah gambar',
                    remove: 'Hapus',
                    error: 'Oops, Terjadi Kesalahan'
                },
            });

            $('.summernote').summernote({
                toolbar: [
                    ['fontstyle', ['fontname', 'fontsize', 'bold', 'italic', 'underline',
                        'strikethrough', 'superscript', 'subscript', 'deleteallformat'
                    ]],
                    ['para', ['style', 'ul', 'ol', 'paragraph', 'height']],
                    ['misc', ['undo', 'redo', 'codeview']],
                ]
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
                        $("#title").removeClass('is-invalid');
                        $("#categoryId").removeClass('is-invalid');
                        $("#bodyError").html("");

                        $("#button").html(
                            '<div class="text-center"><div class="spinner-border spinner-border-sm text-white"></div> Memproses...</div>'
                        );
                    },
                    success: function(response) {
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
                                window.location.href = "/articles";
                            }
                        });
                    },
                    error: function(error) {
                        $("#button").html("Simpan");

                        if (error.status == 422) {
                            var responseError = error["responseJSON"]["errors"];
                            $("#titleError").html(responseError["title"]);
                            $("#categoryError").html(responseError["category_id"]);
                            $("#bodyError").html(responseError["body"]);

                            if (responseError["title"]) {
                                $("#title").addClass('is-invalid').focus();
                            }

                            if (responseError["category_id"]) {
                                $("#categoryId").addClass('is-invalid');
                            }
                        }
                    },
                });
            });
        });
    </script>
@endpush
