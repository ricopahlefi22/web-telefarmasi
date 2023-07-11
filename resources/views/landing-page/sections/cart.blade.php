@php
    $carts = App\Models\Cart::where('user_id', Auth::check() ? Auth::user()->id : null)->get();
@endphp

<div class="mini-cart-product-area ltn__scrollbar">
    @foreach ($carts as $cart)
        <div class="mini-cart-item clearfix">
            <div class="mini-cart-img">
                <a href="#">
                    <img src="{{ asset($cart->product->image) }}" alt="Gambar Produk">
                </a>
                <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
            </div>
            <div class="mini-cart-info">
                <h6><a href="{{ url('products/detail', $cart->product->id) }}">{{ $cart->product->name }}</a></h6>
                <span class="mini-cart-quantity">{{ $cart->quantity }} x Rp. {{ $cart->product->price }}</span>
            </div>
        </div>
    @endforeach
</div>
<div class="mini-cart-footer">
    <div class="mini-cart-sub-total">
        @php
            $total = 0;

            foreach ($carts as $cart) {
                $total += $cart->quantity * $cart->product->price;
            }
        @endphp
        <h5>Total: <span>Rp. {{ $total }}</span></h5>
    </div>
    <div class="btn-wrapper">
        <a href="{{ url('cart') }}" class="theme-btn-1 btn btn-effect-1">Keranjang</a>
        <a href="{{ url('checkout') }}" class="theme-btn-2 btn btn-effect-2">Bayar</a>
    </div>
</div>
