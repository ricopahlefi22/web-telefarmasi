@extends('admin.template.base')

@push('style')
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/summernote/dist/summernote.css') }}" />
@endpush

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <form id="form" action="{{ url('about/store') }}" method="POST">
                @csrf
                <div class="block-header">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h2>Tentang Kami</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('dashboard') }}">
                                        <i class="fa fa-dashboard"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">Konten Website</li>
                                <li class="breadcrumb-item active">Tentang Kami</li>
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
                                <div class="mb-2">
                                    <textarea id="about" name="about" class="summernote">{{ $web_config->about }}</textarea>
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
                                window.location.reload();
                            }
                        });
                    },
                    error: function(error) {
                        $("#submit").html('<i class="fa fa-send"></i> Perbarui');

                        if (error.status == 422) {
                            Swal.fire({
                                icon: "error",
                                title: "Gagal!",
                                text: error.responseJSON.message,
                            });
                        }
                    },
                });
            });
        });
    </script>
@endpush
