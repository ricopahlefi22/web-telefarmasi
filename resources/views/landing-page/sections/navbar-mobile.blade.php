<div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <div class="site-logo">
                @include('landing-page.sections.logo')
            </div>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="ltn__utilize-menu">
            <ul>
                <li><a href="{{ url('/') }}">Beranda</a></li>
                <li><a href="javascript:void(0)">Artikel</a>
                    <ul class="sub-menu">
                        @foreach (App\Models\ArticleCategory::all() as $category)
                            <li><a
                                    href="{{ url('articles/category', Str::lower($category->category)) }}">{{ $category->category }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="javascript:void(0)">Produk</a>
                    <ul class="sub-menu">
                        @foreach (App\Models\ProductCategory::all() as $category)
                            <li><a href="{{ url('products', $category->id) }}">{{ $category->category }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{ url('contact') }}">Kontak</a></li>
                <li><a href="{{ url('about') }}">Tentang Kami</a></li>
            </ul>
        </div>
        <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
            <ul>
                <li>
                    <a href="account.html" title="My Account">
                        <span class="utilize-btn-icon">
                            <i class="far fa-user"></i>
                        </span>
                        Akun
                    </a>
                </li>
                @if (Auth::check())
                    <li>
                        <a href="cart.html" title="Shoping Cart">
                            <span class="utilize-btn-icon">
                                <i class="fas fa-shopping-cart"></i>
                                <sup>5</sup>
                            </span>
                            Keranjang
                        </a>
                    </li>
                @endif
            </ul>
        </div>
        <div class="ltn__social-media-2">
            <ul>
                @if (!empty(App\Models\WebConfig::first()->instagram))
                    <li>
                        <a href="{{ App\Models\WebConfig::first()->instagram }}" title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                @endif
                @if (!empty(App\Models\WebConfig::first()->facebook))
                    <li>
                        <a href="{{ App\Models\WebConfig::first()->facebook }}" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
