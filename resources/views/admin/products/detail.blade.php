@extends('admin.template.base')

@section('content')
    <div id="main-content" class="blog-page">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Detail Produk</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Master Data</li>
                            <li class="breadcrumb-item">Data Produk</li>
                            <li class="breadcrumb-item active">Detail</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 left-box">
                    <div class="card single_post">
                        <div class="body">
                            <div class="row">
                                <div class="col-3">
                                    <img class="d-block img-fluid" src="{{ asset($product->image) }}" alt="Gambar">
                                </div>
                                <div class="col-9">
                                    <span>Nama Produk : <strong>{{ $product->name }}</strong></span><br>
                                    <span>Harga : <strong>{{ $product->price }}</strong></span><br>
                                    <span>Kategori : <strong>{{ $product->category->category }}</strong></span>
                                </div>
                            </div>
                            <p class="mt-2">{!! nl2br($product->description) !!}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
