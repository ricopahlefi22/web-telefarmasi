@extends('admin.template.base')

@push('style')
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/summernote/dist/summernote.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/dropify/css/dropify.min.css') }}">
@endpush

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <form id="form" action="{{ url('products/store') }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="{{ empty($product->id) ? null : $product->id }}">
                <div class="block-header">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h2>Buat Produk</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('dashboard') }}">
                                        <i class="fa fa-dashboard"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">Master Data</li>
                                <li class="breadcrumb-item">Data Produk</li>
                                <li class="breadcrumb-item active">{{ empty($product->id) ? 'Buat' : 'Edit' }}</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="d-flex flex-row-reverse">
                                <div class="page_action">
                                    <button type="button" class="btn btn-outline-dark">
                                        <i class="fa fa-chevron-left"></i> Kembali
                                    </button>
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
                                            <label for="title" class="form-label">Gambar Produk<strong class="text-danger" title="Wajib Diisi">*</strong><span id="imageError" class="text-danger" style="font-size: 12px;"></span></label>
                                            <input type="hidden" name="hidden_image"
                                                value="{{ empty($product->image) ? null : $product->image }}">
                                            <input id="image" type="file" class="dropify" name="image"
                                                data-default-file="{{ empty($product->image) ? null : asset($product->image) }}"
                                                data-allowed-file-extensions="jpeg jpg png" data-max-file-size="1000K">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <label for="name" class="form-label">
                                                Nama<strong class="text-danger" title="Wajib Diisi">*</strong>
                                            </label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Nama Produk"
                                                value="{{ empty($product->name) ? null : $product->name }}">
                                            <span id="nameError" class="invalid-feedback"></span>
                                        </div>
                                        <div class="mb-2">
                                            <label for="price" class="form-label">
                                                Harga<strong class="text-danger" title="Wajib Diisi">*</strong>
                                            </label>
                                            <input type="text" class="form-control" id="price" name="price"
                                                placeholder="Harga"
                                                value="{{ empty($product->price) ? null : $product->price }}">
                                            <span id="priceError" class="invalid-feedback"></span>
                                        </div>
                                        <div class="mb-2">
                                            <label for="title" class="form-label">
                                                Kategori<strong class="text-danger" title="Wajib Diisi">*</strong>
                                            </label>
                                            <select id="categoryId" name="category_id" class="form-control">
                                                <option value="" hidden selected disabled>*Pilih Kategori Produk
                                                </option>
                                                @foreach ($product_categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        @if (!empty($product->category_id)) {{ $product->category_id == $category->id ? 'selected' : null }} @endif>
                                                        {{ $category->category }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <span id="categoryError" class="invalid-feedback"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <label for="description" class="form-label">
                                        Deskripsi<strong class="text-danger" title="Wajib Diisi">*</strong>
                                        <span id="descriptionError" class="text-danger" style="font-size: 12px;"></span>
                                    </label>
                                    <textarea id="description" name="description" class="summernote">{{ empty($product->description) ? null : $product->description }}</textarea>
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
                        $("#name").removeClass('is-invalid');
                        $("#price").removeClass('is-invalid');
                        $("#categoryId").removeClass('is-invalid');
                        $("#descriptionError").html("");
                        $("#imageError").html("");

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
                                window.location.href = "/products";
                            }
                        });
                    },
                    error: function(error) {
                        console.log(error);
                        $("#button").html("Simpan");

                        if (error.status == 422) {
                            console.log(error);
                            var responseError = error["responseJSON"]["errors"];
                            $("#nameError").html(responseError["name"]);
                            $("#priceError").html(responseError["price"]);
                            $("#categoryError").html(responseError["category_id"]);
                            $("#descriptionError").html(responseError["description"]);
                            $("#imageError").html(responseError["image"]);

                            if (responseError["name"]) {
                                $("#name").addClass('is-invalid').focus();
                            }

                            if (responseError["price"]) {
                                $("#price").addClass('is-invalid');
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
