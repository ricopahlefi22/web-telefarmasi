@extends('admin.template.base')

@push('style')
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/summernote/dist/summernote.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/dropify/css/dropify.min.css') }}">
@endpush

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <form id="form" action="{{ url('articles/store') }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="{{ empty($article->id) ? null : $article->id }}">
                <div class="block-header">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h2>Buat Artikel</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('dashboard') }}">
                                        <i class="fa fa-dashboard"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">Master Data</li>
                                <li class="breadcrumb-item">Data Artikel</li>
                                <li class="breadcrumb-item active">{{ empty($article->id) ? 'Buat' : 'Edit' }}</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="d-flex flex-row-reverse">
                                <div class="page_action">
                                    <a href="{{ url()->previous() }}" class="btn btn-outline-dark">
                                        <i class="fa fa-chevron-left"></i> Kembali
                                    </a>
                                    <button type="submit" class="btn btn-secondary">
                                        <i class="fa fa-send"></i> Simpan
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
                                            <label for="title" class="form-label">Gambar Thumbnail</label>
                                            <input type="hidden" name="hidden_image"
                                                value="{{ empty($article->image) ? null : $article->image }}">
                                            <input id="image" type="file" class="dropify" name="image"
                                                data-default-file="{{ empty($article->image) ? null : asset($article->image) }}"
                                                data-allowed-file-extensions="jpeg jpg png" data-max-file-size="1000K">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <label for="title" class="form-label">
                                                Judul<strong class="text-danger" title="Wajib Diisi">*</strong>
                                            </label>
                                            <input type="text" class="form-control" id="title" name="title"
                                                placeholder="Judul Berita"
                                                value="{{ empty($article->title) ? null : $article->title }}">
                                            <span id="titleError" class="invalid-feedback"></span>
                                        </div>
                                        <div class="mb-2">
                                            <label for="title" class="form-label">
                                                Kategori<strong class="text-danger" title="Wajib Diisi">*</strong>
                                            </label>
                                            <select id="categoryId" name="category_id" class="form-control">
                                                <option value="" hidden selected disabled>*Pilih Kategori Artikel
                                                </option>
                                                @foreach ($article_categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        @if (!empty($article->category_id)) {{ $article->category_id == $category->id ? 'selected' : null }} @endif>
                                                        {{ $category->category }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <span id="categoryError" class="invalid-feedback"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <label for="body" class="form-label">
                                        Isi<strong class="text-danger" title="Wajib Diisi">*</strong> <span id="bodyError"
                                            class="text-danger" style="font-size: 12px;"></span>
                                    </label>
                                    <textarea id="body" name="body" class="summernote">{{ empty($article->body) ? null : $article->body }}</textarea>
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
