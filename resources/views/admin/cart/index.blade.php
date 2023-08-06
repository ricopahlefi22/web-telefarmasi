@extends('admin.template.base')

@section('content')
    @include('admin.article-category.form-modal')

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Data Keranjang</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Master Data</li>
                            <li class="breadcrumb-item active">Data Keranjang</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <div class="table-responsive">
                                <table id="table" class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                    <thead>
                                        <tr>
                                            <th>Pengguna</th>
                                            <th>Produk</th>
                                            <th>Jumlah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Pengguna</th>
                                            <th>Produk</th>
                                            <th>Jumlah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('script')
    <script type="text/javascript" src="{{ asset('js/cart-admin.js') }}"></script>
@endpush
