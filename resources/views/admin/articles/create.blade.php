@extends('admin.template.base')

@push('style')
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/summernote/dist/summernote.css') }}" />
@endpush

@section('content')
    <div id="main-content">
        <div class="container-fluid">
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
                            <li class="breadcrumb-item active">Buat</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                <button type="button" class="btn btn-outline-dark">
                                    <i class="fa fa-chevron-left"></i> Kembali
                                </button>
                                <button type="button" class="btn btn-secondary">
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
                            <div class="mb-2">
                                <label for="title" class="form-label">Gambar Thumbnail<strong
                                        class="text-danger">*</strong>
                                    <span id="titleError" class="text-danger"></span></label>
                                <input type="text" class="form-control" id="title" name="title"
                                    placeholder="Judul Berita">
                            </div>
                            <div class="mb-2">
                                <label for="title" class="form-label">Judul<strong class="text-danger">*</strong>
                                    <span id="titleError" class="text-danger"></span></label>
                                <input type="text" class="form-control" id="title" name="title"
                                    placeholder="Judul Berita">
                            </div>
                            <div class="mb-2">
                                <label for="title" class="form-label">Kategori<strong class="text-danger">*</strong>
                                    <span id="titleError" class="text-danger"></span></label>
                                <select name="" id="" class="form-control">
                                    <option value="">*Pilih Kategori</option>
                                    @foreach (App\Models\ArticleCategory::all() as $category)
                                        <option value="">{{ $category->category }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="">Isi</label>
                                <div class="summernote">
                                    Hello there,
                                    <br />
                                    <p>The toolbar can be customized and it also supports various callbacks such as
                                        <code>oninit</code>, <code>onfocus</code>, <code>onpaste</code> and many more.
                                    </p>
                                    <p>Please try <b>paste some texts</b> here</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('script')
    <script src="{{ asset('assets-admin/vendor/summernote/dist/summernote.js') }}"></script>
@endpush
