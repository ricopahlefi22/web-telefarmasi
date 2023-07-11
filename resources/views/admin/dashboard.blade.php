@extends('admin.template.base')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Analisa</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Beranda</li>
                            <li class="breadcrumb-item active">Analisa</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix row-deck">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card top_widget">
                        <div class="body">
                            <div class="icon"><i class="fa fa-medkit"></i> </div>
                            <div class="content">
                                <div class="text mb-2 text-uppercase">Produk</div>
                                <h4 class="number mb-0">
                                    {{ $product_count }}
                                </h4>
                                <small class="text-muted">Jumlah produk saat ini</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card top_widget">
                        <div class="body">
                            <div class="icon"><i class="fa fa-newspaper-o"></i> </div>
                            <div class="content">
                                <div class="text mb-2 text-uppercase">Artikel</div>
                                <h4 class="number mb-0">
                                    {{ $article_count }}
                                </h4>
                                <small class="text-muted">Jumlah artikel saat ini</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card top_widget">
                        <div class="body">
                            <div class="icon"><i class="fa fa-users"></i> </div>
                            <div class="content">
                                <div class="text mb-2 text-uppercase">Pengguna</div>
                                <h4 class="number mb-0">
                                    {{ $user_count }}
                                </h4>
                                <small class="text-muted">Jumlah pengguna saat ini</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
