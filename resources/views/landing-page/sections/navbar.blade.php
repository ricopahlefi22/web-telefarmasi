<ul>
    <li><a href="{{ url('/') }}">Beranda</a></li>
    <li class="menu-icon"><a href="javascript:void(0)">Artikel</a>
        <ul>
            @foreach (App\Models\ArticleCategory::all() as $category)
                <li><a
                    href="{{ url('articles/category', Str::slug($category->category)) }}">{{ $category->category }}</a>
                </li>
            @endforeach
        </ul>
    </li>
    <li class="menu-icon"><a href="javascript:void(0)">Produk</a>
        <ul class="mega-menu">
            <li><a href="javascript:void(0)">Kategori</a>
                <ul>
                    @foreach (App\Models\ProductCategory::all() as $category)
                        <li>
                            <a href="{{ url('products/category', Str::slug($category->category)) }}">
                                {{ $category->category }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li>
                <img src="{{ asset('assets-landing/img/navbar.jpg') }}">
            </li>
        </ul>
    </li>
    <li><a href="{{ url('contact') }}">Kontak</a></li>
    <li><a href="{{ url('about') }}">Tentang Kami</a></li>
</ul>
