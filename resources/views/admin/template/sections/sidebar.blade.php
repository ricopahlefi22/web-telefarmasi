@php
    function routeActive($route)
    {
        if (Route::current()->uri == $route) {
            return 'active';
        }
    }
@endphp

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        {{-- <img src="{{ asset('img/favicon.png') }}" height="20" alt="Logo" class="brand-image" style="opacity: .8"> --}}
        <span class="brand-text font-weight-light">Admin Telefarmasi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('img/anonim.jpg') }}" class="img-circle elevation-2"
                    alt="Foto {{ Auth::user()->name }}">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ url('p/admin/dashboard') }}" class="nav-link {{ routeActive('p/admin/dashboard') }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Beranda
                            {{-- <span class="right badge badge-danger">New</span> --}}
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('administrators') }}" class="nav-link {{ routeActive('administrators') }}">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>
                            Data Administrator
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('users') }}" class="nav-link {{ routeActive('users') }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Data Pengguna
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('articles') }}" class="nav-link {{ routeActive('articles') }}">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Data Artikel
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('drugs') }}" class="nav-link {{ routeActive('drugs') }}">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>
                            Data Obat-Obatan
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
