@php
    function routeActive($route)
    {
        if (Route::current()->uri == $route) {
            return 'active';
        }
    }

    function menuOpen($list)
    {
        if (str_contains($list, Route::current()->uri)) {
            return 'active';
        }
    }
@endphp

<!-- main left menu -->
<div id="left-sidebar" class="sidebar">
    <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
    <div class="sidebar-scroll">
        <div class="user-account">
            <img src="{{ asset('assets-admin/images/user.png') }}" class="rounded-circle user-photo"
                alt="User Profile Picture">
            <div class="dropdown">
                <span>Hi!</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown">
                    <strong>{{ Auth::user()->name }}</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-right account">
                    <li><a href="page-profile2.html"><i class="icon-user"></i>Profile Saya</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ url('logout') }}"><i class="icon-power"></i>Keluar</a></li>
                </ul>
            </div>
            <hr>
        </div>

        <!-- Tab panes -->
        <div class="tab-content padding-0">
            <div class="tab-pane active" id="menu">
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu li_animation_delay">
                        <li class="{{ menuOpen('dashboard, chats') }}">
                            <a href="#Dashboard" class="has-arrow"><i
                                    class="fa fa-dashboard"></i><span>Beranda</span></a>
                            <ul>
                                <li class="{{ routeActive('dashboard') }}">
                                    <a href="{{ url('dashboard') }}">Analisa</a>
                                </li>
                                <li class="{{ routeActive('chats') }}">
                                    <a href="{{ url('chats') }}">Konsultasi</a>
                                </li>
                            </ul>
                        </li>
                        <li
                            class="{{ menuOpen('products, articles, product-categories, article-categories, users, administrators') }}">
                            <a href="#App" class="has-arrow">
                                <i class="fa fa-th-large"></i>
                                <span>Master Data</span>
                            </a>
                            <ul>
                                <li>
                                    <a class="text-muted">Data Pesanan</a>
                                </li>
                                <li class="{{ routeActive('products') }}">
                                    <a href="{{ url('products') }}">Data Produk</a>
                                </li>
                                <li class="{{ routeActive('articles') }}">
                                    <a href="{{ url('articles') }}">Data Artikel</a>
                                </li>
                                <li class="{{ routeActive('product-categories') }}">
                                    <a href="{{ url('product-categories') }}">Data Kategori Produk</a>
                                </li>
                                <li class="{{ routeActive('article-categories') }}">
                                    <a href="{{ url('article-categories') }}">Data Kategori Artikel</a>
                                </li>
                                <li class="{{ routeActive('users') }}">
                                    <a href="{{ url('users') }}">Data Pengguna</a>
                                </li>
                                <li class="{{ routeActive('administrators') }}">
                                    <a href="{{ url('administrators') }}">Data Administrator</a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ menuOpen('about, contact') }}">
                            <a href="#forms" class="has-arrow"><i class="fa fa-pencil"></i><span>Konten
                                    Website</span></a>
                            <ul>
                                <li class="{{ routeActive('about') }}">
                                    <a href="{{ url('about') }}">Tentang Kami</a>
                                </li>
                                <li class="{{ routeActive('contact') }}">
                                    <a href="{{ url('contact') }}">Kontak</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
