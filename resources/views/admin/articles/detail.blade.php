@extends('admin.template.base')

@section('content')
    <div id="main-content" class="blog-page">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Detail Artikel</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Master Data</li>
                            <li class="breadcrumb-item">Data Artikel</li>
                            <li class="breadcrumb-item active">Detail</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 left-box">
                    <div class="card single_post">
                        <div class="body">
                            <div class="img-post">
                                <img class="d-block img-fluid" src="{{ asset($article->image) }}" alt="Gambar">
                            </div>
                            <h1 class="mt-3 text-dark"><strong>{{ $article->title }}</strong></h1>
                            {!! nl2br($article->body) !!}
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-12 right-box">
                    <div class="card">
                        <div class="header">
                            <h2>Comments 3</h2>
                        </div>
                        <div class="body">
                            <ul class="comment-reply list-unstyled">
                                <li class="row clearfix">
                                    <div class="icon-box col-md-2 col-4"><img class="img-fluid img-thumbnail"
                                            src="{{ asset('assets-admin/images/sm/avatar2.jpg') }}" alt="Awesome Image"></div>
                                    <div class="text-box col-md-10 col-8 p-l-0 p-r0">
                                        <h5 class="mb-0">Gigi Hadid </h5>
                                        <p>Why are there so many tutorials on how to decouple WordPress? how fast and easy
                                            it is to get it running (and keep it running!) and its massive ecosystem. </p>
                                        <ul class="list-inline">
                                            <li><a href="javascript:void(0);">Mar 09 2018</a></li>
                                            <li><a href="javascript:void(0);">Reply</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="row clearfix">
                                    <div class="icon-box col-md-2 col-4"><img class="img-fluid img-thumbnail"
                                            src="{{ asset('assets-admin/images/sm/avatar3.jpg') }}" alt="Awesome Image"></div>
                                    <div class="text-box col-md-10 col-8 p-l-0 p-r0">
                                        <h5 class="mb-0">Christian Louboutin</h5>
                                        <p>Great tutorial but few issues with it? If i try open post i get following errors.
                                            Please can you help me?</p>
                                        <ul class="list-inline">
                                            <li><a href="javascript:void(0);">Mar 12 2018</a></li>
                                            <li><a href="javascript:void(0);">Reply</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="row clearfix">
                                    <div class="icon-box col-md-2 col-4"><img class="img-fluid img-thumbnail"
                                            src="{{ asset('assets-admin/images/sm/avatar4.jpg') }}" alt="Awesome Image"></div>
                                    <div class="text-box col-md-10 col-8 p-l-0 p-r0">
                                        <h5 class="mb-0">Kendall Jenner</h5>
                                        <p>Very nice and informative article. In all the years I've done small and
                                            side-projects as a freelancer, I've ran into a few problems here and there.</p>
                                        <ul class="list-inline">
                                            <li><a href="javascript:void(0);">Mar 20 2018</a></li>
                                            <li><a href="javascript:void(0);">Reply</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Leave a reply <small>Your email address will not be published. Required fields are
                                    marked*</small></h2>
                        </div>
                        <div class="body">
                            <div class="comment-form">
                                <form class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-block btn-primary">SUBMIT</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>

        </div>
    </div>
@endsection
