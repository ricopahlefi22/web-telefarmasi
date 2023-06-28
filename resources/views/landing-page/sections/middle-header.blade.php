<ul>
    <li class="d-lg-none">
        <!-- header-search-1 -->
        <div class="header-search-wrap">
            <div class="header-search-1">
                <div class="search-icon">
                    <i class="icon-search  for-search-show"></i>
                    <i class="icon-cancel  for-search-close"></i>
                </div>
            </div>
            <div class="header-search-1-form">
                <form id="#" method="get" action="#">
                    <input type="text" name="search" value="" placeholder="Search here..." />
                    <button type="submit">
                        <span><i class="icon-search"></i></span>
                    </button>
                </form>
            </div>
        </div>
    </li>
    <li class="d-none---">
        <!-- user-menu -->
        <div class="ltn__drop-menu user-menu">
            <ul>
                <li>
                    <a href="#"><i class="icon-user"></i></a>
                    <ul>
                        <li><a href="{{ url('login') }}">Login</a></li>
                        <li><a href="{{ url('register') }}">Daftar</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </li>
    <li>
        <!-- mini-cart 2 -->
        @if (Auth::check())
            <div class="mini-cart-icon mini-cart-icon-2">
                <a href="#ltn__utilize-cart-menu" class="ltn__utilize-toggle">
                    <span class="mini-cart-icon">
                        <i class="icon-shopping-cart"></i>
                        <sup>2</sup>
                    </span>
                    <h6><span>Your Cart</span> <span class="ltn__secondary-color">$89.25</span></h6>
                </a>
            </div>
        @endif
    </li>
</ul>